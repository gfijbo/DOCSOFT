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


class TutorielController extends Controller
{
    /**
     *
     * @Route("/tutoriel", name="menuTutoriel")
     */
    public function indexAction()
    {
        $menu = "Tutoriels";
        $urlPage = "tutoriel";
        $html = $this->render('docPlatformBundle:Tutoriel:index.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     * @Route("/tutoriel/add",name="addTutoriel")
     */
    public function addTutorielAction(Request $request){
        $menu = "Tutoriel";
        $urlPage = "tutoriel";
        $tutoriel = new Tutoriel();
        $form = $this->createForm(TutorielType::class, $tutoriel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tutoriel = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($tutoriel);
            $em->flush();
        }
        $html = $this->render('docPlatformBundle:Tutoriel:addTutoriel.html.twig', array(
            'menu' => $menu,
            'urlPage' => $urlPage,
            'form' => $form->createView(),
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     * @Route("/tutoriel/see", name="seeTutoriels")
     */
    public function seeTutorielsAction(){
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');
        $tutoriel = $repository->findAll();
        $menu = "Tutoriel";
        $urlPage = "tutoriel";
        $page = "Voir un tutoriel";

        return $this->render('docPlatformBundle:Tutoriel:see.html.twig', array(
            'form' => $tutoriel,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));

    }

    /**
     * @Route("/tutoriel/see/{id}",name="seeTutoriel")
     */
    public function seeTutorielAction(){
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');

        $tutoriel = $repository->find($id);
        $menu = "Tutoriel";
        $urlPage = "tutoriel";
        $page = "Voir un tutoriel";

        return $this->render('docPlatformBundle:Formation:see.html.twig', array(
            'form' => $tutoriel,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));

    }

    /**
     * @Route("/tutoriel/mod",name="modtutoriel")
     */
    public function modtutorielAction(){

    }

    /**
     * @Route("/tutoriel/delete",name="deleteTutoriel")
     */
    public function deleteTutorielAction(){

    }


}