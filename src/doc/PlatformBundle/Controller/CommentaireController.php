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
        $text = $_POST['nom'];
        // récupération de l'id du champ du dossier_agent s'il existe
        if (isset($_POST['champs'])) {
            $champs = $_POST['champs'];
        // récupération de l'id de la formation si elle existe
        } elseif (isset($_POST['forms'])) {
            $forms = $_POST['forms'];
        }

        // récupération du dossier_agent correspondant à l'id
        if (isset($champs)) {
            $repository = $this->getdoctrine()
                ->getManager()
                ->getRepository('docPlatformBundle:DossierAgent');
            $champ = $repository->find($champs);
        // récupération de la formation correspondant à l'id
        } elseif (isset($forms)) {
            $repository = $this->getdoctrine()
                ->getManager()
                ->getRepository('docPlatformBundle:Formation');
            $form = $repository->find($forms);
        }
        if ($text) {
            // création du nouveau commentaire
            $com = new Commentaire();
            $com->setCommentaire($text);
            $com->setUser($this->getUser());
            // ajout du champ dans le commentaire
            if (isset($champs)) {
                $com->setDossierAgentRef($champ);
                // ajout de la formation dans le commentaire
            } elseif (isset($forms)) {
                $com->setForm_ref($form);
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
            } elseif (isset($forms)) {
                $_SESSION['forms'] = $forms;
            }
            $_SESSION['doc'] = null;
            return $this->redirectToRoute('operation', array());
        }
        if (isset($champ)) {
            return $this->redirectToRoute('seechamp', array(
                'id' => $champs
            ));
        } elseif (isset($form)) {
            return $this->redirectToRoute('seeFormation', array(
                'id' => $form
            ));
        }
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
        } elseif (isset($_POST['forms'])) {
            $forms = $_POST['forms'];
        }
        // récupération du commentaire
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Commentaire');
        if (isset($coms)) {
            $com = $repository->find($coms);
        }
        if ($text) {
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
                
            } elseif (isset($forms)) {
                $_SESSION['forms'] = $forms;
            }
            
            $_SESSION['doc'] = null;
            return $this->redirectToRoute('operation', array());
        }
        if (isset($_SESSION['champs'])){
            return $this->redirectToRoute('seechamp', array(
                'id' => $champs
            ));
        }elseif(isset($_SESSION['forms'])){
            return $this->redirectToRoute('seeFormation', array(
            'id' => $forms
            ));
        }
    }
}