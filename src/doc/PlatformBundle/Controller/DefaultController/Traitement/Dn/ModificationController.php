<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dn;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ModificationController extends ListPage
{
    /**
     *
     * @Route("/traitement/dn/mod", name="seeDnMod")
     */
    public function DnModAction()
    {
        return $this->listChamp("Modification des données extraites","traitement/dn/mod/pdf",'218', '723', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dn/mod/pdf", name="seeDnModpdf")
     */
    public function DnModPdfAction()
    {
        return $this->listChampPdf("Modification des données extraites",'218', '723', "Traitement");
    }
}