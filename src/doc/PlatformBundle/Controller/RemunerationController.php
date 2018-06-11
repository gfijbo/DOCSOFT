<?php
// src\doc\PlatformBundle\Controller\RemunerationController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class RemunerationController extends Controller
{
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
            array('onglet_ref' => '6', 'page_ref' => '12'),array('num_ordre' => 'asc')
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
            array('onglet_ref' => '6', 'page_ref' => '12'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/contrat", name="seeRemunerationContrat")
     */
    public function SeeRemunerationContratAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Contrat";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/contrat/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '57'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/contrat/pdf", name="seeRemunerationContratPdf")
     */
    public function seeRemunerationContratPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Contrat";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '57'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/eledec", name="seeRemunerationEledec")
     */
    public function SeeRemunerationEledecAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Elém. déconcentrés";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/eledec/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '58'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/eledec/pdf", name="seeRemunerationEledecPdf")
     */
    public function seeRemunerationEledecPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Elém. déconcentrés";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '58'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/elevarcou", name="seeRemunerationElevarcou")
     */
    public function SeeRemunerationElevarcouAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Elém. var. en cours";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/elevarcou/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '59'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/elevarcou/pdf", name="seeRemunerationElevarcouPdf")
     */
    public function seeRemunerationElevarcouPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Elém. var. en cours";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '59'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/elevarhis", name="seeRemunerationElevarhis")
     */
    public function SeeRemunerationElevarhisAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Elém. var. historique";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/elevarhis/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '60'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/elevarhis/pdf", name="seeRemunerationElevarhisPdf")
     */
    public function seeRemunerationElevarhisPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Elém. var. historique";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '60'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/ticres", name="seeRemunerationTicres")
     */
    public function SeeRemunerationTicresAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Tickets restaurant";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/ticres/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '61'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/ticres/pdf", name="seeRemunerationTicresPdf")
     */
    public function seeRemunerationTicresPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Tickets restaurant";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '61'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/mesbul", name="seeRemunerationMesbul")
     */
    public function SeeRemunerationMesbullAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Mess. bulletin";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/mesbul/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '62'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/mesbul/pdf", name="seeRemunerationMesbulPdf")
     */
    public function seeRemunerationMesbullpdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Mess. bulletin";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '62'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/bulletins", name="seeRemunerationBulletins")
     */
    public function SeeRemunerationBulletinsAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Bulletins";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/bulletins/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '63'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/bulletins/pdf", name="seeRemunerationBulletinsPdf")
     */
    public function seeRemunerationBulletinsPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Elém. var. en cours";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '63'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/cumuls", name="seeRemunerationCumuls")
     */
    public function SeeRemunerationCumulsAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Cumuls";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/cumuls/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '64'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/cumuls/pdf", name="seeRemunerationCumulsPdf")
     */
    public function seeRemunerationCumulsPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Cumuls";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '64'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/echeance", name="seeRemunerationEcheance")
     */
    public function SeeRemunerationEcheanceAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Echéance";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/echeance/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '65'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/echeance/pdf", name="seeRemunerationEcheancePdf")
     */
    public function seeRemunerationEcheancePdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Echéance";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '65'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/repartition", name="seeRemunerationRepartition")
     */
    public function SeeRemunerationRepartitionAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Répartition";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/repartition/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '66'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/repartition/pdf", name="seeRemunerationRepartitionPdf")
     */
    public function seeRemunerationRepartitionPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Répartition";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '66'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/hisrep", name="seeRemunerationHisrep")
     */
    public function SeeRemunerationHisrepAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Historique des répartitions";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/hisrep/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '67'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/hisrep/pdf", name="seeRemunerationHisrepPdf")
     */
    public function seeRemunerationHisrepPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Historique des répartitions";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '67'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/rappels", name="seeRemunerationRappels")
     */
    public function SeeRemunerationRappelsAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Rappels";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/rappels/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '68'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/rappels/pdf", name="seeRemunerationRappelsPdf")
     */
    public function seeRemunerationRappelsPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Rappels";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '68'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/analytique", name="seeRemunerationAnalytique")
     */
    public function SeeRemunerationAnalytiqueAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Analytique";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/analytique/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '69'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/analytique/pdf", name="seeRemunerationAnalytiquePdf")
     */
    public function seeRemunerationAnalytiquePdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Analytique";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '69'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/refacturation", name="seeRemunerationRefacturation")
     */
    public function SeeRemunerationRefacturationAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Refacturation";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/refacturation/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '70'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/refacturation/pdf", name="seeRemunerationRefacturationPdf")
     */
    public function seeRemunerationRefacturationPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Refacturation";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '70'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/retsou", name="seeRemunerationRetsou")
     */
    public function SeeRemunerationRetsouAction()
    {
        $menu = "Gestion";
        $page = "Rémunération / Retenue à la source";
        $urlPage = "menudoc/6";
        $urlPdf = "remuneration/retsou/pdf";
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '71'),array('num_ordre' => 'asc')
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
     * @Route("/remuneration/retsou/pdf", name="seeRemunerationRetsouPdf")
     */
    public function seeRemunerationRetsouPdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Rémunération / Retenue à la source";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $listDoss = $repository->findBy(
            array('onglet_ref' => '6', 'page_ref' => '71'),array('num_ordre' => 'asc')
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