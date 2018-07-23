<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class EditionsRefController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/ediref/bar", name="seeRemunerationEdirefBar")
     */
    public function RemunerationEdirefBarAction()
    {
        return $this->listChamp("Editions référentiel / Barêmes paie","traitement/remuneration/ediref/bar/pdf",'152', '576', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ediref/bar/pdf", name="seeRemunerationEdirefBarpdf")
     */
    public function RemunerationEdirefBarPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Barêmes paie",'152', '576', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/ediref/equ", name="seeRemunerationEdirefEqu")
     */
    public function RemunerationEdirefEquAction()
    {
        return $this->listChamp("Editions référentiel / Equivalences rémunération","traitement/remuneration/ediref/equ/pdf",'152', '577', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ediref/equ/pdf", name="seeRemunerationEdirefEqupdf")
     */
    public function RemunerationEdirefEquPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Equivalences rémunération",'152', '577', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/ediref/rubpai", name="seeRemunerationEdirefRubpai")
     */
    public function RemunerationEdirefRubpaiAction()
    {
        return $this->listChamp("Editions référentiel / Rubriques paie","traitement/remuneration/ediref/rubpai/pdf",'152', '578', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ediref/rubpai/pdf", name="seeRemunerationEdirefRubpaipdf")
     */
    public function RemunerationEdirefRubpaiPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Rubriques paie",'152', '578', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/ediref/rubaut", name="seeRemunerationEdirefRubaut")
     */
    public function RemunerationEdirefRubautAction()
    {
        return $this->listChamp("Editions référentiel / Rubriques automatiques","traitement/remuneration/ediref/rubaut/pdf",'152', '579', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ediref/rubaut/pdf", name="seeRemunerationEdirefRubautpdf")
     */
    public function RemunerationEdirefRubautPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Rubriques automatiques",'152', '579', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/ediref/rubcot", name="seeRemunerationEdirefRubcot")
     */
    public function RemunerationEdirefRubcotAction()
    {
        return $this->listChamp("Editions référentiel / Rubriques cotisations","traitement/remuneration/ediref/rubcot/pdf",'152', '580', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ediref/rubcot/pdf", name="seeRemunerationEdirefRubcotpdf")
     */
    public function RemunerationEdirefRubcotPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Rubriques cotisations",'152', '580', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/ediref/ech", name="seeRemunerationEdirefEch")
     */
    public function RemunerationEdirefEchAction()
    {
        return $this->listChamp("Editions référentiel / Echelles indiciaires","traitement/remuneration/ediref/ech/pdf",'152', '581', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ediref/ech/pdf", name="seeRemunerationEdirefEchpdf")
     */
    public function RemunerationEdirefEchPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Echelles indiciaires",'152', '581', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/ediref/ind", name="seeRemunerationEdirefInd")
     */
    public function RemunerationEdirefIndAction()
    {
        return $this->listChamp("Editions référentiel / Indices bruts majorés","traitement/remuneration/ediref/ind/pdf",'152', '582', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ediref/ind/pdf", name="seeRemunerationEdirefIndpdf")
     */
    public function RemunerationEdirefIndPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Indices bruts majorés",'152', '582', "Traitement");
    }
}