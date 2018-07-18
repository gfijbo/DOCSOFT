<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Preparation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class CalculAnnController extends ListPage
{
    /**
     *
     * @Route("/traitement/preparation/calann", name="seePreparationCalann")
     */
    public function PreparationCalannAction()
    {
        return $this->listChamp("Calcul annualisé","traitement/preparation/calann/pdf",'249', '774', "Traitement");
    }
    /**
     *
     * @Route("/traitement/preparation/calann/pdf", name="seePreparationCalannpdf")
     */
    public function PreparationCalannPdfAction()
    {
        return $this->listChampPdf("Calcul annualisé",'249', '774', "Traitement");
    }
}