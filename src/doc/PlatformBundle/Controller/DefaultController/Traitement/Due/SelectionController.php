<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Due;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class SelectionController extends ListPage
{
    /**
     *
     * @Route("/traitement/due/sel", name="seeDueSel")
     */
    public function DueSelAction()
    {
        return $this->listChamp("Sélection des agents DUE","/traitement/due/sel/pdf",'237', '751', "Traitement");
    }
    /**
     *
     * @Route("/traitement/due/sel/pdf", name="seeDueSelpdf")
     */
    public function DueSelPdfAction()
    {
        return $this->listChampPdf("Sélection des agents DUE",'237', '751', "Traitement");
    }
}