<?php
namespace CloudPod\ClassroomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CloudPod\ClassroomBundle\Entity\Classroom;
use CloudPod\ClassroomBundle\Entity\Lessons;
use CloudPod\ClassroomBundle\Entity\LessonFileUpload;
use CloudPod\ClassroomBundle\Model\LessonModel;

use CloudPod\ClassroomBundle\Forms\Type\LessonFormType;
use CloudPod\ClassroomBundle\Forms\Type\LessonUploadFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;

use Symfony\Component\HttpFoundation\Session;



class LessonController extends Controller
{
	public function createLessonAction(Request $request, $classID)
	{
		//$lessonModel = new LessonModel();

		$lessonfile = new LessonFileUpload();
		$lesson = new Lessons();
/*------------------------------
FORMS
----------------------------------*/
		$lessonForm = $this->createForm(new LessonFormType, $lesson);
		$fileForm = $this->createForm(new LessonUploadFormType, $lessonfile);

		if($request->isMethod('POST'))
		{
			
			$fileForm->bind($request);
			$lessonForm->bind($request);

			$classroom = $this->getDoctrine()
                    ->getRepository('CloudPodClassroomBundle:Classroom')
                    ->getClassroomID($classID);

            $theid = $classroom->getclassID(); //used for the directory name

			
			$lessonfile->setDynamicLoc($theid);
			if ($fileForm->isValid()) //if form passed the validator
        	{  
        		//PERSIST FILE UPLOAD --------------------------------
        		 //sets the directory
        		$em = $this->getDoctrine()->getManager();
        		$em->persist($lessonfile);
        		$em->flush();
        		//------------------------------------------------------
        		if ($lessonForm->isValid()) //if form passed the validator
        		{ 
        		//PERSIST LESSON ENTITY --------------------------------
        			$lesson->setLessonTitle($lessonForm->get('lessonTitle')->getData())
				   		   ->setLessonDesc($lessonForm->get('lessonDesc')->getData())
				   		   ->setLessonContent(stripslashes($lessonForm->get('lessonContent')->getData()))			
				   		   ->setLessonFileID($lessonfile);
				    $lesson->addLessonClas($classroom);

				    $em->persist($lesson);
				    $classroom->addClassLesson($lesson);
				    $em->flush();
				//--------------------------------------------s-----------------

        		}
	          $this->get('session')->getFlashBag()->add('notice', 'Lesson Published!');

            return $this->render('CloudPodClassroomBundle:FlashBag:FlashBagRender.html.twig'); //return $this->redirect($this->generateUrl('admin_home'));
        	}
            
        else { return new Response('Form Invalid');}

		}
	
		return $this->render('CloudPodClassroomBundle:Forms:LessonForm.html.twig',array(
			'classid' => $classID,
			//'form' => $lessonForm->createView(), 
			'form' => $lessonForm->createView(),
			'fileform' => $fileForm->createView()
			));

	}

	public function displayLessonAction($classID, $lessonID)
	{
		$session = $this->get('session'); 
		$session->set('lesson', $lessonID);

		$lesson_repository = $this->getDoctrine()->getRepository('CloudPodClassroomBundle:Lessons');
    	$lesson = $lesson_repository->find($lessonID);

    	//$lessonfile = new LessonFileUpload();

    	$lessonMaterial = 'cloud-pod.net/CloudPod/web/files'.'/'.$lesson->getLessonFileID()->getWebPath();

    	//$lessonMaterial = 'cloud-pod.net/CloudPod/web/files/uploads/lessons/1/profs.ppt';

    	$googleDocUrl= 'http://docs.google.com/viewer?url='.str_replace("/", "%2F", $lessonMaterial).'&embedded=true" width="600" height="780" style="border: none;';

         return $this->render('CloudPodClassroomBundle:Classrooms:Lesson.html.twig',array(
        'lesson' => $lesson,
        'tag' => $googleDocUrl,
        'file' => $lessonMaterial));
        
	}

	public function DownloadAction($param , $param2)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$lesson_repository = $em->getRepository('CloudPodClassroomBundle:Lessons');
		$resources_repository = $em->getRepository('CloudPodClassroomBundle:ClassResources');
		$session = $this->get('session');
		if ($param == 'lesson')
		{
			$lessonID = $session->get('lesson');        
        
        	$lesson = $lesson_repository->find($lessonID)->getLessonFileID();

        	$name = $lesson->getName();
        	$mime = $lesson->getMimeType();
        	$webPath = $lesson->getWebPath();
    	}
    	elseif ($param == 'resource')
    	{
    		$classID = $session->get('classroomActive');
    		$resource = $resources_repository->find($param2);
    		$name = $resource->getName();
    		$mime = $resource->getMimeType();
    		$webPath = $resource->getWebPath();
    	}      

        $response = new Response();
        
        //$LessonFile = $entity->getPath();
        $dl = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $name);
        $response->headers->set('Content-Type', $mime);
        $response->headers->set('Content-Disposition', $dl);
        $response->setContent(file_get_contents('http://localhost/CloudPod/web/files'.'/'.$webPath));

        return $response;
	}

	

}