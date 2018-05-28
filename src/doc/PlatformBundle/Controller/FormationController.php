<?php
// src\doc\PlatformBundle\Controller\FormationController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use doc\PlatformBundle\Entity\Formation;
use doc\PlatformBundle\Form\FormationType;
use doc\PlatformBundle\Entity\Document;
use doc\PlatformBundle\Form\DocumentType;

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
        
        $html = $this->render('docPlatformBundle:Formation:see.html.twig', array(
            'listform' => $listFormation,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
        
    }
    
    /**
     * @Route("/formation/see/{id}",name="seeFormation")
     */
    public function seeFormationAction($id, Request $request){
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $formation = $repository->find($id);
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Document');
        $doc = new Document();
        $docForm = $this->createForm(DocumentType::class, $doc);
        $docForm->handleRequest($request);
        if ($docForm->isSubmitted() && $docForm->isValid()) {
            $doc->setForm_ref($formation);
            $doc->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc);
            $em->flush();
        }
        $menu = "Formation";
        $urlPage = "formation";
        $page = "Voir une formation ";
        
       $html = $this->render('docPlatformBundle:Formation:seeFormation.html.twig', array(
            'form' => $formation,
            'forma' =>$docForm->createView(),
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
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
            $html = $this->redirectToRoute("seeFormation", array(
                'id'=>$id,
                'compteur' => count($_SESSION['listAlerts']),
                'listAlerts' => $_SESSION['listAlerts']
            ));
            
            return $html;
            
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
        
        $html = $this->redirectToRoute("deleteFormations", array(
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        
        return $html;
        
    }
}