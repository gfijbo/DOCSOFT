<?php
// src\doc\PlatformBundle\Controller\IdentiteController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class IdentiteController extends ListPage
{
    /**
     *
     * @Route("/gestion/identite/etatcivil", name="seeIdentiteEtatcivil")
     */
    public function IdentiteEtatcivilAction()
    {
        return $this->listChamp("Identité / Etat Civil","gestion/identite/etatcivil/pdf",'2', '2',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/etatcivil/pdf", name="seeIdentiteEtatcivilpdf")
     */
    public function IdentiteEtatcivilpdfAction()
    {
        return $this->listChampPdf("Identité / Etat Civil",'2', '2',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/repertoire", name="seeIdentiteRepertoire")
     */
    public function IdentiteRepertoireAction()
    {
        return $this->listChamp("Identité / Repertoire","gestion/identite/repertoire/pdf",'2', '13',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/repertoire/pdf", name="seeIdentiteRepertoirepdf")
     */
    public function IdentiteRepertoirepdfAction()
    {
        return $this->listChampPdf("Identité / Repertoire",'2', '13',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/domiciliations", name="seeIdentiteDomiciliations")
     */
    public function IdentiteDomiciliationsAction()
    {
        return $this->listChamp("Identité / Domiciliations","gestion/identite/domiciliations/pdf",'2', '14',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/domiciliations/pdf", name="seeIdentiteDomiciliationspdf")
     */
    public function IdentiteDomiciliationspdfAction()
    {
        return $this->listChampPdf("Identité / Domiciliations",'2', '14',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/enfants", name="seeIdentiteEnfants")
     */
    public function IdentiteEnfantsAction()
    {
        return $this->listChamp("Identité / Enfants","gestion/identite/enfants/pdf",'2', '15',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/enfants/pdf", name="seeIdentiteEnfantspdf")
     */
    public function IdentiteEnfantspdfAction()
    {
        return $this->listChampPdf("Identité / Enfants",'2', '15',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/conjoint", name="seeIdentiteConjoint")
     */
    public function IdentiteConjointAction()
    {
        return $this->listChamp("Identité / Conjoint","gestion/identite/conjoint/pdf",'2', '16',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/conjoint/pdf", name="seeIdentiteConjointpdf")
     */
    public function IdentiteConjointpdfAction()
    {
        return $this->listChampPdf("Identité / Conjoint",'2', '16',"Gestion", "2");
    }

    /**
     *
     * @Route("/gestion/identite/beneficiaire", name="seeIdentiteBeneficiaire")
     */
    public function IdentiteBeneficiaireAction()
    {
        return $this->listChamp("Identité / Beneficiaire","gestion/identite/beneficiaire/pdf",'2', '17',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/beneficiaire/pdf", name="seeIdentiteBeneficiairepdf")
     */
    public function IdentiteBeneficiairepdfAction()
    {
        return $this->listChampPdf("Identité / Beneficiaire",'2', '17',"Gestion", "2");
    }
    /**
     *
     * @Route("/gestion/identite/repleg", name="seeIdentiteRepLegal")
     */
    public function IdentiteRepLegalAction()
    {
        $menu = "Gestion";
        $page = "Identité / Représentation Legal";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/replegal/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '18'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/replegal/pdf", name="seeIdentiteRepLegalpdf")
     */
    public function IdentiteRepLegalpdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Représentation Legal";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '18'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/competences", name="seeIdentiteCompetences")
     */
    public function IdentiteCompetencesAction()
    {
        $menu = "Gestion";
        $page = "Identité / Compétences";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/competences/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '19'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/competences/pdf", name="seeIdentiteCompetencespdf")
     */
    public function IdentiteCompetencespdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Compétences";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '19'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/metiers", name="seeIdentiteMetiers")
     */
    public function IdentiteMetiersAction()
    {
        $menu = "Gestion";
        $page = "Identité / Métiers";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/metiers/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '20'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/metiers/pdf", name="seeIdentiteMetierspdf")
     */
    public function IdentiteMetierspdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Métiers";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '20'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/sitmil", name="seeIdentiteSitMilitaire")
     */
    public function IdentiteSitMilitaireAction()
    {
        $menu = "Gestion";
        $page = "Identité / Sit. militaire";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/sitmil/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '21'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/sitmil/pdf", name="seeIdentiteSitMilitairepdf")
     */
    public function IdentiteSitMilitairepdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Sit. militaire";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '21'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/handicaps", name="seeIdentiteHandicaps")
     */
    public function IdentiteHandicapsAction()
    {
        $menu = "Gestion";
        $page = "Identité / Handicaps";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/handicaps/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '22'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/handicaps/pdf", name="seeIdentiteHandicapspdf")
     */
    public function IdentiteHandicapspdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Handicaps";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '22'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/resapt", name="seeIdentiteResApt")
     */
    public function IdentiteResAptAction()
    {
        $menu = "Gestion";
        $page = "Identité / Réserve d'aptitude";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/resapt/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '23'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/resapt/pdf", name="seeIdentiteResAptpdf")
     */
    public function IdentiteResAptpdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Réserve d'aptitude";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '23'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/mensurations", name="seeIdentiteMensurations")
     */
    public function IdentiteMensAction()
    {
        $menu = "Gestion";
        $page = "Identité / Mensurations ";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/mensurations/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '24'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/mensurations/pdf", name="seeIdentiteMensurationspdf")
     */
    public function IdentiteMenspdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Mensurations";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '24'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/infallfam", name="seeIdentiteInfAlocF")
     */
    public function IdentiteInfAlocFAction()
    {
        $menu = "Gestion";
        $page = "Identité / Informations Allocations Familiales ";
        $urlPage = "menudoc/2";
        $urlPdf = "identite/infallfam/pdf";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '25'), array('num_ordre' => 'asc')
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
     * @Route("/gestion/identite/infallfam/pdf", name="seeIdentiteInfAlocFpdf")
     */
    public function IdentiteInfAlocFpdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Gestion";
        $page = "Identité / Informations Allocations Familiales ";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => '2', 'page_ref' => '25'), array('num_ordre' => 'asc')
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