<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Pilotage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class HypotheseController extends ListPage
{
    /**
     *
     * @Route("/traitement/pilotage/hyp", name="seePilotageHyp")
     */
    public function PilotageHypAction()
    {
        return $this->listChamp("Hypothèses de calcul","traitement/pilotage/hyp/pdf",'255', '779', "Traitement");
    }
    /**
     *
     * @Route("/traitement/pilotage/hyp/pdf", name="seePilotageHyppdf")
     */
    public function PilotagePopPdfAction()
    {
        return $this->listChampPdf("Hypothèses de calcul",'255', '779', "Traitement");
    }
}