<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Preparation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ConsultationController extends ListPage
{
    /**
     *
     * @Route("/traitement/preparation/pil", name="seePreparationPil")
     */
    public function PreparationPilAction()
    {
        return $this->listChamp("Consultation de la masse de réf.","traitement/preparation/pil/pdf",'252', '777', "Traitement");
    }
    /**
     *
     * @Route("/traitement/preparation/pil/pdf", name="seePreparationPilpdf")
     */
    public function PreparationPilPdfAction()
    {
        return $this->listChampPdf("Consultation de la masse de réf.",'252', '777', "Traitement");
    }
}