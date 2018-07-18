<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Rapport;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class CalculController extends ListPage
{
    /**
     *
     * @Route("/traitement/rapport/cal", name="seeRapportCal")
     */
    public function RapportCalAction()
    {
        return $this->listChamp("Calcul Bilan","traitement/rapport/cal/pdf",'234', '749', "Traitement");
    }
    /**
     *
     * @Route("/traitement/rapport/cal/pdf", name="seeRapportCalpdf")
     */
    public function RapportCalPdfAction()
    {
        return $this->listChampPdf("Calcul Bilan",'234', '749', "Traitement");
    }
}