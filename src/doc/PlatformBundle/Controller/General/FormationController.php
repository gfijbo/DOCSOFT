<?php
// src\doc\PlatformBundle\Controller\FormationController.php
namespace doc\PlatformBundle\Controller\General;

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
     * @Route("/formation/see", name="seeFormations")
     */
    public function seeFormationsAction(Request $request){
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $listform = $repository->findAll();
        $menu = "Formations";
        $urlPage = "formation";
        $page = " Liste de Formations ";
        $listFormation = $this->get('knp_paginator')->paginate($listform, $request->query->get('page', 1), 5);
        
        $html = $this->render('docPlatformBundle:Formation:seeFormations.html.twig', array(
            'listform' => $listFormation,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
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
        $_SESSION['forms']= $id;
        $_SESSION['form']= $id;
        if ($docForm->isSubmitted() && $docForm->isValid()) {
            $fileName = $doc->getDocumentFile()->getClientOriginalName();
            if (isset($_POST["type"])){
                $type = $_POST["type"];
            }
            else{
                $type = "";
            }
            $doc->setForm_ref($formation);
            $doc->setUser($this->getUser()); 
            $doc->setType($type);
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc);
            $doc->setUrl($doc->getDocumentName());
            $doc->setDocumentName($fileName);
            $em->flush();
            $_SESSION['doc']= $doc->getId();
            $_SESSION['type']="add_doc_form";
            unset($_SESSION['tutos']);
            $html = $this->redirectToRoute('operation');
            return $html;
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
            'listOnglets' => $_SESSION['listOnglets'],
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
        $page = "Ajouter une formation";
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $formation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            $type = "add_form";
            
            $id = $formation->getId();
            $_SESSION['forms'] = $id;
            $_SESSION['type'] = $type;
            $html = $this->redirectToRoute("operation");
            
            return $html;
            
        }
        $html = $this->render('docPlatformBundle:Formation:addFormation.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'form' => $form->createView(),
            'page' => $page,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
    
    /**
     * @Route("/formation/mod/{id}",name="modFormation")
     */
    public function modFormationAction($id, Request $request){
        $menu = "Formation";
        $urlPage = "formation";
        $page = "Modifier une formation";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $formation = $repository->find($id);
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $formation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            
            $id = $formation->getId();
            $type = "mod_form";
            $_SESSION['forms'] = $id;
            $_SESSION['type'] = $type;
            
            $html = $this->redirectToRoute('operation');
            
            return $html;
            
        }
        
        $html = $this->render('docPlatformBundle:Formation:modFormation.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'page' => $page,
            'id' =>$id,
            'form' =>$form->createView(),
            'forma' =>$formation,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
            ));
        return $html;
    }
    
    /**
     * @Route("/formation/del/{id}",name="deleteFormation", requirements={"id"="\d+"})
     */
    public function deleteFormationAction($id){
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Formation');
        
        $formation = $repository->find($id);
        if(!isset($_SESSION['type'])){
            $_SESSION['type'] ="";
        }
        if($_SESSION['type'] != 'del_form'){
            $_SESSION['type'] = 'del_form';
            $_SESSION['id'] = $id;
            $_SESSION['forms'] = $formation;
            
            return $this->redirectToRoute('operation');
        }
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($formation);
        $em->flush();
        
        return $this->redirectToRoute('alloperation');
    }
    /**
     *
     * @Route("/formation/deldoc/{id}", name="formationDeldoc", requirements={"id"="\d+"})
     */
    public function formationDeldocAction($id)
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Document');
        
        $doc = $repository->find($id);
        if(!isset($_SESSION['type'])){
            $_SESSION['type'] = "";
        }
        
        if ($_SESSION['type'] != "del_doc_form") {
            $_SESSION['type'] = "del_doc_form";
            unset($_SESSION['com']);
            unset($_SESSION['tutos']);
            $_SESSION['doc'] = $id;
            $_SESSION['form'] = $doc->getForm_ref()->getId();
            $_SESSION['id'] = $id;
            
            return $this->redirectToRoute('operation');
        }
        $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/documents/';
        // delete linked mediaEntity
        $em = $this->getDoctrine()->getManager();
        $em->remove($doc);
        //pour supprimer le fichier dans le cas des formations et des tutoriels
        @unlink($fichier.$doc->getUrl());
        $em->flush();
        
        return $this->redirectToRoute('alloperation');
    }
}