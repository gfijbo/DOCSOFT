<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dads;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ParametrageController extends ListPage
{
    /**
     *
     * @Route("/traitement/dads/decfor", name="seeDadsDecfor")
     */
    public function DadsDecforAction()
    {
        return $this->listChamp("Paramètrage DADS-U V08R10 / Déclaration des rubriques ou cumuls DADS-U / Formules de valorisation","traitement/dads/decfor/pdf",'214', '702', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/decfor/pdf", name="seeDadsDecforpdf")
     */
    public function DadsDecforPdfAction()
    {
        return $this->listChampPdf("Paramètrage DADS-U V08R10 / Déclaration des rubriques ou cumuls DADS-U / Formules de valorisation",'214', '702', "Traitement");
    }
}