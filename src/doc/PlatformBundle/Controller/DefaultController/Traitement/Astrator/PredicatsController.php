<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Astrator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class PredicatsController extends ListPage
{
    /**
     *
     * @Route("/traitement/astrator/pre", name="seeAstratorPre")
     */
    public function AstratorPreAction()
    {
        return $this->listChamp("Prédicats","traitement/astrator/pre/pdf",'199', '664', "Traitement");
    }
    /**
     *
     * @Route("/traitement/astrator/pre/pdf", name="seeAstratorPrepdf")
     */
    public function AstratorPrePdfAction()
    {
        return $this->listChampPdf("Prédicats",'199', '664', "Traitement");
    }
}