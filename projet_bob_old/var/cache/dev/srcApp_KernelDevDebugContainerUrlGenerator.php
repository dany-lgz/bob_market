<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_homepage_homepage' => array(array(), array('_controller' => 'App\\Controller\\HomePageController::homepage'), array(), array(array('text', '/homepage')), array(), array()),
        'tag_added' => array(array(), array('_controller' => 'App\\Controller\\TagController::newtag'), array(), array(array('text', '/newtag')), array(), array()),
        'user_registration' => array(array(), array('_controller' => 'App\\Controller\\UserController::register'), array(), array(array('text', '/register')), array(), array()),
        'user_login' => array(array(), array('_controller' => 'App\\Controller\\UserController::login'), array(), array(array('text', '/login')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        'app_Home_Page' => array(array(), array('_controller' => 'App\\Controller\\HomePageController::homepage'), array(), array(array('text', '/')), array(), array()),
        'register' => array(array(), array('_controller' => 'App\\Controller\\UserController::register'), array(), array(array('text', '/register')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\UserController::login'), array(), array(array('text', '/login')), array(), array()),
        'new_tag' => array(array(), array('_controller' => 'App\\Controller\\TagController::newtag'), array(), array(array('text', '/newTag')), array(), array()),
        'tag_page' => array(array(), array('_controller' => 'App\\Controller\\TagController::show'), array(), array(array('text', '/tagpage')), array(), array()),
        'tag_list' => array(array(), array('_controller' => 'App\\Controller\\TagController::list'), array(), array(array('text', '/taglist')), array(), array()),
        'dashboard' => array(array(), array('_controller' => 'App\\Controller\\UserController::dashboard'), array(), array(array('text', '/home')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
