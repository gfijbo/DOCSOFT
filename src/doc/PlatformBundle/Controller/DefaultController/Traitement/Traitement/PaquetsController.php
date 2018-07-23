<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Traitement;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class PaquetsController extends ListPage
{
    /**
     *
     * @Route("/traitement/groupes/paq", name="seeRemunerationGroupesPaq")
     */
    public function RemunerationGroupesPaqAction()
    {
        return $this->listChamp("Paquets de rapports","traitement/groupes/paq/pdf",'175', '639', "Traitement");
    }
    /**
     *
     * @Route("/traitement/groupes/paq/pdf", name="seeRemunerationGroupesPaqpdf")
     */
    public function RemunerationGroupesPaqPdfAction()
    {
        return $this->listChampPdf("Paquets de rapports",'175', '639', "Traitement");
    }
}