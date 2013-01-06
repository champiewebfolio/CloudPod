<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // cloud_pod_home_sample
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\HomeBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'cloud_pod_home_sample'));
        }

        // cloud_pod_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'CloudPod\\HomeBundle\\Controller\\HomeController::HomeAction',  '_route' => 'cloud_pod_homepage',);
        }

        // cloud_pod_classroom_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'cloud_pod_classroom_homepage'));
        }

        // classroom_register
        if ($pathinfo === '/register_class') {
            return array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::registerClassAction',  '_route' => 'classroom_register',);
        }

        // student_classroom_page
        if (0 === strpos($pathinfo, '/student/classroom') && preg_match('#^/student/classroom/(?P<classID>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::StudentClassroomAction',)), array('_route' => 'student_classroom_page'));
        }

        // lecturer_classroom_page
        if (0 === strpos($pathinfo, '/lecturer/classroom') && preg_match('#^/lecturer/classroom/(?P<classID>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::LecturerClassroomAction',)), array('_route' => 'lecturer_classroom_page'));
        }

        // lecturer_add_announcement
        if (0 === strpos($pathinfo, '/lecturer/classroom') && preg_match('#^/lecturer/classroom/(?P<classID>[^/]+)/create_announcement$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\AnnouncementController::createAnnouncementAction',)), array('_route' => 'lecturer_add_announcement'));
        }

        // lecturer_create_lesson
        if (0 === strpos($pathinfo, '/lecturer/classroom') && preg_match('#^/lecturer/classroom/(?P<classID>[^/]+)/create_lesson$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\LessonController::createLessonAction',)), array('_route' => 'lecturer_create_lesson'));
        }

        // student_display_lesson
        if (0 === strpos($pathinfo, '/student/classroom') && preg_match('#^/student/classroom/(?P<classID>[^/]+)/lesson/(?P<lessonID>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\LessonController::displayLessonAction',)), array('_route' => 'student_display_lesson'));
        }

        // lecturer_display_lesson
        if (0 === strpos($pathinfo, '/lecturer/classroom') && preg_match('#^/lecturer/classroom/(?P<classID>[^/]+)/lesson/(?P<lessonID>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\LessonController::displayLessonAction',)), array('_route' => 'lecturer_display_lesson'));
        }

        // set_collaboration_url
        if ($pathinfo === '/collaboration') {
            return array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::CollaborationAction',  '_route' => 'set_collaboration_url',);
        }

        // cloud_pod_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'cloud_pod_user_homepage'));
        }

        // _register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'CloudPod\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => '_register',);
        }

        // _confirm
        if (0 === strpos($pathinfo, '/confirmation') && preg_match('#^/confirmation/(?P<confirm>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\UserBundle\\Controller\\RegistrationController::confirmationAction',)), array('_route' => '_confirm'));
        }

        // _user_profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<uname>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\UserBundle\\Controller\\UserController::profileAction',)), array('_route' => '_user_profile'));
        }

        // _user_profile_enroll
        if ($pathinfo === '/enroll') {
            return array (  '_controller' => 'CloudPod\\UserBundle\\Controller\\UserController::enrollClassAction',  '_route' => '_user_profile_enroll',);
        }

        // _security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'CloudPod\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => '_security_login',);
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array('_route' => '_security_check');
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_security_logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
