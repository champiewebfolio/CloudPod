<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'cloud_pod_home_sample' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'CloudPod\\HomeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'cloud_pod_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CloudPod\\HomeBundle\\Controller\\HomeController::HomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),),
        'cloud_pod_classroom_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'classroom_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::registerClassAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register_class',    ),  ),),
        'student_classroom_page' => array (  0 =>   array (    0 => 'classID',  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::StudentClassroomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'classID',    ),    1 =>     array (      0 => 'text',      1 => '/student/classroom',    ),  ),),
        'lecturer_classroom_page' => array (  0 =>   array (    0 => 'classID',  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::LecturerClassroomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'classID',    ),    1 =>     array (      0 => 'text',      1 => '/lecturer/classroom',    ),  ),),
        'lecturer_add_announcement' => array (  0 =>   array (    0 => 'classID',  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\AnnouncementController::createAnnouncementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create_announcement',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'classID',    ),    2 =>     array (      0 => 'text',      1 => '/lecturer/classroom',    ),  ),),
        'lecturer_create_lesson' => array (  0 =>   array (    0 => 'classID',  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\LessonController::createLessonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create_lesson',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'classID',    ),    2 =>     array (      0 => 'text',      1 => '/lecturer/classroom',    ),  ),),
        'student_display_lesson' => array (  0 =>   array (    0 => 'classID',    1 => 'lessonID',  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\LessonController::displayLessonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'lessonID',    ),    1 =>     array (      0 => 'text',      1 => '/lesson',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'classID',    ),    3 =>     array (      0 => 'text',      1 => '/student/classroom',    ),  ),),
        'lecturer_display_lesson' => array (  0 =>   array (    0 => 'classID',    1 => 'lessonID',  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\LessonController::displayLessonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'lessonID',    ),    1 =>     array (      0 => 'text',      1 => '/lesson',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'classID',    ),    3 =>     array (      0 => 'text',      1 => '/lecturer/classroom',    ),  ),),
        'set_collaboration_url' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::CollaborationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/collaboration',    ),  ),),
        'cloud_pod_user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'CloudPod\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        '_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CloudPod\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),),
        '_confirm' => array (  0 =>   array (    0 => 'confirm',  ),  1 =>   array (    '_controller' => 'CloudPod\\UserBundle\\Controller\\RegistrationController::confirmationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'confirm',    ),    1 =>     array (      0 => 'text',      1 => '/confirmation',    ),  ),),
        '_user_profile' => array (  0 =>   array (    0 => 'uname',  ),  1 =>   array (    '_controller' => 'CloudPod\\UserBundle\\Controller\\UserController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'uname',    ),    1 =>     array (      0 => 'text',      1 => '/profile',    ),  ),),
        '_user_profile_enroll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CloudPod\\UserBundle\\Controller\\UserController::enrollClassAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enroll',    ),  ),),
        '_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CloudPod\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),),
        '_security_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
