<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dsn;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class TraitementController extends ListPage
{
    /**
     *
     * @Route("/traitement/dsn/tra", name="seeDsnTra")
     */
    public function DsnTraAction()
    {
        return $this->listChamp("Traitement","traitement/dsn/tra/pdf",'209', '683', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dsn/tra/pdf", name="seeDsnTrapdf")
     */
    public function DsnTraPdfAction()
    {
        return $this->listChampPdf("Traitement",'209', '683', "Traitement");
    }
}