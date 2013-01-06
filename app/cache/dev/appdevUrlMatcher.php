<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

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

        // download
        if (0 === strpos($pathinfo, '/download') && preg_match('#^/download/(?P<param>[^/]+)(?:/(?P<param2>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\LessonController::DownloadAction',  'param2' => '',)), array('_route' => 'download'));
        }

        // view_resources
        if (rtrim($pathinfo, '/') === '/classroom/view_resources') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'view_resources');
            }

            return array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::ClassroomResourceAction',  '_route' => 'view_resources',);
        }

        // upload_resource
        if ($pathinfo === '/upload_resource') {
            return array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::AddClassResourceAction',  '_route' => 'upload_resource',);
        }

        // class_submit
        if (0 === strpos($pathinfo, '/classroom') && preg_match('#^/classroom/(?P<classID>[^/]+)/submit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CloudPod\\ClassroomBundle\\Controller\\ClassroomController::ClassSubmitFileAction',)), array('_route' => 'class_submit'));
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
