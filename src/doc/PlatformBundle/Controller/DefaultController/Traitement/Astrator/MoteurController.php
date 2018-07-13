<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Astrator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class MoteurController extends ListPage
{
    /**
     *
     * @Route("/traitement/astrator/mot", name="seeAstratorMot")
     */
    public function AstratorMotAction()
    {
        return $this->listChamp("Moteur de recherche","traitement/astrator/mot/pdf",'200', '665', "Traitement");
    }
    /**
     *
     * @Route("/traitement/astrator/mot/pdf", name="seeAstratorMotpdf")
     */
    public function AstratorMotPdfAction()
    {
        return $this->listChampPdf("Moteur de recherche",'200', '665', "Traitement");
    }
}