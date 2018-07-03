<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Interfaces;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CorrespondanceController extends ListPage
{
    /**
     *
     * @Route("/referentiel/interface/cor", name="seeInterfaceCor")
     */
    public function InterfaceCorAction()
    {
        return $this->listChamp("Correspondances des rubriques","referentiel/interface/cor/pdf",'77', '334', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/interface/cor/pdf", name="seeInterfaceCorpdf")
     */
    public function InterfaceCorPdfAction()
    {
        return $this->listChampPdf("Correspondances des rubriques",'77', '334', "Référentiel");
    }
}