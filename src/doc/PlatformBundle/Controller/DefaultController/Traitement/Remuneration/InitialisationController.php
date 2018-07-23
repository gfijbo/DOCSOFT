<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class InitialisationController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/ini", name="seeRemunerationIni")
     */
    public function RemunerationIniAction()
    {
        return $this->listChamp("Initialisation Historique","/traitement/remuneration/ini/pdf",'155', '586', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ini/pdf", name="seeRemunerationInipdf")
     */
    public function RemunerationIniPdfAction()
    {
        return $this->listChampPdf("Initialisation Historique",'155', '586', "Traitement");
    }
}