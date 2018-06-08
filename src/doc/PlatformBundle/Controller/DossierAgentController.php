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