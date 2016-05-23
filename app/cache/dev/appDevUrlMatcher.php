<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // covoiturage_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'covoiturage_user_homepage');
            }

            return array (  '_controller' => 'Covoiturage\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'covoiturage_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/h')) {
            // team_builder_covoiturage_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_builder_covoiturage_homepage')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::indexAction',));
            }

            // Home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::homeAction',  '_route' => 'Home',);
            }

            // Essai
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Essai')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // Reclamation_ajouter
        if (0 === strpos($pathinfo, '/ajouterReclamation') && preg_match('#^/ajouterReclamation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reclamation_ajouter')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\ReclamationController::ajouterAction',));
        }

        // Adherent_ajouter
        if ($pathinfo === '/Aajouter') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\AdherentController::ajouterAction',  '_route' => 'Adherent_ajouter',);
        }

        // Reclamation_liste
        if ($pathinfo === '/allReclamation') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\ReclamationController::listeAction',  '_route' => 'Reclamation_liste',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // faq_list_for_adh
            if ($pathinfo === '/foire-aux-questions') {
                return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\FaqController::listAdhAction',  '_route' => 'faq_list_for_adh',);
            }

            if (0 === strpos($pathinfo, '/faq')) {
                // faq_list
                if ($pathinfo === '/faq/list') {
                    return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\FaqController::listAction',  '_route' => 'faq_list',);
                }

                // faq_ajouter
                if ($pathinfo === '/faq/ajouter') {
                    return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\FaqController::ajouterAction',  '_route' => 'faq_ajouter',);
                }

                // faq_modifier
                if (0 === strpos($pathinfo, '/faq/modifier') && preg_match('#^/faq/modifier/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'faq_modifier');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faq_modifier')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\FaqController::modifierAction',));
                }

                // faq_supprimer
                if (0 === strpos($pathinfo, '/faq/supprimer') && preg_match('#^/faq/supprimer/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'faq_supprimer');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faq_supprimer')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\FaqController::supprimerAction',));
                }

            }

        }

        // team_builder_covoiturage_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::homeAction',  '_route' => 'team_builder_covoiturage_home',);
        }

        // team_builder_covoiturage_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::contactAction',  '_route' => 'team_builder_covoiturage_contact',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // team_builder_covoiturage_affichertrajet
            if ($pathinfo === '/affichertrajet1') {
                return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::affichertrajetAction',  '_route' => 'team_builder_covoiturage_affichertrajet',);
            }

            // team_builder_covoiturage_ajoutertrajet
            if ($pathinfo === '/ajoutertrajet') {
                return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::ajoutertrajetAction',  '_route' => 'team_builder_covoiturage_ajoutertrajet',);
            }

        }

        // team_builder_covoiturage_mesroutes
        if ($pathinfo === '/mestrajets') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::affichertrajetAction',  '_route' => 'team_builder_covoiturage_mesroutes',);
        }

        // team_builder_covoiturage_annuler
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<idTrajet>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'team_builder_covoiturage_annuler');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_builder_covoiturage_annuler')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::annulerTrajetAction',));
        }

        // team_builder_covoiturage_archiveroutes
        if ($pathinfo === '/archivetrajets') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::archivetrajetAction',  '_route' => 'team_builder_covoiturage_archiveroutes',);
        }

        // team_builder_covoiturage_notifier
        if ($pathinfo === '/notifieruser') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\DefaultController::envoyermailAction',  '_route' => 'team_builder_covoiturage_notifier',);
        }

        // stat_list
        if ($pathinfo === '/statistiques') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\EvaluationController::listStatAction',  '_route' => 'stat_list',);
        }

        // Evaluation_liste
        if ($pathinfo === '/allEvaluation') {
            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\EvaluationController::listeAction',  '_route' => 'Evaluation_liste',);
        }

        // contact
        if (rtrim($pathinfo, '/') === '/contacts') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contact');
            }

            return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\ContactController::contactAction',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/stat')) {
            // Statistiques_sexe
            if ($pathinfo === '/statSexe') {
                return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\AdherentController::StatistiquesAdherentsAction',  '_route' => 'Statistiques_sexe',);
            }

            // Statistiques_age
            if ($pathinfo === '/statAge') {
                return array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\AdherentController::StatistiquesAdherentsAgeAction',  '_route' => 'Statistiques_age',);
            }

        }

        // Evaluation_ajouter
        if (0 === strpos($pathinfo, '/ajouterEvaluation') && preg_match('#^/ajouterEvaluation/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Evaluation_ajouter');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Evaluation_ajouter')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\EvaluationController::ajouterAction',));
        }

        if (0 === strpos($pathinfo, '/reclam')) {
            // Reclamation_chart
            if (0 === strpos($pathinfo, '/reclamationChart') && preg_match('#^/reclamationChart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reclamation_chart')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\ReclamationController::statAction',));
            }

            // Reclamation_Conducteur
            if (0 === strpos($pathinfo, '/reclamerTrajet') && preg_match('#^/reclamerTrajet/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Reclamation_Conducteur');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reclamation_Conducteur')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\ReclamationController::reclamerTrajetAction',));
            }

        }

        // Adherent_Bloquer
        if (0 === strpos($pathinfo, '/bloquerAdherent') && preg_match('#^/bloquerAdherent/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Adherent_Bloquer');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Adherent_Bloquer')), array (  '_controller' => 'TeamBuilder\\CovoiturageBundle\\Controller\\ReclamationController::bloquerAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // test_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_homepage')), array (  '_controller' => 'Esprit\\TestBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/afficheTrajet')) {
            // AfficheTrajetBydepart
            if ($pathinfo === '/afficheTrajetByDepart') {
                return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::AfficheTrajetByDepartAction',  '_route' => 'AfficheTrajetBydepart',);
            }

            // afficheTrajet
            if ($pathinfo === '/afficheTrajet') {
                return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::afficheTrajetAction',  '_route' => 'afficheTrajet',);
            }

        }

        if (0 === strpos($pathinfo, '/reserver')) {
            // reserver
            if ($pathinfo === '/reserver') {
                return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::reserverAction',  '_route' => 'reserver',);
            }

            // Ajoutreserver
            if (preg_match('#^/reserver/(?P<idConducteur>[^/]++)/(?P<idTrajet>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Ajoutreserver')), array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::ajoutReservationAction',));
            }

        }

        // afficheReservationCourrantes
        if ($pathinfo === '/afficheReservationCourrantes') {
            return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::afficheReservationCourrantesAction',  '_route' => 'afficheReservationCourrantes',);
        }

        // AfficheDetailsReservationsCourrantes
        if ($pathinfo === '/AfficheDetailsReservationsCourrantes') {
            return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::AfficheDetailsReservationsCourrantesAction',  '_route' => 'AfficheDetailsReservationsCourrantes',);
        }

        // deleteReservation
        if (0 === strpos($pathinfo, '/afficheReservationCourrantes') && preg_match('#^/afficheReservationCourrantes/(?P<idReservation>[^/]++)/(?P<idTrajet>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteReservation')), array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::deleteReservationAction',));
        }

        if (0 === strpos($pathinfo, '/Affiche')) {
            // AfficheReservationsAnciennes
            if ($pathinfo === '/AfficheReservationsAnciennes') {
                return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::AfficheReservtionAnciennesAction',  '_route' => 'AfficheReservationsAnciennes',);
            }

            // AfficheDetailsReservationsAnciennes
            if ($pathinfo === '/AfficheDetailsReservationsAnciennes') {
                return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::AfficheDetailsReservationsAnciennesAction',  '_route' => 'AfficheDetailsReservationsAnciennes',);
            }

        }

        // ErreurDeReservation
        if ($pathinfo === '/ErreurDeReservation') {
            return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::ErreurDeReservationAction',  '_route' => 'ErreurDeReservation',);
        }

        // Retour
        if ($pathinfo === '/afficheTrajet') {
            return array (  '_controller' => 'Esprit\\TestBundle\\Controller\\HomeController::retourAction',  '_route' => 'Retour',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
