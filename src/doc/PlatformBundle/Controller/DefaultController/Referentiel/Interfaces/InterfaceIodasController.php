<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Interfaces;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InterfaceIodasController extends ListPage
{
    /**
     *
     * @Route("/referentiel/interface/intiod/par", name="seeInterfaceIntiodPar")
     */
    public function InterfaceIntiodParAction()
    {
        return $this->listChamp("Interface IODAS / Paramètres Iodas","referentiel/interface/intiod/par/pdf",'78', '335', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/interface/intiod/par/pdf", name="seeInterfaceIntiodParpdf")
     */
    public function InterfaceIntiodParPdfAction()
    {
        return $this->listChampPdf("Interface IODAS / Paramètres Iodas",'78', '335', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/interface/intiod/cor", name="seeInterfaceIntiodCor")
     */
    public function InterfaceIntiodCorAction()
    {
        return $this->listChamp("Interface IODAS / Correspondance Iodas","referentiel/interface/intiod/cor/pdf",'78', '336', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/interface/intiod/cor/pdf", name="seeInterfaceIntiodCorpdf")
     */
    public function InterfaceIntiodCorPdfAction()
    {
        return $this->listChampPdf("Interface IODAS / Correspondance Iodas",'78', '336', "Référentiel");
    }
}