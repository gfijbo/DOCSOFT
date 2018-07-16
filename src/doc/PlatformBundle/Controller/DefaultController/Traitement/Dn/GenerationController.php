<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dn;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class GenerationController extends ListPage
{
    /**
     *
     * @Route("/traitement/dn/gen", name="seeDnGen")
     */
    public function DnGenAction()
    {
        return $this->listChamp("Génération DN-AC (AED)","traitement/dn/gen/pdf",'217', '722', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dn/gen/pdf", name="seeDnGenpdf")
     */
    public function DnGenPdfAction()
    {
        return $this->listChampPdf("Génération DN-AC (AED)",'217', '722', "Traitement");
    }
}