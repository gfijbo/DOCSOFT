<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\InterfaceAstre;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TrController extends ListPage
{
    /**
     *
     * @Route("/traitement/interface/tr", name="seeInterfaceTr")
     */
    public function InterfaceTrAction()
    {
        return $this->listChamp("TR / Liste des sites OFII","/traitement/interface/tr/pdf",'190', '657', "Traitement");
    }
    /**
     *
     * @Route("/traitement/interface/tr/pdf", name="seeInterfaceTrpdf")
     */
    public function InterfaceTrPdfAction()
    {
        return $this->listChampPdf("TR / Liste des sites OFII",'190', '657', "Traitement");
    }
}