<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Pilotage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class SuiviController extends ListPage
{
    /**
     *
     * @Route("/traitement/pilotage/sui", name="seePilotageSui")
     */
    public function PilotageSuiAction()
    {
        return $this->listChamp("Suivi budgétaire","traitement/pilotage/sui/pdf",'259', '783', "Traitement");
    }
    /**
     *
     * @Route("/traitement/pilotage/sui/pdf", name="seePilotageSuipdf")
     */
    public function PilotageSuiPdfAction()
    {
        return $this->listChampPdf("Suivi budgétaire",'259', '783', "Traitement");
    }
}