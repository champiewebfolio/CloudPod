<?php
namespace CloudPod\HomeBundle\Controller;

use CloudPod\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function HomeAction()
	{
		return $this->render('CloudPodHomeBundle:Pages:Home.html.twig');
	}


}