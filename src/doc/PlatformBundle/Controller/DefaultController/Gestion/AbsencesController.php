<?php
// src\doc\PlatformBundle\Controller\AbsencesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion;

use doc\PlatformBundle\Controller\ListPage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AbsencesController extends ListPage
{
    /**
     *
     * @Route("/gestion/absences/maladies", name="seeabsencesMaladies")
     */
    public function SeeabsencesMaladiesAction()
    {
        return $this->listChamp("Absences / Maladies","gestion/absences/maladies/pdf",'5', '11');
    }
    /**
     *
     * @Route("/gestion/absences/maladies/pdf", name="seeabsencesMaladiesPdf")
     */
    public function SeeabsencesMaladiesPdfAction()
    {
        return $this->listChampPdf("Absences / Maladies",'5', '11');
    }
    /**
     *
     * @Route("/gestion/absences/maternites", name="seeabsencesMaternites")
     */
    public function SeeabsencesMaternitesAction()
    {
        return $this->listChamp("Absences / Maternites","gestion/absences/maternites/pdf",'5', '48');
    }
    /**
     *
     * @Route("/gestion/absences/maternites/pdf", name="seeabsencesMaternitesPdf")
     */
    public function SeeabsencesMaternitesPdfAction()
    {
        return $this->listChampPdf("Absences / Maternites",'5', '48');
    }
    /**
     *
     * @Route("/gestion/absences/adoptions", name="seeabsencesAdoptions")
     */
    public function SeeabsencesAdoptionsAction()
    {
        return $this->listChamp("Absences / Adoptions","gestion/absences/adoptions/pdf",'5', '49');
    }
    /**
     *
     * @Route("/gestion/absences/adoptions/pdf", name="seeabsencesAdoptionsPdf")
     */
    public function SeeabsencesAdoptionsPdfAction()
    {
        return $this->listChampPdf("Absences / Adoptions",'5', '49');
    }
    
    /**
     *
     * @Route("/gestion/absences/autarr", name="seeabsencesAutarr")
     */
    public function SeeabsencesAutarrAction()
    {
        return $this->listChamp("Absences / Autres Ar.","gestion/absences/autarr/pdf",'5', '50');
    }
    
    /**
     *
     * @Route("/gestion/absences/autarr/pdf", name="seeabsencesAutarrsPdf")
     */
    public function SeeabsencesAdoptioansPdfAction()
    {
        return $this->listChampPdf("Absences / Autres Ar.",'5', '50');
    }
    /**
     *
     * @Route("/gestion/absences/droits", name="seeabsencesDroits")
     */
    public function SeeabsencesDroitsAction()
    {
        return $this->listChamp("Absences / Droits","gestion/absences/droits/pdf",'5', '51');
    }
    /**
     *
     * @Route("/gestion/absences/droits/pdf", name="seeabsencesDroitsPdf")
     */
    public function SeeabsencesDroitsPdfAction()
    {
        return $this->listChampPdf("Absences / Droits",'5', '51');
    }
    
    /**
     *
     * @Route("/gestion/absences/acctra", name="seeabsencesAcctra")
     */
    public function SeeabsencesAcctraAction()
    {
        $menu = "Gestion";
        $page = "absences / Accidents du travail";
        $urlPage = "menudoc/5";
        $urlPdf = "absences/acctra/pdf";
        
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
     * @Route("/gestion/absences/acctra/pdf", name="seeabsencesAcctraPdf")
     */
    public function SeeabsencesAcctrasPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "absences / Accidents du travail";
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
     * @Route("/gestion/absences/calmal", name="seeabsencesCalmal")
     */
    public function SeeabsencesCalmalAction()
    {
        $menu = "Gestion";
        $page = "absences / Cal. maladie";
        $urlPage = "menudoc/5";
        $urlPdf = "absences/calmal/pdf";
        
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
     * @Route("/gestion/absences/calmal/pdf", name="seeabsencesCalmalPdf")
     */
    public function SeeabsencesCalmalPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "absences / Cal. maladie";
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
     * @Route("/gestion/absences/gescet", name="seeabsencesgescet")
     */
    public function SeeabsencesGescetAction()
    {
        $menu = "Gestion";
        $page = "absences / Gestion CET";
        $urlPage = "menudoc/5";
        $urlPdf = "absences/gescet/pdf";
        
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
     * @Route("/gestion/absences/gescet/pdf", name="seeabsencesGescetPdf")
     */
    public function SeeabsencesGescetPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "absences / Gestion CET";
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
     * @Route("/gestion/absences/sitdif", name="seeabsencesSitdif")
     */
    public function SeeabsencesSitdifAction()
    {
        $menu = "Gestion";
        $page = "absences / Situation DIF";
        $urlPage = "menudoc/5";
        $urlPdf = "absences/sitdif/pdf";
        
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
     * @Route("/gestion/absences/sitdif/pdf", name="seeabsencesSitdifPdf")
     */
    public function SeeabsencesSitdifPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "absences / Situation DIF";
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
     * @Route("/gestion/absences/sitcpa", name="seeabsencesSitcpa")
     */
    public function SeeabsencesSitcpaAction()
    {
        $menu = "Gestion";
        $page = "absences / Situation CPA";
        $urlPage = "menudoc/5";
        $urlPdf = "absences/sitcpa/pdf";
        
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
     * @Route("/gestion/absences/sitcpa/pdf", name="seeabsencesSitcpaPdf")
     */
    public function SeeabsencesSitcpaPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "absences / Situation CPA";
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