<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Pilotage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class PopulationController extends ListPage
{
    /**
     *
     * @Route("/traitement/pilotage/pop", name="seePilotagePop")
     */
    public function PilotagePopAction()
    {
        return $this->listChamp("Population","/traitement/pilotage/pop/pdf",'254', '778', "Traitement");
    }
    /**
     *
     * @Route("/traitement/pilotage/pop/pdf", name="seePilotagePoppdf")
     */
    public function PilotagePopPdfAction()
    {
        return $this->listChampPdf("Population",'254', '778', "Traitement");
    }
}