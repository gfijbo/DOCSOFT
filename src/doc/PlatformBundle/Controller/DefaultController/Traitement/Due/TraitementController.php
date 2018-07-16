<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Due;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class TraitementController extends ListPage
{
    /**
     *
     * @Route("/traitement/due/tra", name="seeDueTra")
     */
    public function DueTraAction()
    {
        return $this->listChamp("Traitement DUE","traitement/due/tra/pdf",'238', '752', "Traitement");
    }
    /**
     *
     * @Route("/traitement/due/tra/pdf", name="seeDueTrapdf")
     */
    public function DueTraPdfAction()
    {
        return $this->listChampPdf("Traitement DUE",'238', '752', "Traitement");
    }
}