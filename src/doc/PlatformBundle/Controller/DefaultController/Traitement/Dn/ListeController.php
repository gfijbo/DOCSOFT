<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dn;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ListeController extends ListPage
{
    /**
     *
     * @Route("/traitement/dn/lis", name="seeDnLis")
     */
    public function DnLisAction()
    {
        return $this->listChamp("Liste des fichiers DN-AC (AED)","traitement/dn/lis/pdf",'219', '724', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dn/lis/pdf", name="seeDnLispdf")
     */
    public function DnLisPdfAction()
    {
        return $this->listChampPdf("Liste des fichiers DN-AC (AED)",'219', '724', "Traitement");
    }
}