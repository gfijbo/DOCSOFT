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
     * @Route("/dossieragent", name="seedossieragent")
     */
    public function indexAction()
    {
        $menu = "Dossier Agent";
        $page = "Etat Civil";
        $urlPage = "dossieragent";

        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findAll();
        $html = $this->render('docPlatformBundle:DossierAgent:index.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));

        return $html;
    }

    /**
     *
     * @Route("/dossieragent/pdf", name="seedossieragentpdf")
     */
    public function pdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = "Dossier Agent";
        $page = "Etat Civil";
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findAll();
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
        $menu = "Dossier Agent";
        $urlPage = "dossieragent";
        $page = "Etat Civil ";

        return $this->render('docPlatformBundle:DossierAgent:seeChamp.html.twig', array(
            'doss' => $doss,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
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