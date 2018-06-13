<?php
// src\doc\PlatformBundle\Controller\MenuController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MenuController extends Controller{
    /**
     *
     * @Route("/allonglets/gestion", name="allOngletsGestion")
     */
    public function allOngletsGestionAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('gestion');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
           $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/allonglets/referentiel", name="allOngletsReferentiel")
     */
    public function allOngletsReferentielAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/allonglets/traitement", name="allOngletsTraitement")
     */
    public function allOngletsTraitementAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('traitement');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    /**
     *
     * @Route("/menudoc/{id}", name="menuDoc")
     */
    public function MenuDocAction($id)
    {
        $menu = "Gestion";
        $page = "Documentation";
        $urlPage = "menudoc/".$id;
        $urlPdf = '';
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Page');
        
        $listPages = $repository->findBy(
            array('onglet_ref' => $id));
        $html = $this->render('docPlatformBundle:DossierAgent:menuDoc.html.twig', array(
            'listDoss' => $listPages,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'urlPdf' => $urlPdf,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        
        return $html;
    }
    
    /**
     *
     * @Route("/document", name="docs")
     */
    public function indexDocumentAction()
    {
        $menu = "Documents";
        $urlPage = "document";
        $html = $this->render('docPlatformBundle:Document:indexDocument.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
    
    /**
     * @Route("/formation",name="menuFormation")
     */
    public function indexFormationAction(){
        $menu = "Formation";
        $urlPage = "formation";
        $html = $this->render('docPlatformBundle:Formation:indexFormation.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
    
    /**
     *
     * @Route("/tutoriel", name="menuTutoriel")
     */
    public function indexTutorielAction()
    {
        $menu = "Tutoriels";
        $urlPage = "tutoriel";
        $html = $this->render('docPlatformBundle:Tutoriel:indexTutoriel.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
    
}