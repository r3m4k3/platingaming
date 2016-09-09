<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/app')) {
            // _assetic_d5d58a6
            if ($pathinfo === '/css/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5d58a6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d5d58a6',);
            }

            if (0 === strpos($pathinfo, '/css/app_')) {
                if (0 === strpos($pathinfo, '/css/app_bootstrap-')) {
                    // _assetic_d5d58a6_0
                    if ($pathinfo === '/css/app_bootstrap-3.3.4.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5d58a6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d5d58a6_0',);
                    }

                    // _assetic_d5d58a6_1
                    if ($pathinfo === '/css/app_bootstrap-theme-3.3.4.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5d58a6',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_d5d58a6_1',);
                    }

                }

                // _assetic_d5d58a6_2
                if ($pathinfo === '/css/app_main_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5d58a6',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_d5d58a6_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/app')) {
            // _assetic_7e3bfcc
            if ($pathinfo === '/js/app.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e3bfcc',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7e3bfcc',);
            }

            if (0 === strpos($pathinfo, '/js/app_')) {
                // _assetic_7e3bfcc_0
                if ($pathinfo === '/js/app_jquery-3.1.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e3bfcc',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7e3bfcc_0',);
                }

                // _assetic_7e3bfcc_1
                if ($pathinfo === '/js/app_bootstrap-3.3.4.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e3bfcc',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7e3bfcc_1',);
                }

                // _assetic_7e3bfcc_2
                if ($pathinfo === '/js/app_main_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e3bfcc',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7e3bfcc_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/app')) {
            // _assetic_6eb66a2
            if ($pathinfo === '/css/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6eb66a2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6eb66a2',);
            }

            if (0 === strpos($pathinfo, '/css/app_')) {
                // _assetic_6eb66a2_0
                if ($pathinfo === '/css/app_bootstrap-3.3.4.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6eb66a2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6eb66a2_0',);
                }

                // _assetic_6eb66a2_1
                if ($pathinfo === '/css/app_signin_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6eb66a2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6eb66a2_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/account/comment')) {
            // comment_add
            if (0 === strpos($pathinfo, '/account/comment/add') && preg_match('#^/account/comment/add/(?P<taskId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_add')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::addAction',));
            }

            // comment_remove
            if (0 === strpos($pathinfo, '/account/comment/remove') && preg_match('#^/account/comment/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_remove')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::removeAction',));
            }

        }

        // security_login_form
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'security_login_form');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login_form',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'security_login_check',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/account')) {
            if (0 === strpos($pathinfo, '/account/status')) {
                // status_list
                if ($pathinfo === '/account/status/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\StatusController::indexAction',  '_route' => 'status_list',);
                }

                // status_add
                if ($pathinfo === '/account/status/add') {
                    return array (  'status' => NULL,  '_controller' => 'AppBundle\\Controller\\StatusController::addAction',  '_route' => 'status_add',);
                }

                // status_edit
                if (0 === strpos($pathinfo, '/account/status/edit') && preg_match('#^/account/status/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_edit')), array (  'status' => NULL,  '_controller' => 'AppBundle\\Controller\\StatusController::addAction',));
                }

                // status_remove
                if (0 === strpos($pathinfo, '/account/status/remove') && preg_match('#^/account/status/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_remove')), array (  '_controller' => 'AppBundle\\Controller\\StatusController::removeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/account/task')) {
                // task_list
                if ($pathinfo === '/account/task/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TaskController::indexAction',  '_route' => 'task_list',);
                }

                // task_manager_list
                if ($pathinfo === '/account/task/manager/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TaskController::listManagerAction',  '_route' => 'task_manager_list',);
                }

                // task_developer_list
                if ($pathinfo === '/account/task/developer/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TaskController::listDeveloperAction',  '_route' => 'task_developer_list',);
                }

                // task_add
                if ($pathinfo === '/account/task/add') {
                    return array (  'task' => NULL,  '_controller' => 'AppBundle\\Controller\\TaskController::addAction',  '_route' => 'task_add',);
                }

                // task_edit
                if (0 === strpos($pathinfo, '/account/task/edit') && preg_match('#^/account/task/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_edit')), array (  'task' => NULL,  '_controller' => 'AppBundle\\Controller\\TaskController::addAction',));
                }

                // task_show
                if (0 === strpos($pathinfo, '/account/task/show') && preg_match('#^/account/task/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_show')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::showAction',));
                }

                // task_remove
                if (0 === strpos($pathinfo, '/account/task/remove') && preg_match('#^/account/task/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_remove')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::removeAction',));
                }

            }

        }

        // task_change_assignee
        if ($pathinfo === '/task/change-assignee') {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::changeAssigneeAction',  '_route' => 'task_change_assignee',);
        }

        if (0 === strpos($pathinfo, '/account')) {
            // task_unassign
            if (0 === strpos($pathinfo, '/account/task/unassign') && preg_match('#^/account/task/unassign/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_unassign')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::unassignAction',));
            }

            if (0 === strpos($pathinfo, '/account/user')) {
                // user_list
                if ($pathinfo === '/account/user/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_list',);
                }

                // user_add
                if ($pathinfo === '/account/user/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::addAction',  '_route' => 'user_add',);
                }

                // user_remove
                if (0 === strpos($pathinfo, '/account/user/remove') && preg_match('#^/account/user/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_remove')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeAction',));
                }

                // user_get
                if (0 === strpos($pathinfo, '/account/user/get') && preg_match('#^/account/user/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_get')), array (  '_controller' => 'AppBundle\\Controller\\UserController::getAction',));
                }

                // user_my_account
                if ($pathinfo === '/account/user/my-account') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::detailsAction',  '_route' => 'user_my_account',);
                }

                // user_change_password
                if ($pathinfo === '/account/user/change-password') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::changePasswordAction',  '_route' => 'user_change_password',);
                }

                // user_save_changed_password
                if ($pathinfo === '/account/user/save-changed-password') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::saveChangedPasswordAction',  '_route' => 'user_save_changed_password',);
                }

                // user_change_status
                if (0 === strpos($pathinfo, '/account/user/change-status') && preg_match('#^/account/user/change\\-status/(?P<id>[^/]++)/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_change_status')), array (  '_controller' => 'AppBundle\\Controller\\UserController::changeStatusAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
