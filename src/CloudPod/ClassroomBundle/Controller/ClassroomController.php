<?php
namespace CloudPod\ClassroomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CloudPod\UserBundle\Entity\User;

use CloudPod\ClassroomBundle\Entity\Classroom;
use CloudPod\ClassroomBundle\Model\LessonModel;
use CloudPod\ClassroomBundle\Entity\ClassResources;
use CloudPod\ClassroomBundle\Entity\ClassSubmissions;

use CloudPod\ClassroomBundle\Forms\Type\ClassRegistrationType;
use CloudPod\ClassroomBundle\Forms\Type\ClassResourcesUploadFormType;
use CloudPod\ClassroomBundle\Forms\Type\ClassSubmissionFormType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

class ClassroomController extends Controller
{
	public function registerClassAction(Request $request)
	{
		$classroom = new Classroom();
		$user = new User();
		$form = $this->createForm(new ClassRegistrationType, $classroom );

		$em = $this->getDoctrine()->getManager();

		if($request->isMethod('POST'))
		{
			$form->bind($request);

			$username = $this->container->get('security.context')->getToken()->getUser();
			$repository = $this->getDoctrine()->getRepository('CloudPodUserBundle:User');
        	$user = $repository->find($username);
        	$user = $repository->find($user->getUserID());


            $salt = md5(uniqid(rand()));
			
			$classroom->setClassName($form->get('className')->getData())
					->setClassDesc($form->get('classDesc')->getData())
                    ->setClassKeySalt($salt)
					->setClassKey(($form->get('classKey')->getData()).$salt)
					->setclassCreatedBy($user);

			if ($form->isValid()) //if form passed the validator
        	{  

	          $em->persist($classroom);
	          $em->flush();

	          $class_repository = $this->getDoctrine()->getRepository('CloudPodClassroomBundle:Classroom');
	          $classroom = $class_repository->find($classroom->getClassID());

	          $user->addUserClassroom($classroom);
	          $classroom->addClassUser($user);

	          $em->flush();
	          $this->get('session')->getFlashBag()->add('notice', 'Class created Successfully!!');

            return $this->render('CloudPodClassroomBundle:FlashBag:FlashBagRender.html.twig'); //return $this->redirect($this->generateUrl('admin_home'));
        	}
            
        else {return new Response('Form Invalid');}

		}
		return $this->render('CloudPodClassroomBundle:Forms:ClassRegistrationForm.html.twig',array('form' => $form->createView()));
	}



    public function StudentClassroomAction($classID)
    {

/*------------------------------------------------------------
store the array keys from classusers()
-------------------------------------------------------------*/
        $this->SessionClassroomID($classID);

       $classuser = $this->array_access(($this->classusers($classID)), 'user');
       $classroom = $this->array_access(($this->classusers($classID)), 'classroom');


       $classAnnouncements = $this->searchClassAnnouncements($classID);
       $classLessons = $this->searchClassLessons($classID);


        return $this->render('CloudPodClassroomBundle:Classrooms:Student.html.twig' ,array(
            'classroom' => $classroom, 
            'classuser' => $classuser,
            'classid' => $classID,
            'lessons' => $classLessons,
            'announcements' => $classAnnouncements));
    }

    public function LecturerClassroomAction($classID)
    {      
            $this->SessionClassroomID($classID);
            
            $classuser = $this->array_access(($this->classusers($classID)), 'user');
            $classroom = $this->array_access(($this->classusers($classID)), 'classroom');

            $classAnnouncements = $this->searchClassAnnouncements($classID);
            $classLessons = $this->searchClassLessons($classID);

            //$session = $this->getRequest()->getSession();
           // $session->remove('collaburl');
           // $collab = $session->get('collaburl');

            return $this->render('CloudPodClassroomBundle:Classrooms:Lecturer.html.twig' ,array(
                'classroom' => $classroom, 
                'classuser' => $classuser,
                'announcements' => $classAnnouncements,
                'lessons' => $classLessons
                ));
        

    }

    public function ClassroomResourceAction()
    {      
            $session = $this->get('session'); 
            $sessionclassID = $session->get('classroomActive'); 

            $resources = $this->getDoctrine()->getRepository('CloudPodClassroomBundle:Classroom')
                              ->find($sessionclassID)->getResources();
            //$documents = $repository->findAll();
        //return new response($documents->getName());
        
            return $this->render('CloudPodClassroomBundle:Classrooms:ClassResources.html.twig',array(
            'resources' => $resources));
    }

    public function AddClassResourceAction(Request $request)
    {

        $resource = new ClassResources();
        $classroom = new Classroom();
/*------------------------------
FORMS
----------------------------------*/
        $resourceForm = $this->createForm(new ClassResourcesUploadFormType, $resource);

        if($request->isMethod('POST'))
        {
            
            $resourceForm->bind($request);

            $session = $this->get('session'); 
            $sessionclassID = $session->get('classroomActive'); 

            $classroom = $this->getDoctrine()
                    ->getRepository('CloudPodClassroomBundle:Classroom')
                    ->getClassroomID($sessionclassID);

            
            $resource->setDynamicLoc($sessionclassID);
            if ($resourceForm->isValid()) //if form passed the validator
            {  
                //PERSIST FILE UPLOAD --------------------------------
                 //sets the directory
                $em = $this->getDoctrine()->getManager();
                $em->persist($resource);
                $em->flush();
                //------------------------------------------------------
                    $classroom->addResource($resource);
                    $em->flush();
                //-------------------------------------------------------------

                $this->get('session')->getFlashBag()->add('notice', 'Resource added!');

                return $this->render('CloudPodClassroomBundle:FlashBag:FlashBagRender.html.twig');

            }
               //return $this->redirect($this->generateUrl('admin_home'));
            
            else { return new Response('Form Invalid');}

        }
    
        return $this->render('CloudPodClassroomBundle:Forms:ClassResourceForm.html.twig',array(
            //'form' => $lessonForm->createView(), 
            'resourceform' => $resourceForm->createView()
            ));


    }

    public function ClassSubmitFileAction(Request $request , $classID)
    {
        $submission = new ClassSubmissions();
        $user = new User();
        $submissionForm = $this->createForm(new ClassSubmissionFormType, $submission );

         if($request->isMethod('POST'))
        {
            
            $submissionForm->bind($request);
            $session = $this->get('session'); 
            $sessionclassID = $session->get('classroomActive'); 

            $classroom = $this->getDoctrine()
                    ->getRepository('CloudPodClassroomBundle:Classroom')
                    ->getClassroomID($sessionclassID); //uses repository

            $user = $this->getDoctrine()
                        ->getRepository('CloudPodUserBundle:User')
                        ->findOneByUserName($session->get('username'));
            
            $submission->setDynamicLoc($sessionclassID)
                       ->addSubmittedBy($user);
            
            if ($submissionForm->isValid()) //if form passed the validator
            {  
                //PERSIST FILE UPLOAD --------------------------------
                 //sets the directory
                $em = $this->getDoctrine()->getManager();
                $em->persist($submission);
                $em->flush();
                //-------------------------------------------------------------

                $this->get('session')->getFlashBag()->add('notice', 'File submitted!');

                return $this->render('CloudPodClassroomBundle:FlashBag:FlashBagRender.html.twig');

            }
               //return $this->redirect($this->generateUrl('admin_home'));
            
            else { return new Response('Form Invalid');}

        }


         return $this->render('CloudPodClassroomBundle:Forms:ClassSubmissionForm.html.twig',array(
            //'form' => $lessonForm->createView(), 
            'form' => $submissionForm->createView()
            ));

    }
    public function CollaborationAction(Request $request)
    {
        $collab = new LessonModel();

        $form = $this->createFormBuilder($collab)
        ->add('collaborationURL','text', array('label' => 'Collaboration Room link :'))
        ->getForm();

        if($request->isMethod('POST'))
        {
            $form->bind($request);

            if ($form->isValid()) //if form passed the validator
            {  
                $session = $this->getRequest()->getSession();
                $session->set('collaburl', $form->get('collaborationURL')->getData());

              return new response('Class created'); //return $this->redirect($this->generateUrl('admin_home'));
            }
            
        else {return new Response('Form Invalid');}
       
            }

            return $this->render('CloudPodClassroomBundle:Forms:CollabURLForm.html.twig',array('form' => $form->createView()));   
    }
       
/*------------------------------------------------------
ALL METHODS HERE!
------------------------------------------------*/

    public function generateClassKey()
    {
        $keys = array_merge(range(0,9), range('a', 'z'));
        $key = '';

            for($i=0; $i < 8; $i++)
            {
                $key .= $keys[array_rand($keys)];
            }

    return $key;
    }
 
/*------------------------------------------------------------
This returns the keys of each array thrown. used for classusers 
return array
-------------------------------------------------------------*/
   function array_access($arr, $key)
    { 	
    	return $arr[$key]; 
    } 


    public function classusers($classID)
    {
/*-----------------------------------------------------
This gets the class users through the jointable mapping
--------------------------------------------------*/
    	$class_repository = $this->getDoctrine()->getRepository('CloudPodClassroomBundle:Classroom');
    	$classroom = $class_repository->find($classID);
        $userinfo = $classroom->getClassUsers();
        return array('user' => $userinfo, 'classroom' => $classroom );

    }

/*-----------------------------------------------------
This searches for the announcement of each class
--------------------------------------------------*/

    public function searchClassAnnouncements($id)
    {
        $classroom = $this->getDoctrine()
                    ->getRepository('CloudPodClassroomBundle:Classroom')
                    ->getClassroomID($id);
        $classAnnouncements= $classroom->getClassAnnouncement();

       return $classAnnouncements;
    }

    public function searchClassLessons($id)
    {
        $classroom = $this->getDoctrine()
                    ->getRepository('CloudPodClassroomBundle:Classroom')
                    ->getClassroomID($id);
        $classLessons= $classroom->getClassLesson();

       return $classLessons;
    }

    public function DestroySession()
    {
        $session = $this->getRequest()->getSession();
       $session->remove('classroomActive');
    }

    public function SessionClassroomID($classID)
    {
         $this->DestroySession();
    $session = $this->getRequest()->getSession();
            $session->set('classroomActive', $classID);
    }

  



}