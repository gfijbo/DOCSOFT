<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Editions;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class RemunerationController extends ListPage
{
    /**
     *
     * @Route("/traitement/editions/rem/bar", name="seeEditionsRemBar")
     */
    public function EditionsRemBarAction()
    {
        return $this->listChamp("Rémunération / Barêmes paie","traitement/editions/rem/bar/pdf",'166', '628', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/rem/bar/pdf", name="seeEditionsRemBarpdf")
     */
    public function EditionsRemBarPdfAction()
    {
        return $this->listChampPdf("Rémunération / Barêmes paie",'166', '628', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/rem/con", name="seeEditionsRemCon")
     */
    public function EditionsRemConAction()
    {
        return $this->listChamp("Rémunération / Equivalences rémunération","traitement/editions/rem/con/pdf",'166', '629', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/rem/con/pdf", name="seeEditionsRemConpdf")
     */
    public function EditionsRemConPdfAction()
    {
        return $this->listChampPdf("Rémunération / Equivalences rémunération",'166', '629', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/rem/rubpai", name="seeEditionsRemRubpai")
     */
    public function EditionsRemRubpaiAction()
    {
        return $this->listChamp("Rémunération / Rubriques de paie","traitement/editions/rem/rubpai/pdf",'166', '630', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/rem/rubpai/pdf", name="seeEditionsRemRubpaipdf")
     */
    public function EditionsRemRubpaiPdfAction()
    {
        return $this->listChampPdf("Rémunération / Rubriques de paie",'166', '630', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/rem/rubaut", name="seeEditionsRemRubaut")
     */
    public function EditionsRemRubautAction()
    {
        return $this->listChamp("Rémunération / Rubriques automatique","traitement/editions/rem/rubaut/pdf",'166', '631', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/rem/rubaut/pdf", name="seeEditionsRemRubautpdf")
     */
    public function EditionsRemRubautPdfAction()
    {
        return $this->listChampPdf("Rémunération / Rubriques automatique",'166', '631', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/rem/rubcot", name="seeEditionsRemRubcot")
     */
    public function EditionsRemRubcotAction()
    {
        return $this->listChamp("Rémunération / Rubriques cotisations","traitement/editions/rem/rubcot/pdf",'166', '632', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/rem/rubcot/pdf", name="seeEditionsRemRubcotpdf")
     */
    public function EditionsRemRubcotPdfAction()
    {
        return $this->listChampPdf("Rémunération / Rubriques cotisations",'166', '632', "Traitement");
    }
}