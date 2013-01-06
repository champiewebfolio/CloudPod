<?php

namespace CloudPod\ClassroomBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CloudPod\UserBundle\Entity\User;
use CloudPod\ClassroomBundle\Entity\Classroom;
use CloudPod\ClassroomBundle\Entity\Announcements;
use CloudPod\ClassroomBundle\Forms\Type\AnnouncementFormType;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncementAction($classID, Request $request)
    {
        $announcement = new Announcements();
        $AnnouncementForm = $this->createForm(new AnnouncementFormType, $announcement );

        $em = $this->getDoctrine()->getManager();

         if($request->isMethod('POST'))
        {
            $AnnouncementForm->bind($request);

            if ($AnnouncementForm->isValid()) //if form passed the validator
            {
            
                $announcement->setAnnouncementTitle($AnnouncementForm->get('announcementTitle')->getData())
                            ->setAnnouncementContent(stripslashes($AnnouncementForm->get('announcementContent')->getData()));
                
            $em->persist($announcement);
            $em->flush();

            $class_repository = $this->getDoctrine()->getRepository('CloudPodClassroomBundle:Classroom');
            $classroom = $class_repository->find($classID);

            $classroom->addClassAnnouncement($announcement);

             $em->flush();  

             $this->get('session')->getFlashBag()->add('notice', 'Announcement Saved!!');

            return $this->render('CloudPodClassroomBundle:FlashBag:FlashBagRender.html.twig');
           
           }
            
            }

         return $this->render('CloudPodClassroomBundle:Forms:AnnouncementForm.html.twig' ,array(
            'classid' => $classID,
             'form' => $AnnouncementForm->createView()));
    }
}