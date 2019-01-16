<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/homepage' => array(array(array('_route' => 'app_homepage_homepage', '_controller' => 'App\\Controller\\HomePageController::homepage'), null, null, null, false, null)),
            '/newtag' => array(array(array('_route' => 'tag_added', '_controller' => 'App\\Controller\\TagController::newtag'), null, null, null, false, null)),
            '/register' => array(
                array(array('_route' => 'user_registration', '_controller' => 'App\\Controller\\UserController::register'), null, null, null, false, null),
                array(array('_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'), null, null, null, false, null),
            ),
            '/login' => array(
                array(array('_route' => 'user_login', '_controller' => 'App\\Controller\\UserController::login'), null, null, null, false, null),
                array(array('_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'), null, null, null, false, null),
            ),
            '/' => array(array(array('_route' => 'app_Home_Page', '_controller' => 'App\\Controller\\HomePageController::homepage'), null, null, null, false, null)),
            '/newTag' => array(array(array('_route' => 'new_tag', '_controller' => 'App\\Controller\\TagController::newtag'), null, null, null, false, null)),
            '/tagpage' => array(array(array('_route' => 'tag_page', '_controller' => 'App\\Controller\\TagController::show'), null, null, null, false, null)),
            '/taglist' => array(array(array('_route' => 'tag_list', '_controller' => 'App\\Controller\\TagController::list'), null, null, null, false, null)),
            '/home' => array(array(array('_route' => 'dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            35 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
        );
    }
}
