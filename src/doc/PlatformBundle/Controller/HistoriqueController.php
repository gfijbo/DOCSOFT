<?php
// src\doc\PlatformBundle\Controller\HistoriqueController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Entity\Historique;
use Symfony\Component\HttpFoundation\Request;

class HistoriqueController extends Controller
{

    /**
     *
     * @Route("/alloperation", name="alloperation")
     */
    public function homeAction()
    {
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Historique');
        $listAlerts = $repository->findBy(array(), array(
            'updatedAt' => 'desc'
        ));
        $_SESSION['listAlerts'] = $listAlerts;
        $html = $this->redirectToRoute('core_homepage');
        
        if (isset($_SESSION['majop']) && $_SESSION['majop'] == 'com') {
            if (isset($_SESSION['champs'])) {
                $champs = $_SESSION['champs'];
                $_SESSION['champs'] = null;
                $html = $this->redirectToRoute('seechamp', array(
                    'id' => $champs
                ));
            }
        }
        if (isset($_SESSION['majop']) && $_SESSION['majop'] == 'com') {
            if (isset($_SESSION['forms'])) {

                $form = $_SESSION['forms'];
                $_SESSION['forms'] = null;
                $html = $this->redirectToRoute('seeFormation', array(
                    'id' => $form
                ));
            }
        }
        if (isset($_SESSION['majop']) && $_SESSION['majop'] == 'com') {
            if (isset($_SESSION['tutos'])) {

                $tuto = $_SESSION['tutos'];
                $_SESSION['tutos'] = null;
                $html = $this->redirectToRoute('seeTutoriel', array(
                    'id' => $tuto
                ));
            }
        }
        if (isset($_SESSION['majop']) && $_SESSION['majop'] == 'doc') {
            $html = $this->redirectToRoute('seeDocuments', array());
        }
        if (isset($_SESSION['majop']) && $_SESSION['majop'] == 'del_doc') {
            $html = $this->redirectToRoute('deleteDoc', array(
                'id' => $_SESSION['id']
            ));
        }

        return $html;
    }

    /**
     *
     * @Route("/operation", name="operation")
     */
    public function operationAction()
    {
        $type = $_SESSION['type'];
        // si document est défini
        if (isset($_SESSION['doc'])) {
            $repository = $this->getdoctrine()
                ->getManager()
                ->getRepository('docPlatformBundle:Document');

            $document = $repository->find($_SESSION['doc']);
            $documentName = $document->getDocumentName();
            $documentSize = $document->getDocumentSize();
            $documentMimeType = $document->getDocumentMimeType();
        } else {
            $document = '';
            $documentName = '';
            $documentSize = 0;
            $documentMimeType = '';
        }
        if (isset($_SESSION['com'])) {
            $repository = $this->getdoctrine()
                ->getManager()
                ->getRepository('docPlatformBundle:Commentaire');

            $commentaire = $repository->find($_SESSION['com']);
            $commentaire = $commentaire->getCommentaire();
        } else {
            $commentaire = '';
        }
        
        if (isset($_SESSION['forms'])) {
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Formation');
            
            $formation = $repository->find($_SESSION['forms']);
            $formName = $formation->getNomForm();
            $formDeb = $formation->getDateDebut();
            $formFin = $formation->getDateFin();
            $formDetails = $formation->getFormDetails();
        } else {
            $formName = '';
            $formDeb = null;
            $formFin = null;
        }
        
        if (isset($_SESSION['tutos'])) {
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');
            
            $tutoriel = $repository->find($_SESSION['tutos']);
            $tutoName = $tutoriel->getNomTuto();
            $tutoDetails = $tutoriel->getTutoDetails();
        } else {
            $tutoName = '';
            $tutoDetails = '';
        }
        switch ($type) {
            case "add_doc":
                $action = "Ajout d'un document";
                break;
            case "mod_doc":
                $action = "Modification d'un document";
                break;
            case "del_doc":
                $action = "Suppression d'un document";
                break;
            case "add_com":
                $action = "Ajout d'un commentaire";
                break;
            case "mod_com":
                $action = "Modification d'un commentaire";
                break;
            case "add_form":
                $action = "Ajout d'une formation";
                break;
            case "mod_form":
                $action = "Modification d'une formation";
                break;
            case "del_form":
                $action = "Suppression d'une formation";
                break;
            case "add_tuto":
                $action = "Ajout d'un tutoriel";
                break;
            case "mod_tuto":
                $action = "Modification d'un tutoriel";
                break;
            case "del_tuto":
                $action = "Suppression d'un tutoriel";
                break;
            default:
                $action = "Opération inconnue";
        }
        $his = new Historique();
        $his->setActionName($action);
        $his->setDocumentName($documentName);
        $his->setDocumentSize($documentSize);
        $his->setDocumentMimeType($documentMimeType);
        $his->setUserName($this->getUser());
        $his->setCommentaire($commentaire);
        $his->setFormationName($formName);
        $his->setFormationDetails($formDetails);
        $his->setFormationDateDebut($formDeb);
        $his->setFormationDateFin($formFin);
        $his->setTutorielName($tutoName);
        $his->setTutorielDetails($tutoDetails);
        $em = $this->getDoctrine()->getManager();
        $em->persist($his);
        $em->flush();

        
        
        if ($commentaire != null) {
            $_SESSION['majop'] = 'com';
        }
        if ($document != null && $_SESSION['type'] != "del_doc") {
            $_SESSION['majop'] = 'doc';
        }
        if ($document != null && $_SESSION['type'] == "del_doc") {
            $_SESSION['majop'] = 'del_doc';
        }
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }

    /**
     *
     * @Route("/seeOp/{id}", name="seeOp")
     */
    public function seeOpAction($id)
    {
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Historique');

        $op = $repository->find($id);
        $menu = "Alertes";
        $urlPage = "historique/allOp";
        $page = "Consulter une alerte";

        return $this->render('docPlatformBundle:historique:seeOp.html.twig', array(
            'op' => $op,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }

    /**
     *
     * @Route("/historique/allOp", name="seeAllOp")
     */
    public function seeAllOpAction(Request $request)
    {
        $menu = "Historiques";
        $page = "Voir les alertes";
        $urlPage = "historique/allOp";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Historique');
        $his = $repository->findBy(array(), array(
            'updatedAt' => 'desc'
        ));
        $listeOps = $this->get('knp_paginator')->paginate($his, $request->query->get('page', 1), 5);
        $html = $this->render('docPlatformBundle:Historique:seeAllOp.html.twig', array(
            'listeOps' => $listeOps,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
}