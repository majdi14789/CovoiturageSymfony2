<?php

namespace Covoiturage\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CovoiturageUserBundle:Default:index.html.twig');
    }
}
