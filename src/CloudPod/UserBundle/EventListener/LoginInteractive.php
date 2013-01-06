<?php
namespace CloudPod\UserBundle\EventListener;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LoginInteractive
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
       $security_token = $event->getAuthenticationToken();
       $username = $security_token->getUsername();
        // Using the token and the container you can do anything you want
       $var = $this->container->get('session')->set('username', $username); // ...

       //return new Response($var);

        //return $this->render('CloudPodFinalUserBundle::display.html.twig');
    }
}