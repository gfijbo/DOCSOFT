<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Liaison;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ConsultationController extends ListPage
{
    /**
     *
     * @Route("/traitement/liaison/con", name="seeLiaisonCon")
     */
    public function LiaisonConAction()
    {
        return $this->listChamp("Consultation des fichiers","traitement/liaison/con/pdf",'192', '658', "Traitement");
    }
    /**
     *
     * @Route("/traitement/liaison/con/pdf", name="seeLiaisonConpdf")
     */
    public function LiaisonConPdfAction()
    {
        return $this->listChampPdf("Consultation des fichiers",'192', '658', "Traitement");
    }
}