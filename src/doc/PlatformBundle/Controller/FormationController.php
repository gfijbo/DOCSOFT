<?php
// src\doc\PlatformBundle\Controller\FormationController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use doc\PlatformBundle\Entity\Formation;
use doc\PlatformBundle\Form\FormationType;

class FormationController extends Controller
{
    /**
     * @Route("/formation",name="menuFormation")
     */
    public function indexAction(){
        $menu = "Formation";
        $urlPage = "formation";
        $html = $this->render('docPlatformBundle:Formation:index.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
    
    /**
     * @Route("/formation/see", name="seeFormations")
     */
    public function seeFormationsAction(Request $request){
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $listform = $repository->findAll();
        $menu = "Formation";
        $urlPage = "formation";
        $page = "Voir une formation ";
        $listFormation = $this->get('knp_paginator')->paginate($listform, $request->query->get('page', 1), 5);
        
        return $this->render('docPlatformBundle:Formation:see.html.twig', array(
            'listform' => $listFormation,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        
    }
    
    /**
     * @Route("/formation/see/{id}",name="seeFormation")
     */
    public function seeFormationAction($id){
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $formation = $repository->find($id);
        $menu = "Formation";
        $urlPage = "formation";
        $page = "Voir une formation ";
        
        return $this->render('docPlatformBundle:Formation:seeFormation.html.twig', array(
            'form' => $formation,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        
    }
    
    /**
     * @Route("/formation/add",name="addFormation")
     */
    public function addFormationAction(Request $request){
        $menu = "Formation";
        $urlPage = "formation";
        $page ="Ajouter une formation";
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $formation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            
            $id = $formation->getId();
            return $this->redirectToRoute("seeFormation", array(
                'id'=>$id,
                'compteur' => count($_SESSION['listAlerts']),
                'listAlerts' => $_SESSION['listAlerts']
            ));
            
            
        }
        $html = $this->render('docPlatformBundle:Formation:addFormation.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'form' => $form->createView(),
            'page' => $page,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
    
    /**
     * @Route("/formation/mod",name="modFormation")
     */
    public function modFormationAction(){
        $menu = "Formation";
        $urlPage = "formation";
        $html = $this->render('docPlatformBundle:Formation:modFormation.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
            ));
        return $html;
    }
    
    /**
     * @Route("/formation/del",name="deleteFormations")
     */
    public function deleteFormationsAction(Request $request){
        $menu = "Formation";
        $urlPage = "formation";
        $page ="Supprimer une formation";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $listform = $repository->findAll();
        $listFormation = $this->get('knp_paginator')->paginate($listform, $request->query->get('page', 1), 5);
        $html = $this->render('docPlatformBundle:Formation:deleteFormation.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listform' => $listFormation,
            'page' => $page,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
            ));
        return $html;
        
    }
    
    /**
     * @Route("/formation/del/{id}",name="deleteFormation")
     */
    public function deleteFormationAction(Request $request, $id){
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $formation = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($formation);
        $em->flush();
        
        return $this->redirectToRoute("deleteFormations", array(
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        
        
    }
}