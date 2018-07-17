<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Epurations;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class SanctionsController extends ListPage
{
    /**
     *
     * @Route("/traitement/epurations/san", name="seeEpurationsSan")
     */
    public function EpurationsSanAction()
    {
        return $this->listChamp("Sanctions","traitement/epurations/san/pdf",'184', '649', "Traitement");
    }
    /**
     *
     * @Route("/traitement/epurations/san/pdf", name="seeEpurationsSanpdf")
     */
    public function EpurationsSanPdfAction()
    {
        return $this->listChampPdf("Sanctions",'184', '649', "Traitement");
    }
}