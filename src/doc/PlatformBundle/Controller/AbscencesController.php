<?php
// src\doc\PlatformBundle\Controller\AbscencesController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AbscencesController extends Controller
{
    /**
     *
     * @Route("/abscences/maladies", name="seeAbscencesMaladies")
     */
    public function SeeAbscencesMaladiesAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Maladies";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/maladies/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '11'),array('num_ordre' => 'asc')
        );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/maladies/pdf", name="seeAbscencesMaladiesPdf")
     */
    public function SeeAbscencesMaladiesPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Maladies";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '11'),array('num_ordre' => 'asc')
        );
        $snappy = $this->get("knp_snappy.pdf");

        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));

        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/maternites", name="seeAbscencesMaternites")
     */
    public function SeeAbscencesMaternitesAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Maternites";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/maternites/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '48'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/maternites/pdf", name="seeAbscencesMaternitesPdf")
     */
    public function SeeAbscencesMaternitesPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Maternites";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '48'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/adoptions", name="seeAbscencesAdoptions")
     */
    public function SeeAbscencesAdoptionsAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Adoptions";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/adoptions/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '49'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/adoptions/pdf", name="seeAbscencesAdoptionsPdf")
     */
    public function SeeAbscencesAdoptionsPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Adoptions";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '49'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/autarr", name="seeAbscencesAutarr")
     */
    public function SeeAbscencesAutarrAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Autres Ar.";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/autarr/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '50'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/autarr/pdf", name="seeAbscencesAutarrsPdf")
     */
    public function SeeAbscencesAdoptioansPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Autres Ar.";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '50'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/droits", name="seeAbscencesDroits")
     */
    public function SeeAbscencesDroitsAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Droits";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/droits/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '51'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/droits/pdf", name="seeAbscencesDroitsPdf")
     */
    public function SeeAbscencesDroitsPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Droits";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '51'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/acctra", name="seeAbscencesAcctra")
     */
    public function SeeAbscencesAcctraAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Accidents du travail";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/acctra/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '52'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/acctra/pdf", name="seeAbscencesAcctraPdf")
     */
    public function SeeAbscencesAcctrasPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Accidents du travail";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '52'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/calmal", name="seeAbscencesCalmal")
     */
    public function SeeAbscencesCalmalAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Cal. maladie";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/calmal/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '53'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/calmal/pdf", name="seeAbscencesCalmalPdf")
     */
    public function SeeAbscencesCalmalPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Cal. maladie";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '53'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/gescet", name="seeAbscencesgescet")
     */
    public function SeeAbscencesGescetAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Gestion CET";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/gescet/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '54'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/gescet/pdf", name="seeAbscencesGescetPdf")
     */
    public function SeeAbscencesGescetPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Gestion CET";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '54'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/sitdif", name="seeAbscencesSitdif")
     */
    public function SeeAbscencesSitdifAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Situation DIF";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/sitdif/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '55'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/sitdif/pdf", name="seeAbscencesSitdifPdf")
     */
    public function SeeAbscencesSitdifPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Situation DIF";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '55'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    /**
     *
     * @Route("/abscences/sitcpa", name="seeAbscencesSitcpa")
     */
    public function SeeAbscencesSitcpaAction()
    {
        $menu = "Gestion";
        $page = "Abscences / Situation CPA";
        $urlPage = "menudoc/5";
        $urlPdf = "abscences/sitcpa/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '56'),array('num_ordre' => 'asc')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
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
     * @Route("/abscences/sitcpa/pdf", name="seeAbscencesSitcpaPdf")
     */
    public function SeeAbscencesSitcpaPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Abscences / Situation CPA";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '5', 'page_ref' => '56'),array('num_ordre' => 'asc')
            );
        $snappy = $this->get("knp_snappy.pdf");
        
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
}