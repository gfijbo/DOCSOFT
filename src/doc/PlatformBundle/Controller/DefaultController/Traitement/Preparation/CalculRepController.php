<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Preparation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class CalculRepController extends ListPage
{
    /**
     *
     * @Route("/traitement/preparation/calrep", name="seePreparationCalrep")
     */
    public function PreparationCalrepAction()
    {
        return $this->listChamp("Calcul répartition affectation","traitement/preparation/calrep/pdf",'250', '775', "Traitement");
    }
    /**
     *
     * @Route("/traitement/preparation/calrep/pdf", name="seePreparationCalreppdf")
     */
    public function PreparationCalrepPdfAction()
    {
        return $this->listChampPdf("Calcul répartition affectation",'250', '775', "Traitement");
    }
}