<?php
// src\doc\PlatformBundle\Controller\DossierAgentController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DossierAgentController extends Controller
{
    /**
     *
     * @Route("/identite/etatcivil", name="seeIdentiteEtatcivil")
     */
    public function IdentiteEtatcivilAction()
    {
        $menu = "Gestion";
        $page = "Identité / Etat Civil";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/etatcivil/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

            $listDoss = $repository->findBy(
                array('onglet_ref' => '2','page_ref' => '2')
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
     * @Route("/identite/etatcivil/pdf", name="seeIdentiteEtatcivilpdf")
     */
    public function IdentiteEtatcivilpdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Etat Civil";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

            $listDoss = $repository->findBy(
                array('onglet_ref' => '2','page_ref' => '2')
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
     * @Route("/organisme/agent", name="seeOrganismeAgent")
     */
    public function OrganismeAgentAction()
    {
        $menu = "Gestion";
        $page = "Organisme / Agent";
        $urlPage = "menudoc/3";
        $urlPdf = "organisme/agent/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '3','page_ref' => '6')
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
     * @Route("/organisme/agent/pdf", name="seeOrganismeAgentpdf")
     */
    public function OrganismeAgentPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Organisme / Agent";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '3','page_ref' => '6')
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
     * @Route("/organisme/affectation", name="seeOrganismeAffectation")
     */
    public function OrganismeAffectationAction()
    {
        $menu = "Gestion";
        $page = "Organisme / Affectation";
        $urlPage = "menudoc/3";
        $urlPdf = "organisme/affectation/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '3','page_ref' => '7')
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
     * @Route("/organisme/affectation/pdf", name="seeOrganismeAffectationpdf")
     */
    public function OrganismeAffectationPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Organisme / Affectation";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '3','page_ref' => '7')
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
            array('onglet_ref' => '4','page_ref' => '8')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'urlPdf' =>$urlPdf,
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
            array('onglet_ref' => '4','page_ref' => '8')
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
            array('onglet_ref' => '5','page_ref' => '13')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'urlPdf' =>$urlPdf,
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
            array('onglet_ref' => '4','page_ref' => '8')
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
     * @Route("/remuneration/elements", name="seeRemunerationElements")
     */
    public function SeeRemunerationElementsAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Eléments";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/elements/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6','page_ref' => '14')
            );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'urlPdf' =>$urlPdf,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        
        return $html;
    }
    
    /**
     *
     * @Route("/remuneration/elements/pdf", name="seeRemunerationElementsPdf")
     */
    public function seeRemunerationElementsPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Eléments";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6','page_ref' => '14')
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
     * @Route("/seechamp/{id}", name="seechamp")
     */
    public function seeChampAction($id)
    {
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $doss = $repository->find($id);
        $menu = "Documentation";
        $urlPage = "";

        return $this->render('docPlatformBundle:DossierAgent:seeChamp.html.twig', array(
            'doss' => $doss,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }

    /**
     *
     * @Route("/pdfchamp/{id}", name="seechamppdf")
     */
    public function pdfChampAction($id)
    {
        $filename = 'Etat_Civil';
        $menu = "Dossier Agent";
        $page = "Etat Civil";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $doss = $repository->find($id);
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdfChamp.html.twig', array(
            'doss' => $doss,
            'page' => $page,
            'menu' => $menu
        ));

        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
}