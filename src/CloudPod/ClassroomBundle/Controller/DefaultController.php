<?php

namespace CloudPod\ClassroomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CloudPodClassroomBundle:Default:index.html.twig', array('name' => $name));
    }
}
