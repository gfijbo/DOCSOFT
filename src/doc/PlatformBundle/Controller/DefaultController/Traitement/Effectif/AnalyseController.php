<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Effectif;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class AnalyseController extends ListPage
{
    /**
     *
     * @Route("/traitement/effectif/ana/car", name="seeEffectifAnaCar")
     */
    public function EffectifAnaCarAction()
    {
        return $this->listChamp("Analyse / Cartographie","traitement/effectif/ana/car/pdf",'202', '666', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/ana/car/pdf", name="seeEffectifAnaCarpdf")
     */
    public function EffectifAnaCarPdfAction()
    {
        return $this->listChampPdf("Analyse / Cartographie",'202', '666', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/ana/conpos", name="seeEffectifAnaConpos")
     */
    public function EffectifAnaConposAction()
    {
        return $this->listChamp("Analyse / Consultation Postes","traitement/effectif/ana/conpos/pdf",'202', '667', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/ana/conpos/pdf", name="seeEffectifAnaConpospdf")
     */
    public function EffectifAnaConposPdfAction()
    {
        return $this->listChampPdf("Analyse / Consultation Postes",'202', '667', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/ana/conemp", name="seeEffectifAnaConemp")
     */
    public function EffectifAnaConempAction()
    {
        return $this->listChamp("Analyse / Consultation Emplois budget","traitement/effectif/ana/conemp/pdf",'202', '668', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/ana/conemp/pdf", name="seeEffectifAnaConemppdf")
     */
    public function EffectifAnaConempPdfAction()
    {
        return $this->listChampPdf("Analyse / Consultation Emplois budget",'202', '668', "Traitement");
    }
}