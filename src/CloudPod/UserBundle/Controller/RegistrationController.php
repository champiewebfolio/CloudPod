<?php
namespace CloudPod\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CloudPod\UserBundle\Entity\User;
use CloudPod\UserBundle\Entity\UserRoles;
use CloudPod\UserBundle\Entity\UserProfile;
use CloudPod\UserBundle\Model\RegistrationModel;

use CloudPod\UserBundle\Forms\Type\UserRegistrationType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\HttpFoundation\RedirectResponse;
class RegistrationController extends Controller
{

  public function registerAction(Request $request)
  {
    $user = new User();
    $userprofile = new UserProfile();
    $role = new UserRoles();
    $regmodel = new RegistrationModel();
     
     // creates the form
      $form = $this->createForm(new UserRegistrationType(),$regmodel);
     // gets doctrine manager - used for persisting
      $em = $this->getDoctrine()->getManager(); 

      if($request->isMethod('POST'))
      {
        $form->bind($request);

        /*----------------------------------
                gets the new registered users id , used it as fk for the profile.
                sets the data for the userprofile entity
                ----------------------------------*/
                $userprofile->setFirstName($form->get('firstName')->getData())
                    ->setLastName($form->get('lastName')->getData())
                    ->setAge($form->get('age')->getData())
                    ->setSchool($form->get('school')->getData())
                    ->setCountry($form->get('country')->getData());

/*-----------------------------------------------
set data for user entity - refers to user account
----------------------------------------------------*/      
        $confirmationCode =md5(uniqid(rand())); //generate random confirmation token
        $emailadd = $form->get('email')->getData();
        $user->setUserName($form->get('userName')->getData())
          ->setSalt(md5(time()))
          ->setConfirmationCode($confirmationCode)
          ->setEmail($emailadd);
         //encrypt password - defined in security.yaml
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10); 
        $password = $encoder->encodePassword(($form->get('plainPassword')->getData()), $user->getSalt());
            
        $user->setPassword($password);
        $user->setProfileID($userprofile);
/*--------------------------------------------------------------------
find and sets the user's role 
------------------------------------------------------------------*/
        $repository = $this->getDoctrine()->getRepository('CloudPodUserBundle:UserRoles');
        $role = $repository->findOneBy(array('role'=>($form->get('chooseRole')->getData())));

        $user->setUserRole($role);
/*--------------------------------------------------------------------
Persisting data
----------------------------------------------------*/
          if ($form->isValid()) //if form passed the validator
        {  

          $em->persist($userprofile);
          $em->flush();
          $em->persist($user); 
          $em->flush();             
          $this->confirmMail($emailadd, $confirmationCode);
          
          return new response('Account confirmation mail sent.'); //return $this->redirect($this->generateUrl('admin_home'));
        }
            
        else {return new Response('Form Invalid');}
  }

  return $this->render('CloudPodUserBundle:Forms:RegistrationForm.html.twig',array('form' => $form->createView()));

  }
/*-------------------------------------
EMAIL CONFIRMATION sender
--------------------------------------*/
  public function confirmMail($emailadd, $confirmationCode)
  {
    $message = \Swift_Message::newInstance()
        ->setSubject('Welcome to CloudPod - A Virtual Learning Environment')
        ->setFrom('admin@cloud-pod.net')
        ->setTo($emailadd)
        ->setBody('Click on this link to activate your account <strong>http://localhost/CloudPod/web/app_dev.php/confirmation/'.$confirmationCode.'</strong>', 'text/html');;
        //->addPart('Click on this link to activate your account http://localhost/CloudPod/web/app_dev.php/confirmation/'.$confirmationCode,'text/plain');;
        $this->get('mailer')->send($message);

    return new Response('Congratulations! Pls. confirm your email. And start using CLOUDPOD!');
  }

/*-------------------------------------
Confirmation token validator
--------------------------------------*/

  public function confirmationAction($confirm)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $user_repository = $this->getDoctrine()->getRepository('CloudPodUserBundle:User');
        $user = $user_repository->findOneBy(array('confirmationCode'=>$confirm));

        if (!$user)
        {
          throw $this->createNotFoundException('Wrong Confirmation');
        }
        else
        {  
          $user->setIsActive(true);
          $em->flush();
        
          return new Response('Account Confirmed!.You can now start using CloudPod.');      
          //return $this->redirect($this->generateUrl('admin_home');
        }
    }


}


