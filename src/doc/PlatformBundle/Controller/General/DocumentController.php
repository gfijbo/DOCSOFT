<?php

// src\doc\PlatformBundle\Controller\DocumentController.php
namespace doc\PlatformBundle\Controller\General;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use doc\PlatformBundle\Entity\Document;
use doc\PlatformBundle\Form\DocumentType;
use Symfony\Component\HttpFoundation\File\File;

class DocumentController extends Controller
{
   

    /**
     *
     * @Route("/document/see", name="seeDocuments")
     */

    public function seeDocumentAction(Request $request)
    {
        $menu = "Documents";
        $page = "Consulter un document";
        $urlPage = "document";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Document');
        $listDocs = $repository->findAll();
        $listeDocuments = $this->get('knp_paginator')->paginate($listDocs, $request->query->get('page', 1), 5);
        $html = $this->render('docPlatformBundle:Document:seeDocuments.html.twig', array(
            'listDocs' => $listeDocuments,
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
     *
     * @Route("/document/see/{id}", name="seeDoc", requirements={"id"="\d+"})
     */
    public function afficheAction($id)
    {
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Document');

        $listDoc = $repository->find($id);
        return $this->render('docPlatformBundle:Document:seeDocuments.html.twig', array(
            'listDocs' => $listDoc,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }

    /**
     *
     * @Route("/document/download/{id}", name="download", requirements={"id"="\d+"})
     */
    public function telechargementFichierAction($id)
    {
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Document');
        $doc = $repository->find($id);
        if (! empty($doc)) {
            $fichier = $doc->getUrl();
            //pour wampserverX86
            //$chemin = "C:/wamp/www/Symfony/web/uploads/documents";
            //pour wampserverX64
            $chemin = "C:/wamp64/www/Symfony/web/uploads/documents";
            $response = new Response();
            $response->setContent(file_get_contents($chemin . "/" . $fichier));
            $response->headers->set('Content-Type', $doc->getDocumentMimeType() // type mime du fichier
            ); // Affiche le pdf au lieux de le télécharger
            $response->headers->set('Content-disposition', 'filename=' . $fichier);

            return $response;
        }
        return $this->render('docPlatformBundle:Document:voirDoc.html.twig', array(
            'doc' => $doc,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }

    /**
     *
     * @Route("/document/add", name="addDocument")
     */
    public function addDocumentAction(Request $request)
    {
        $menu = "Documents";
        $page = "Ajouter un document";
        $urlPage = "document";
        $user = $this->getUser();
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $document->getDocumentFile();
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();
            $fileMimeType = $file->getClientMimeType();
            $type = $_POST["type"];

            // Move the file to the directory where documents are stored

            $file->move($this->getParameter('documents_directory'), $fileName);
            // selection de tous les fichiers dans le logiciel
            $repository = $this->getdoctrine()
                ->getManager()
                ->getRepository('docPlatformBundle:Document');
            $listDocs = $repository->findAll();

            $document->setDocumentFile(new File($this->getParameter('documents_directory') . '/' . $fileName));
            $document->setDocumentName($fileName);
            $document->setDocumentSize($fileSize);
            $document->setDocumentMimeType($fileMimeType);
            $document->setUser($user);
            $document->setType($type);
            $document->setUrl($document->getDocumentName());

            for ($i = 0; $i < sizeof($listDocs); $i ++) {
                // si le fichier existe deja, modifie le fichier
                if ($listDocs[$i]->getDocumentName() == $fileName) {
                    $repository = $this->getdoctrine()
                        ->getManager()
                        ->getRepository('docPlatformBundle:Document');
                    $id = $listDocs[$i]->getId();
                    $doc = $repository->find($id);
                    $em = $this->getDoctrine()->getManager();
                    $doc->setDocumentFile(new File($this->getParameter('documents_directory') . '/' . $fileName));
                    $doc->setDocumentSize($fileSize);
                    $doc->setUser($user);
                    $em->flush();
                    $_SESSION['type'] = "mod_doc";
                    unset($_SESSION['com']);
                    $_SESSION['doc'] = $id;
                    $_SESSION['id'] = '';
                    // cas de remplacement de fichier

                    return $this->redirectToRoute('operation', array(
                        'compteur' => count($_SESSION['listAlerts']),
                        'listOnglets' => $_SESSION['listOnglets'],
                        'listAlerts' => $_SESSION['listAlerts']
                    ));
                }
            }
            // cas d'ajout d'un nouveau fichier
            // ... persist the $document variable or any other work
            $em = $this->getDoctrine()->getManager();
            $em->persist($document);
            $em->flush();
            $doc = $document->getId();
            $_SESSION['type'] = "add_doc";
            $_SESSION['com'] = '';
            $_SESSION['doc'] = $doc;
            $_SESSION['id'] = '';

            return $this->redirectToRoute('operation', array());
        }
        // affiche la page du formulaire d'insertion de fichier
        return $this->render('docPlatformBundle:Document:addDocument.html.twig', array(
            'form' => $form->createView(),
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
     * @Route("/document/del", name="delDocument", requirements={"id"="\d+"})
     */
    public function deleteAction(Request $request)
    {
        $menu = "Documents";
        $page = "Voir et supprimer un document";
        $urlPage = "document";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Document');

        $listDocs = $repository->findAll();
        $listeDocuments = $this->get('knp_paginator')->paginate($listDocs, $request->query->get('page', 1)/*le numero de la page a afficher*/,
            5); // nombre d'element par page
        return $this->render('docPlatformBundle:Document:seeDocuments.html.twig', array(
            'listDocs' => $listeDocuments,
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
     * @Route("/document/delete/{id}", name="deleteDoc", requirements={"id"="\d+"})
     */
    public function deleteDocumentAction($id, Request $request)
    {
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Document');
        
        $doc = $repository->find($id);
        if(!isset($_SESSION['type'])){
            $_SESSION['type'] = "";
        }
        
        if ($_SESSION['type'] != "del_doc") {
            $_SESSION['type'] = "del_doc";
            unset($_SESSION['com']);
            $_SESSION['doc'] = $id;
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