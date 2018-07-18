<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Preparation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class InitialisationController extends ListPage
{
    /**
     *
     * @Route("/traitement/preparation/ini", name="seePreparationIni")
     */
    public function PreparationIniAction()
    {
        return $this->listChamp("Initialisation","/traitement/preparation/ini/pdf",'247', '771', "Traitement");
    }
    /**
     *
     * @Route("/traitement/preparation/ini/pdf", name="seePreparationInipdf")
     */
    public function PreparationIniPdfAction()
    {
        return $this->listChampPdf("Initialisation",'247', '771', "Traitement");
    }
}