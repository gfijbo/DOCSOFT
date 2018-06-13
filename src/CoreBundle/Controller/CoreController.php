<?php

// src\CoreBundle\Controller\CoreController.php
namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{

    public function homeAction()
    {
        $page = "Accueil";
        if(!isset($_SESSION)){
            session_start();
        }
        if (isset($_SESSION['listAlerts']) && isset($_SESSION['listOnglets'])) {
            $filename = "CoreBundle:Core:home.html.twig";
            $html = $this->render($filename, array(
                'page' => $page,
                'compteur' => count($_SESSION['listAlerts']),
                'listAlerts' => $_SESSION['listAlerts'],
                'listOnglets' => $_SESSION['listOnglets'],
                'alert' => ''
            ));
        } else {
            $html = $this->redirectToRoute('allOngletsGestion');
        }

        return $html;
    }
}