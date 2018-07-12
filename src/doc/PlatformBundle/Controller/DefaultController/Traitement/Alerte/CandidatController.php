<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Alerte;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class CandidatController extends ListPage
{
    /**
     *
     * @Route("/traitement/alerte/can", name="seeAlerteCan")
     */
    public function AlerteCanAction()
    {
        return $this->listChamp("Candidat","traitement/alerte/can/pdf",'225', '730', "Traitement");
    }
    /**
     *
     * @Route("/traitement/alerte/can/pdf", name="seeAlerteCanpdf")
     */
    public function AlerteCanPdfAction()
    {
        return $this->listChampPdf("Candidat",'225', '730', "Traitement");
    }
}