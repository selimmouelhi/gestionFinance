<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FGS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FGS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FGS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // fgs_gestion_comptes_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fgs_gestion_comptes_home');
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\AideController::firstAction',  '_route' => 'fgs_gestion_comptes_home',);
        }

        // fgs_gestion_comptes_admin
        if ($pathinfo === '/Admin') {
            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\AideController::adminAction',  '_route' => 'fgs_gestion_comptes_admin',);
        }

        // fgs_gestion_comptes_all
        if ($pathinfo === '/connect') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_all;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\AideController::homeAction',  '_route' => 'fgs_gestion_comptes_all',);
        }
        not_fgs_gestion_comptes_all:

        // fgs_gestion_comptes_homepage
        if ($pathinfo === '/vos-comptes') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_homepage;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ComptesController::indexAction',  '_route' => 'fgs_gestion_comptes_homepage',);
        }
        not_fgs_gestion_comptes_homepage:

        // fgs_gestion_comptes_ajouter_compte
        if ($pathinfo === '/ajouter-compte') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fgs_gestion_comptes_ajouter_compte;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ComptesController::ajouterCompteAction',  '_route' => 'fgs_gestion_comptes_ajouter_compte',);
        }
        not_fgs_gestion_comptes_ajouter_compte:

        // fgs_gestion_comptes_gerer_compte
        if ($pathinfo === '/gerer-compte') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_gerer_compte;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ComptesController::gererCompteAction',  '_route' => 'fgs_gestion_comptes_gerer_compte',);
        }
        not_fgs_gestion_comptes_gerer_compte:

        // fgs_gestion_comptes_supprimer_compte
        if ($pathinfo === '/supprimer-compte') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fgs_gestion_comptes_supprimer_compte;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ComptesController::supprimerCompteAction',  '_route' => 'fgs_gestion_comptes_supprimer_compte',);
        }
        not_fgs_gestion_comptes_supprimer_compte:

        // fgs_gestion_comptes_modifier_compte
        if (0 === strpos($pathinfo, '/modifier-compte') && preg_match('#^/modifier\\-compte/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fgs_gestion_comptes_modifier_compte;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_modifier_compte')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ComptesController::modifierCompteAction',));
        }
        not_fgs_gestion_comptes_modifier_compte:

        // fgs_gestion_comptes_gerer_categories
        if ($pathinfo === '/gerer-categories-compte') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_gerer_categories;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\CategoriesController::gererCategoriesAction',  '_route' => 'fgs_gestion_comptes_gerer_categories',);
        }
        not_fgs_gestion_comptes_gerer_categories:

        // fgs_gestion_comptes_ajouter_categorie
        if ($pathinfo === '/ajouter-categorie') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fgs_gestion_comptes_ajouter_categorie;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\CategoriesController::ajouterCategorieAction',  '_route' => 'fgs_gestion_comptes_ajouter_categorie',);
        }
        not_fgs_gestion_comptes_ajouter_categorie:

        // fgs_gestion_comptes_modifier_categorie
        if (0 === strpos($pathinfo, '/modifier-categorie') && preg_match('#^/modifier\\-categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fgs_gestion_comptes_modifier_categorie;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_modifier_categorie')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\CategoriesController::modifierCategorieAction',));
        }
        not_fgs_gestion_comptes_modifier_categorie:

        // fgs_gestion_comptes_supprimer_categorie
        if ($pathinfo === '/supprimer-categorie') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fgs_gestion_comptes_supprimer_categorie;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\CategoriesController::supprimerCategorieAction',  '_route' => 'fgs_gestion_comptes_supprimer_categorie',);
        }
        not_fgs_gestion_comptes_supprimer_categorie:

        // fgs_gestion_comptes_monter_categorie
        if (0 === strpos($pathinfo, '/monter-categorie') && preg_match('#^/monter\\-categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_monter_categorie;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_monter_categorie')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\CategoriesController::monterCategorieAction',));
        }
        not_fgs_gestion_comptes_monter_categorie:

        // fgs_gestion_comptes_descendre_categorie
        if (0 === strpos($pathinfo, '/descendre-categorie') && preg_match('#^/descendre\\-categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_descendre_categorie;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_descendre_categorie')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\CategoriesController::descendreCategorieAction',));
        }
        not_fgs_gestion_comptes_descendre_categorie:

        if (0 === strpos($pathinfo, '/ajouter-')) {
            // fgs_gestion_comptes_ajouter_depense
            if ($pathinfo === '/ajouter-depense') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fgs_gestion_comptes_ajouter_depense;
                }

                return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::ajouterDepenseAction',  '_route' => 'fgs_gestion_comptes_ajouter_depense',);
            }
            not_fgs_gestion_comptes_ajouter_depense:

            // fgs_gestion_comptes_ajouter_revenu
            if ($pathinfo === '/ajouter-revenu') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fgs_gestion_comptes_ajouter_revenu;
                }

                return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::ajouterRevenuAction',  '_route' => 'fgs_gestion_comptes_ajouter_revenu',);
            }
            not_fgs_gestion_comptes_ajouter_revenu:

        }

        // fgs_gestion_comptes_supprimer_mouvement_financier
        if ($pathinfo === '/supprimer-mouvement-financier') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fgs_gestion_comptes_supprimer_mouvement_financier;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::supprimerMouvementFinancierAction',  '_route' => 'fgs_gestion_comptes_supprimer_mouvement_financier',);
        }
        not_fgs_gestion_comptes_supprimer_mouvement_financier:

        // fgs_gestion_comptes_modifier_mouvement_financier
        if (0 === strpos($pathinfo, '/modifier-mouvement-financier') && preg_match('#^/modifier\\-mouvement\\-financier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fgs_gestion_comptes_modifier_mouvement_financier;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_modifier_mouvement_financier')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::modifierMouvementFinancierAction',));
        }
        not_fgs_gestion_comptes_modifier_mouvement_financier:

        // fgs_gestion_comptes_check_mouvement_financier
        if ($pathinfo === '/check-mouvement-financier') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fgs_gestion_comptes_check_mouvement_financier;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::checkMouvementFinancierAction',  '_route' => 'fgs_gestion_comptes_check_mouvement_financier',);
        }
        not_fgs_gestion_comptes_check_mouvement_financier:

        if (0 === strpos($pathinfo, '/visualiser-mouvement-financiers-compte')) {
            // fgs_gestion_comptes_visualiser_mouvement_financier_compte
            if (preg_match('#^/visualiser\\-mouvement\\-financiers\\-compte/(?P<id>\\d+)(?:/(?P<debut>\\d+)(?:/(?P<longueur>[^/]++))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fgs_gestion_comptes_visualiser_mouvement_financier_compte;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_visualiser_mouvement_financier_compte')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::voirMouvementFinancierCompteAction',  'debut' => 0,  'longueur' => 30,));
            }
            not_fgs_gestion_comptes_visualiser_mouvement_financier_compte:

            if (0 === strpos($pathinfo, '/visualiser-mouvement-financiers-compte-')) {
                // fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois
                if (0 === strpos($pathinfo, '/visualiser-mouvement-financiers-compte-mois') && preg_match('#^/visualiser\\-mouvement\\-financiers\\-compte\\-mois/(?P<id>\\d+)(?:/(?P<annee>\\d{4})(?:/(?P<mois>\\d+))?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::voirMouvementFinancierCompteMoisAction',  'annee' => NULL,  'mois' => NULL,));
                }
                not_fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois:

                // fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee
                if (0 === strpos($pathinfo, '/visualiser-mouvement-financiers-compte-annee') && preg_match('#^/visualiser\\-mouvement\\-financiers\\-compte\\-annee/(?P<id>\\d+)(?:/(?P<annee>\\d{4}))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsController::voirMouvementFinancierCompteAnneeAction',  'annee' => NULL,));
                }
                not_fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee:

            }

        }

        if (0 === strpos($pathinfo, '/planifier-')) {
            // fgs_gestion_comptes_ajouter_depense_planifiee
            if ($pathinfo === '/planifier-depense') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fgs_gestion_comptes_ajouter_depense_planifiee;
                }

                return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsPlanifiesController::ajouterDepensePLanifieeAction',  '_route' => 'fgs_gestion_comptes_ajouter_depense_planifiee',);
            }
            not_fgs_gestion_comptes_ajouter_depense_planifiee:

            // fgs_gestion_comptes_ajouter_revenu_planifie
            if ($pathinfo === '/planifier-revenu') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fgs_gestion_comptes_ajouter_revenu_planifie;
                }

                return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsPlanifiesController::ajouterRevenuPLanifieAction',  '_route' => 'fgs_gestion_comptes_ajouter_revenu_planifie',);
            }
            not_fgs_gestion_comptes_ajouter_revenu_planifie:

        }

        // fgs_gestion_comptes_voir_mouvements_planifies
        if ($pathinfo === '/visualiser-mouvements-planifies') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_voir_mouvements_planifies;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsPlanifiesController::voirMouvementFinancierPlanifieAction',  '_route' => 'fgs_gestion_comptes_voir_mouvements_planifies',);
        }
        not_fgs_gestion_comptes_voir_mouvements_planifies:

        // fgs_gestion_comptes_modifier_mouvements_planifies
        if (0 === strpos($pathinfo, '/modifier-mouvement-financier-planifie') && preg_match('#^/modifier\\-mouvement\\-financier\\-planifie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fgs_gestion_comptes_modifier_mouvements_planifies;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fgs_gestion_comptes_modifier_mouvements_planifies')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsPlanifiesController::modifierMouvementFinancierPlanifieAction',));
        }
        not_fgs_gestion_comptes_modifier_mouvements_planifies:

        // fgs_gestion_comptes_supprimer_mouvement_financier_planifie
        if ($pathinfo === '/supprimer-mouvement-financier-planifie') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fgs_gestion_comptes_supprimer_mouvement_financier_planifie;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MouvementsPlanifiesController::supprimerMouvementFinancierPlanifieAction',  '_route' => 'fgs_gestion_comptes_supprimer_mouvement_financier_planifie',);
        }
        not_fgs_gestion_comptes_supprimer_mouvement_financier_planifie:

        // fgs_gestion_comptes_test_mail
        if ($pathinfo === '/test-mail') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_test_mail;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\MailController::testMailAction',  '_route' => 'fgs_gestion_comptes_test_mail',);
        }
        not_fgs_gestion_comptes_test_mail:

        // fgs_gestion_comptes_welcome
        if ($pathinfo === '/bienvenue') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fgs_gestion_comptes_welcome;
            }

            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\AideController::bienvenueAction',  '_route' => 'fgs_gestion_comptes_welcome',);
        }
        not_fgs_gestion_comptes_welcome:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajouter-')) {
                // fgs_gestion_comptes_ajouter_virement
                if ($pathinfo === '/ajouter-virement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fgs_gestion_comptes_ajouter_virement;
                    }

                    return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\VirementController::ajouterVirementAction',  '_route' => 'fgs_gestion_comptes_ajouter_virement',);
                }
                not_fgs_gestion_comptes_ajouter_virement:

                // fgs_gestion_comptes_ajouter_reclamation
                if ($pathinfo === '/ajouter-reclamation') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fgs_gestion_comptes_ajouter_reclamation;
                    }

                    return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ReclamationController::AjoutReclamationAction',  '_route' => 'fgs_gestion_comptes_ajouter_reclamation',);
                }
                not_fgs_gestion_comptes_ajouter_reclamation:

            }

            // fgs_gestion_comptes_afficherC_reclamation
            if ($pathinfo === '/afficherC-reclamation') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fgs_gestion_comptes_afficherC_reclamation;
                }

                return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ReclamationController::LireReclamations2Action',  '_route' => 'fgs_gestion_comptes_afficherC_reclamation',);
            }
            not_fgs_gestion_comptes_afficherC_reclamation:

        }

        // lire_reclamations
        if ($pathinfo === '/lireReclamations') {
            return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ReclamationController::LireReclamationsAction',  '_route' => 'lire_reclamations',);
        }

        // etat
        if (0 === strpos($pathinfo, '/etat') && preg_match('#^/etat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etat')), array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\ReclamationController::EtatAction',));
        }

        if (0 === strpos($pathinfo, '/admin/a')) {
            // fgs_gestion_comptes_ajouterBanque
            if ($pathinfo === '/admin/ajouterBanque') {
                return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\BanqueController::ajouterBanqueAction',  '_route' => 'fgs_gestion_comptes_ajouterBanque',);
            }

            // fgs_gestion_comptes_afficherBanques
            if ($pathinfo === '/admin/afficherBanque') {
                return array (  '_controller' => 'FGS\\GestionComptesBundle\\Controller\\BanqueController::afficherBanqueAction',  '_route' => 'fgs_gestion_comptes_afficherBanques',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
