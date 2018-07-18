<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Pilotage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ScenarioController extends ListPage
{
    /**
     *
     * @Route("/traitement/pilotage/sce", name="seePilotageSce")
     */
    public function PilotageSceAction()
    {
        return $this->listChamp("Scénario","traitement/pilotage/sce/pdf",'257', '781', "Traitement");
    }
    /**
     *
     * @Route("/traitement/pilotage/sce/pdf", name="seePilotageScepdf")
     */
    public function PilotageScePdfAction()
    {
        return $this->listChampPdf("Scénario",'257', '781', "Traitement");
    }
}