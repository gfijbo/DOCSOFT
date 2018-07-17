<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Epurations;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ArretesGenController extends ListPage
{
    /**
     *
     * @Route("/traitement/epurations/arrgen", name="seeEpurationsArrgen")
     */
    public function EpurationsArrgenAction()
    {
        return $this->listChamp("Arrêtés Généraux et Médicaux","traitement/epurations/arrgen/pdf",'183', '648', "Traitement");
    }
    /**
     *
     * @Route("/traitement/epurations/arrgen/pdf", name="seeEpurationsArrgenpdf")
     */
    public function EpurationsArrgenPdfAction()
    {
        return $this->listChampPdf("Arrêtés Généraux et Médicaux",'183', '648', "Traitement");
    }
}