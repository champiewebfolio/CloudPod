<?php
namespace CloudPod\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Component\HttpFoundation\Response;
 
class SecurityController extends Controller
{
    public function loginAction()
    {
      

            if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('CloudPodUserBundle:Forms:login.html.twig', array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error' => $error
        ));

              
    


        
/*-----------------------------------------------------
check if the user accessing the page is already logged in.

    $securityContext = $this->container->get('security.context');
    if( $securityContext->isGranted('IS_AUTHENTICATED_FULLY') )
    {

    return $this->redirect(
    $this->generateUrl("_user_profile", array("id" => "1")));  //redirect to profile it its logged in 
    }

    else
    {
        return $this->render('CloudPodUserBundle:Forms:login.html.twig', array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error' => $error
        ));
    }
    -------------------------------------------------------*/
    }
}