<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Astrator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class CriteresController extends ListPage
{
    /**
     *
     * @Route("/traitement/astrator/cri", name="seeAstratorCri")
     */
    public function AstratorCriAction()
    {
        return $this->listChamp("Critères","traitement/astrator/cri/pdf",'198', '663', "Traitement");
    }
    /**
     *
     * @Route("/traitement/astrator/cri/pdf", name="seeAstratorCripdf")
     */
    public function AstratorCriPdfAction()
    {
        return $this->listChampPdf("Critères",'198', '663', "Traitement");
    }
}