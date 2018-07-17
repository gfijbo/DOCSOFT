<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\InterfaceAstre;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TransfertController extends ListPage
{
    /**
     *
     * @Route("/traitement/interface/tra", name="seeInterfaceTra")
     */
    public function InterfaceTraAction()
    {
        return $this->listChamp("Transfert agent depuis AGORA","traitement/interface/tra/pdf",'188', '653', "Traitement");
    }
    /**
     *
     * @Route("/traitement/interface/tra/pdf", name="seeInterfaceTrapdf")
     */
    public function InterfaceTraPdfAction()
    {
        return $this->listChampPdf("Transfert agent depuis AGORA",'188', '653', "Traitement");
    }
}