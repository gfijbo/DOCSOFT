<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Astrator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class AttributController extends ListPage
{
    /**
     *
     * @Route("/traitement/astrator/att", name="seeAstratorAtt")
     */
    public function AstratorAttAction()
    {
        return $this->listChamp("Attributs calculés","traitement/astrator/att/pdf",'197', '662', "Traitement");
    }
    /**
     *
     * @Route("/traitement/astrator/att/pdf", name="seeAstratorAttpdf")
     */
    public function AstratorAttPdfAction()
    {
        return $this->listChampPdf("Attributs calculés",'197', '662', "Traitement");
    }
}