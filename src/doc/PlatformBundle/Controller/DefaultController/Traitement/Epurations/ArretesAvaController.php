<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Epurations;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ArretesAvaController extends ListPage
{
    /**
     *
     * @Route("/traitement/epurations/arrava", name="seeEpurationsArrava")
     */
    public function EpurationsArravaAction()
    {
        return $this->listChamp("Arrêtés Avancement","traitement/epurations/arrava/pdf",'182', '647', "Traitement");
    }
    /**
     *
     * @Route("/traitement/epurations/arrava/pdf", name="seeEpurationsArravapdf")
     */
    public function EpurationsArravaPdfAction()
    {
        return $this->listChampPdf("Arrêtés Avancement",'182', '647', "Traitement");
    }
}