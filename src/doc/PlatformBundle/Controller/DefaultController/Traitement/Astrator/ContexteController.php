<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Astrator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ContexteController extends ListPage
{
    /**
     *
     * @Route("/traitement/astrator/con", name="seeAstratorCon")
     */
    public function AstratorConAction()
    {
        return $this->listChamp("Contexte","traitement/astrator/con/pdf",'195', '660', "Traitement");
    }
    /**
     *
     * @Route("/traitement/astrator/con/pdf", name="seeAstratorConpdf")
     */
    public function AstratorConPdfAction()
    {
        return $this->listChampPdf("Contexte",'195', '660', "Traitement");
    }
}