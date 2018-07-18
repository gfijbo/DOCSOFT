<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Pilotage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ConsultationController extends ListPage
{
    /**
     *
     * @Route("/traitement/pilotage/con", name="seePilotageCon")
     */
    public function PilotageConAction()
    {
        return $this->listChamp("Consultation des Résultats","traitement/pilotage/con/pdf",'258', '782', "Traitement");
    }
    /**
     *
     * @Route("/traitement/pilotage/con/pdf", name="seePilotageConpdf")
     */
    public function PilotageConPdfAction()
    {
        return $this->listChampPdf("Consultation des Résultats",'258', '782', "Traitement");
    }
}