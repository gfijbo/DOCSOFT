<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Astrator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ChoixController extends ListPage
{
    /**
     *
     * @Route("/traitement/astrator/cho", name="seeAstratorCho")
     */
    public function AstratorChoAction()
    {
        return $this->listChamp("Choix des attributs du contexte","traitement/astrator/cho/pdf",'196', '661', "Traitement");
    }
    /**
     *
     * @Route("/traitement/astrator/cho/pdf", name="seeAstratorChopdf")
     */
    public function AstratorChoPdfAction()
    {
        return $this->listChampPdf("Choix des attributs du contexte",'196', '661', "Traitement");
    }
}