<?php
// src\doc\PlatformBundle\Controller\TutorielController.php
namespace doc\PlatformBundle\Controller;

use doc\PlatformBundle\Entity\Tutoriel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use doc\PlatformBundle\Entity\Document;
use doc\PlatformBundle\Form\TutorielType;
use Symfony\Component\HttpFoundation\File\File;
use doc\PlatformBundle\Form\DocumentType;


class TutorielController extends Controller
{
    /**
     * @Route("/tutoriel/add",name="addlTutoriel")
     */
    public function addTutorielAction(Request $request){
        $menu = "Tutoriel";
        $urlPage = "tutoriel";
        $page ="Ajouter un tutoriel";
        $tutoriel = new Tutoriel();
        $tuto = $this->createForm(TutorielType::class, $tutoriel);
        $tuto->handleRequest($request);

        if ($tuto->isSubmitted() && $tuto->isValid()) {
            $tutoriel = $tuto->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($tutoriel);
            $em->flush();
            $type = "add_tuto";

            $id = $tutoriel->getId();
            $_SESSION['tutos'] = $id;
            $_SESSION['type'] = $type;
            $html = $this->redirectToRoute("operation");
            
            return $html;


        }
        $html = $this->render('docPlatformBundle:Tutoriel:addTutoriel.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'tuto' => $tuto->createView(),
            'page' => $page,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     * @Route("/tutoriel/see", name="seeTutoriels")
     */
    public function seeTutorielsAction(Request $request){
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');
        $listTuto = $repository->findAll();

        $menu = "Tutoriels";
        $urlPage = "tutoriel";
        $page = "Liste des tutoriels";
        $listTutoriel = $this->get('knp_paginator')->paginate($listTuto, $request->query->get('page', 1), 5);

        $html =  $this->render('docPlatformBundle:Tutoriel:seeTutoriels.html.twig', array(
            'listTuto' => $listTutoriel,
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
     * @Route("/tutoriel/see/{id}",name="seeTutoriel")
     */

    public function seeTutorielAction($id, Request $request){
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');

        $tutoriel = $repository->find($id);
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Document');
        $doc = new Document();
        
        $docTuto = $this->createForm(DocumentType::class, $doc);
        $docTuto->handleRequest($request);
        if ($docTuto->isSubmitted() && $docTuto->isValid()) {
            $doc->setTuto_ref($tutoriel);
            $doc->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc);
            $em->flush();
        }
        $menu = "Tutoriel";
        $urlPage = "tutoriel";
        $page = "Voir un tutoriel ";

        $html = $this->render('docPlatformBundle:Tutoriel:seeTutoriel.html.twig', array(
            'tuto' => $tutoriel,
            'page' => $page,
            'forma'=> $docTuto->createView(),
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     * @Route("/tutoriel/mod/{id}",name="modTutoriel")
     */
    public function modTutorielAction($id, Request $request){
        $menu = "Tutoriel";
        $urlPage = "tutoriel";
        $page = "Modifier un tutoriel";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');

        $tutoriel = $repository->find($id);
        $form = $this->createForm(TutorielType::class, $tutoriel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tutoriel = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($tutoriel);
            $em->flush();
            $type="mod_tuto";
            $id = $tutoriel->getId();

            $_SESSION['tutos'] = $id;
            $_SESSION['type'] = $type;
            $html = $this->redirectToRoute("operation");
            
            return $html;

        }
        $html = $this->render('docPlatformBundle:Tutoriel:modTutoriel.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'page' => $page,
            'id' =>$id,
            'form' =>$form->createView(),
            'forma' =>$tutoriel,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     * @Route("/tutoriel/del/{id}",name="deleteTutoriel", requirements={"id"="\d+"})
     */
    public function deleteTutorielAction($id, Request $request){
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');

        $tutoriel = $repository->find($id);
        if(!isset($_SESSION['type'])){
            $_SESSION['type'] = "";
        }
        if($_SESSION['type']!= 'del_tuto'){
            $_SESSION['type'] = 'del_tuto';
            $_SESSION['id'] = $id;
            $_SESSION['tutos'] = $tutoriel;
            
            return $this->redirectToRoute('operation');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($tutoriel);
        $em->flush();

        return $this->redirectToRoute("alloperation");
    }

}