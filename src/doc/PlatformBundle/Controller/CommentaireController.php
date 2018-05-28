<?php
// src\doc\PlatformBundle\Controller\CommentaireController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Entity\Commentaire;

class CommentaireController extends Controller
{

    /**
     *
     * @Route("/addcom", name="addcom")
     */
    public function indexAction()
    {
        // récupération du commentaire
        if(isset($_POST['nom'])){
            $text = $_POST['nom'];
        }
        // récupération de l'id du champ du dossier_agent s'il existe
        if (isset($_POST['champs'])) {
            $champs = $_POST['champs'];
            // récupération de l'id de la formation si elle existe
        }
        if (isset($_POST['forms'])) {
            $forms = $_POST['forms'];
        }
        if (isset($_POST['tutos'])) {
            $tutos = $_POST['tutos'];
        }

        // récupération du dossier_agent correspondant à l'id
        if (isset($champs)) {
            $repository = $this->getdoctrine()
                ->getManager()
                ->getRepository('docPlatformBundle:DossierAgent');
            $champ = $repository->find($champs);
            // récupération de la formation correspondant à l'id
        }
        if (isset($forms)) {
            $repository = $this->getdoctrine()
                ->getManager()
                ->getRepository('docPlatformBundle:Formation');
            $form = $repository->find($forms);
        }
        if (isset($tutos)) {
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Tutoriel');
            $tuto = $repository->find($tutos);
        }
        
        if (! empty(trim($text))) {
            // création du nouveau commentaire
            $com = new Commentaire();
            $com->setCommentaire($text);
            $com->setUser($this->getUser());
            // ajout du champ dans le commentaire
            if (isset($champs)) {
                $com->setDossierAgentRef($champ);
                // ajout de la formation dans le commentaire
            }
            if (isset($forms)) {
                $com->setForm_ref($form);
            }
            if (isset($tutos)) {
                $com->setTuto_ref($tuto);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($com);
            $em->flush();
            $type = "add_com";
            $id = $com->getId();
           
            $_SESSION['com'] = $id;
            $_SESSION['type'] = $type;
            if (isset($champs)) {
                $_SESSION['champs'] = $champs;
            }
            if (isset($forms)) {
                $_SESSION['forms'] = $forms;
            }
            if (isset($tutos)) {
                $_SESSION['tutos'] = $tutos;
            }
            $_SESSION['doc'] = null;
            return $this->redirectToRoute('operation', array());
        }
        
        if (isset($champ)) {
            
            return $this->redirectToRoute('seechamp', array(
                'id' => $champs
            ));
        }
        if (isset($form)) {
            return $this->redirectToRoute('seeFormation', array(
                'id' => $forms
            ));
        }
        if (isset($tuto)) {
            return $this->redirectToRoute('seeTutoriel', array(
                'id' => $tutos
            ));
        }
        return $this->redirectToRoute('core_homepage');
    }

    /**
     *
     * @Route("/modcom", name="modcom")
     */
    public function modComAction()
    {
        // récupération du nom de l'action
        $text = $_POST['nom'];
        $coms = $_POST['com'];
        if (isset($_POST['champs'])) {
            $champs = $_POST['champs'];
        }
        if (isset($_POST['forms'])) {
            $forms = $_POST['forms'];
        }
        if (isset($_POST['tutos'])) {
            $tutos = $_POST['tutos'];
        }
        // récupération du commentaire
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Commentaire');
        if (isset($coms)) {
            $com = $repository->find($coms);
        }
        if (! empty(trim($text))) {
            // modification du commentaire
            $com->setCommentaire($text);
            $em = $this->getDoctrine()->getManager();
            $em->persist($com);
            $em->flush();
            $type = "mod_com";
            $id = $com->getId();
            $_SESSION['com'] = $id;
            $_SESSION['type'] = $type;

            if (isset($champs)) {
                $_SESSION['champs'] = $champs;
            }
            if (isset($forms)) {
                $_SESSION['forms'] = $forms;
            }
            if (isset($tutos)) {
                $_SESSION['tutos'] = $tutos;
            }

            $_SESSION['doc'] = null;
            return $this->redirectToRoute('operation', array());
        }
        if (isset($_SESSION['champs'])) {
            return $this->redirectToRoute('seechamp', array(
                'id' => $champs
            ));
        }
        if (isset($_SESSION['forms'])) {
            return $this->redirectToRoute('seeFormation', array(
                'id' => $forms
            ));
        }
        if (isset($_SESSION['tutos'])) {
            return $this->redirectToRoute('seeFormation', array(
                'id' => $tutos
            ));
        }
        return $this->redirectToRoute('core_homepage');
    }
}