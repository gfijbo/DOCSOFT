<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dsn;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ReferentielController extends ListPage
{
    /**
     *
     * @Route("/traitement/dsn/refver", name="seeDsnRefver")
     */
    public function DsnRefverAction()
    {
        return $this->listChamp("Référentiel / Versements et Bordereaux","/traitement/dsn/refver/pdf",'208', '682', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dsn/refver/pdf", name="seeDsnRefverpdf")
     */
    public function DsnRefverPdfAction()
    {
        return $this->listChampPdf("Référentiel / Versements et Bordereaux",'208', '682', "Traitement");
    }
}