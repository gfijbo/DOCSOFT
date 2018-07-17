<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Epurations;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class DemandesController extends ListPage
{
    /**
     *
     * @Route("/traitement/epurations/dem", name="seeEpurationsDem")
     */
    public function EpurationsDemAction()
    {
        return $this->listChamp("Demandes d'arrêtés","traitement/epurations/dem/pdf",'185', '650', "Traitement");
    }
    /**
     *
     * @Route("/traitement/epurations/dem/pdf", name="seeEpurationsDempdf")
     */
    public function EpurationsDemPdfAction()
    {
        return $this->listChampPdf("Demandes d'arrêtés",'185', '650', "Traitement");
    }
}