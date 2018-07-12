<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Anteriorite;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ParametrageController extends ListPage
{
    /**
     *
     * @Route("/traitement/anteriorite/par/par", name="seeAnterioriteParPar")
     */
    public function AnterioriteParParAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Paramètres Antériorité (ANT)","traitement/anteriorite/par/par/pdf",'240', '753', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/par/pdf", name="seeAnterioriteParParpdf")
     */
    public function AnterioriteParParPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Paramètres Antériorité (ANT)",'240', '753', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/eme", name="seeAnterioriteParEme")
     */
    public function AnterioriteParEmeAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Emetteurs","traitement/anteriorite/par/eme/pdf",'240', '754', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/eme/pdf", name="seeAnterioriteParEmepdf")
     */
    public function AnterioriteParEmePdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Emetteurs",'240', '754', "Traitement");
    }
}