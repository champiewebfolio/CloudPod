<?php

namespace CloudPod\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CloudPod\UserBundle\Entity\User;
use CloudPod\ClassroomBundle\Entity\Classroom;
//use CloudPod\UserBundle\Entity\UserRoles;
use CloudPod\UserBundle\Entity\UserProfile;
use CloudPod\UserBundle\Forms\Type\UserEnrollmentType;
use CloudPod\UserBundle\Model\RegistrationModel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends Controller
{
	  public function profileAction($uname)
    {         
        
       $userObject = $this->UserObject($uname);                
/*-----------------------------------
query for UserProfile 
------------------------------------*/
       $userProfile = $this->getDoctrine()
                    ->getRepository('CloudPodUserBundle:UserProfile')
                    ->getUserProfile($userObject->getUserID());
/*------------------------------------------
query to get the classrooms of the user.
-----------------------------------------*/

                $classrooms = $userObject->getUserClassrooms();            
        $enrollForm = $this->enrollmentForm();


    return $this->render('CloudPodUserBundle:UserProfile:index.html.twig', array(
       'userclass' => $classrooms, //classroom object
       'userprofile' => $userProfile, //userprofile object
       'name' => $uname, //name of the profile
       'form' => $enrollForm->createView())); //enrollment form for ROLE_USER
    }

    public function enrollmentForm()
    {
        $model = new RegistrationModel();
        $enrollForm = $this->createForm(new UserEnrollmentType, $model );

        return $enrollForm;
        
    }

    public function enrollClassAction(Request $request)
    {
        
        $enrollForm = $this->enrollmentForm();

        $classroom = new Classroom();
        $user = new User();

        $em = $this->getDoctrine()->getManager();

        if($request->isMethod('POST'))
        {
            $enrollForm->bind($request);

            if ($enrollForm->isValid()) //if form passed the validator
            {
/*--------------------------------------------------------
Query for classID through classKey entered in the form
---------------------------------------------------------*/
                $key = $enrollForm->get('classKey')->getData();
                $class_repository = $this->getDoctrine()->getRepository('CloudPodClassroomBundle:Classroom');
                $classroom = $class_repository->findBy(array('className' => ($enrollForm->get('className')->getData())));
//FOR EACH $classroom result (classname is not a unique value)
                foreach ($classroom as $class) //run through each className and compare classKey
                {
                    $classkey = $key.$class->getClassKeySalt(); 
                    $classkeyHashed = $class->getClassKey();

                    
                    if( $classkey == $classkeyHashed )
                    {
                       $classObj = $class_repository->find($class->getClassID());

    /*--------------------------------------------------------
Query for userID through classKey entered in the form
---------------------------------------------------------*/
                        $session = $this->getRequest()->getSession();

                        $userObject = $this->UserObject($session->get('username'));              
                        $user_repository = $this->getDoctrine()->getRepository('CloudPodUserBundle:User');
                        $user = $user_repository->find($userObject->getUserID());
               
/*--------------------------------------------------------
insert the data to the joinTable
---------------------------------------------------------*/
                        $user->addUserClassroom($classObj);            
                        $class->addClassUser($user);

                        $em->flush();

                        $this->get('session')->setFlash(
                        'notice',
                        'You are now enrolled in '.$class->getClassName());

                        return $this->redirect($this->generateUrl('_user_profile',array('uname' => $session->get('username'))));
                    }
                   
                }
                return new response('Incorrect key or class name');
  
                }
            }
            return new Response('woo');

    }
    public function UserObject($uname)
    {

        $username = $this->getDoctrine()->getRepository('CloudPodUserBundle:User')
                       ->findOneByUserName($uname);

        return $username;

    }

}