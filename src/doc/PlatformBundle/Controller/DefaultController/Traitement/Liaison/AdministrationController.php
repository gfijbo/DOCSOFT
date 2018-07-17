<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Liaison;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class AdministrationController extends ListPage
{
    /**
     *
     * @Route("/traitement/liaison/adm", name="seeLiaisonAdm")
     */
    public function LiaisonAdmAction()
    {
        return $this->listChamp("Administration des fichiers","traitement/liaison/adm/pdf",'192', '658', "Traitement");
    }
    /**
     *
     * @Route("/traitement/liaison/adm/pdf", name="seeLiaisonAdmpdf")
     */
    public function LiaisonAdmPdfAction()
    {
        return $this->listChampPdf("Administration des fichiers",'192', '658', "Traitement");
    }
}