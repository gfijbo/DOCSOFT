<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Preparation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class DuplicationController extends ListPage
{
    /**
     *
     * @Route("/traitement/preparation/dup", name="seePreparationDup")
     */
    public function PreparationDupAction()
    {
        return $this->listChamp("Duplication Agent","traitement/preparation/dup/pdf",'251', '776', "Traitement");
    }
    /**
     *
     * @Route("/traitement/preparation/dup/pdf", name="seePreparationDuppdf")
     */
    public function PreparationDupPdfAction()
    {
        return $this->listChampPdf("Duplication Agent",'251', '776', "Traitement");
    }
}