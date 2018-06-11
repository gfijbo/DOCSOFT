<?php
// src\doc\PlatformBundle\Controller\CarriereController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CarriereController extends Controller
{
    /**
     *
     * @Route("/carriere/situation", name="seeCarriereSituation")
     */
    public function CarriereSituationAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Situation";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/situation/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '6'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/situation/pdf", name="seeCarriereSituationpdf")
     */
    public function CarriereSituationPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Situation";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '6'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/contrat", name="seeCarriereContrat")
     */
    public function CarriereContratAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Contrat";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/contrat/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '33'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/contrat/pdf", name="seeCarriereContratpdf")
     */
    public function CarriereContratPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Contrat";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '33'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/notation", name="seeCarriereNotation")
     */
    public function CarriereNotationAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Notation";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/notation/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '34'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/notation/pdf", name="seeCarriereNotationpdf")
     */
    public function CarriereNotationPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Notation";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '34'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/proava", name="seeCarriereProava")
     */
    public function CarriereProavaAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Propositions avancement";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/proava/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '35'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/proava/pdf", name="seeCarriereProavapdf")
     */
    public function CarriereProavaPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Propositions avancement";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '35'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/arrava", name="seeCarriereArrava")
     */
    public function CarriereArravaAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Arretés d'avancements";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/arrava/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '36'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/arrava/pdf", name="seeCarriereArravapdf")
     */
    public function CarriereArravaPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Arretés d'avancements";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '36'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/demandes", name="seeCarriereDemandes")
     */
    public function CarriereDemandesAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Demandes";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/demandes/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '37'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/demandes/pdf", name="seeCarriereDemandespdf")
     */
    public function CarriereDemandesPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Demandes";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '37'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/demtempar", name="seeCarriereDemtempar")
     */
    public function CarriereDemtemparAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Demande de temps partiel";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/demtempar/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '38'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/demtempar/pdf", name="seeCarriereDemtemparpdf")
     */
    public function CarriereDemtemparPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Demande de temps partiel";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '38'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/vismed", name="seeCarriereVismed")
     */
    public function CarriereVismedAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Visites médicales";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/vismed/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '39'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/vismed/pdf", name="seeCarriereVismedpdf")
     */
    public function CarriereVismedPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Visites médicales";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '39'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/vaccination", name="seeCarriereVaccination")
     */
    public function CarriereVaccinationAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Vaccination";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/vaccination/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '40'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/vaccination/pdf", name="seeCarriereVaccinationpdf")
     */
    public function CarriereVaccinationPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Vaccination";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '40'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/historique", name="seeCarriereHistorique")
     */
    public function CarriereHistoriqueAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Historique";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/historique/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '41'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/historique/pdf", name="seeCarriereHistoriquepdf")
     */
    public function CarriereHistoriquePdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Historique";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '41'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/hiseve", name="seeCarriereHiseve")
     */
    public function CarriereHiseveAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Historique évènements";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/hiseve/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '42'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/hiseve/pdf", name="seeCarriereHisevepdf")
     */
    public function CarriereHisevePdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Historique évènements";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '42'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/medaille", name="seeCarriereMedaille")
     */
    public function CarriereMedailleAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Médaille";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/medaille/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '43'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/medaille/pdf", name="seeCarriereMedaillepdf")
     */
    public function CarriereMedaillePdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Médaille";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '43'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/infmed", name="seeCarriereInfmed")
     */
    public function CarriereInfmedAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Infos médaille";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/infmed/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '44'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/infmed/pdf", name="seeCarriereInfmedpdf")
     */
    public function CarriereInfmedPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Infos médaille";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '44'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/sanction", name="seeCarriereSanction")
     */
    public function CarriereSanctionAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Sanction";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/sanction/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '45'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/sanction/pdf", name="seeCarriereSanctionpdf")
     */
    public function CarriereSanctionPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Sanction";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '45'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/doucar", name="seeCarriereDoucar")
     */
    public function CarriereDoucarAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Double carrière";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/doucar/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '46'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/doucar/pdf", name="seeCarriereDoucarpdf")
     */
    public function CarriereDoucarPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Double carrière";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '46'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/chreve", name="seeCarriereChreve")
     */
    public function CarriereChreveAction()
    {
        $menu = "Gestion";
        $page = "Carrière / Chronologie des évènements";
        $urlPage = "menudoc/4";
        $urlPdf = "carriere/chreve/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '47'),array('num_ordre' => 'asc')
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
     * @Route("/carriere/chreve/pdf", name="seeCarriereChrevepdf")
     */
    public function CarriereChrevePdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Carrière / Chronologie des évènements";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '4', 'page_ref' => '47'),array('num_ordre' => 'asc')
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