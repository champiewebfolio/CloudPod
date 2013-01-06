<?php

namespace CloudPod\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CloudPodHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
