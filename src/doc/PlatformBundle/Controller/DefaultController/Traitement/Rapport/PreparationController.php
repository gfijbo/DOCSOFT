<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Rapport;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class PreparationController extends ListPage
{
    /**
     *
     * @Route("/traitement/rapport/pre", name="seeRapportPre")
     */
    public function RapportPreAction()
    {
        return $this->listChamp("Préparation Calcul","traitement/rapport/pre/pdf",'233', '748', "Traitement");
    }
    /**
     *
     * @Route("/traitement/rapport/pre/pdf", name="seeRapportPrepdf")
     */
    public function RapportPrePdfAction()
    {
        return $this->listChampPdf("Préparation Calcul",'233', '748', "Traitement");
    }
}