<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Traitement;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TrainsController extends ListPage
{
    /**
     *
     * @Route("/traitement/groupes/tra", name="seeRemunerationGroupesTra")
     */
    public function RemunerationGroupesTraAction()
    {
        return $this->listChamp("Trains de travail","traitement/groupes/tra/pdf",'178', '642', "Traitement");
    }
    /**
     *
     * @Route("/traitement/groupes/tra/pdf", name="seeRemunerationGroupesTrapdf")
     */
    public function RemunerationGroupesTraPdfAction()
    {
        return $this->listChampPdf("Trains de travail",'178', '642', "Traitement");
    }
}