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
        if (isset($_SESSION['listAlerts'])) {
            $filename = "CoreBundle:Core:home.html.twig";
            $html = $this->render($filename, array(
                'page' => $page,
                'compteur' => count($_SESSION['listAlerts']),
                'listAlerts' => $_SESSION['listAlerts'],
                'alert' => ''
            ));
        } else {
            $html = $this->redirectToRoute('alloperation');
        }

        return $html;
    }
}