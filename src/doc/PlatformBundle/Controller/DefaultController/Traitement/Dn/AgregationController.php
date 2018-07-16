<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dn;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class AgregationController extends ListPage
{
    /**
     *
     * @Route("/traitement/dn/agr", name="seeDnAgr")
     */
    public function DnAgrAction()
    {
        return $this->listChamp("Agrégation des fichiers DN-AC","traitement/dn/agr/pdf",'220', '725', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dn/agr/pdf", name="seeDnAgrpdf")
     */
    public function DnAgrPdfAction()
    {
        return $this->listChampPdf("Agrégation des fichiers DN-AC",'220', '725', "Traitement");
    }
}