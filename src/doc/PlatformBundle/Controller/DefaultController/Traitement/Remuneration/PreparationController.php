<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class PreparationController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/ele", name="seeRemunerationPreEleEle")
     */
    public function RemunerationPreEleEleAction()
    {
        return $this->listChamp("Préparation de la paie / Eléments déconcentrés / Eléments par liste","traitement/remuneration/pre/ele/ele/pdf",'142', '490', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/ele/pdf", name="seeRemunerationPreEleElepdf")
     */
    public function RemunerationPreEleElePdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Eléments déconcentrés / Eléments par liste",'142', '490', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/val1", name="seeRemunerationPreEleVal1")
     */
    public function RemunerationPreEleVal1Action()
    {
        return $this->listChamp("Préparation de la paie / Eléments déconcentrés / Validation niv. 1 éléments déconcentrés","traitement/remuneration/pre/ele/val1/pdf",'142', '491', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/val1/pdf", name="seeRemunerationPreEleVal1pdf")
     */
    public function RemunerationPreEleVal1PdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Eléments déconcentrés / Validation niv. 1 éléments déconcentrés",'142', '491', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/val2", name="seeRemunerationPreEleVal2")
     */
    public function RemunerationPreEleVal2Action()
    {
        return $this->listChamp("Préparation de la paie / Eléments déconcentrés / Validation niv. 2 éléments déconcentrés","traitement/remuneration/pre/ele/val2/pdf",'142', '492', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/val2/pdf", name="seeRemunerationPreEleVal2pdf")
     */
    public function RemunerationPreEleVal2PdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Eléments déconcentrés / Validation niv. 2 éléments déconcentrés",'142', '492', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/bas", name="seeRemunerationPreEleBas")
     */
    public function RemunerationPreEleBasAction()
    {
        return $this->listChamp("Préparation de la paie / Eléments déconcentrés / Bascule éléments déconcentrés","traitement/remuneration/pre/ele/bas/pdf",'142', '493', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/bas/pdf", name="seeRemunerationPreEleBaspdf")
     */
    public function RemunerationPreEleBasPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Eléments déconcentrés / Bascule éléments déconcentrés",'142', '493', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/eleparlis", name="seeRemunerationPreEleparlis")
     */
    public function RemunerationPreEleparlisAction()
    {
        return $this->listChamp("Préparation de la paie / Eléments par liste","traitement/remuneration/pre/eleparlis/pdf",'142', '494', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/eleparlis/pdf", name="seeRemunerationPreEleparlispdf")
     */
    public function RemunerationPreEleparlisPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Eléments par liste",'142', '494', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/eleparlishis", name="seeRemunerationPreEleparlishis")
     */
    public function RemunerationPreEleparlishisAction()
    {
        return $this->listChamp("Préparation de la paie / Eléments par liste histo","traitement/remuneration/pre/eleparlishis/pdf",'142', '495', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/eleparlishis/pdf", name="seeRemunerationPreEleparlishispdf")
     */
    public function RemunerationPreEleparlishisPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Eléments par liste histo",'142', '495', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/heu", name="seeRemunerationPreHeu")
     */
    public function RemunerationPreHeuAction()
    {
        return $this->listChamp("Préparation de la paie / Heures supplémentaires","traitement/remuneration/pre/heu/pdf",'142', '496', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/heu/pdf", name="seeRemunerationPreHeupdf")
     */
    public function RemunerationPreHeuPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Heures supplémentaires",'142', '496', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/rapaut", name="seeRemunerationPreRapaut")
     */
    public function RemunerationPreRapautAction()
    {
        return $this->listChamp("Préparation de la paie / Rappels automatiques","traitement/remuneration/pre/rapaut/pdf",'142', '497', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/rapaut/pdf", name="seeRemunerationPreRapautpdf")
     */
    public function RemunerationPreRapautPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Rappels automatiques",'142', '497', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/rapind", name="seeRemunerationPreRapind")
     */
    public function RemunerationPreRapindAction()
    {
        return $this->listChamp("Préparation de la paie / Rappels individuels","traitement/remuneration/pre/rapind/pdf",'142', '498', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/rapind/pdf", name="seeRemunerationPreRapindpdf")
     */
    public function RemunerationPreRapindPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Rappels individuels",'142', '498', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/rapcol", name="seeRemunerationPreRapcol")
     */
    public function RemunerationPreRapcolAction()
    {
        return $this->listChamp("Préparation de la paie / Rappels collectifs","traitement/remuneration/pre/rapcol/pdf",'142', '499', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/rapcol/pdf", name="seeRemunerationPreRapcolpdf")
     */
    public function RemunerationPreRapcolPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Rappels collectifs",'142', '499', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/rapcot", name="seeRemunerationPreRapcot")
     */
    public function RemunerationPreRapcotAction()
    {
        return $this->listChamp("Préparation de la paie / Rappels cotisations","traitement/remuneration/pre/rapcot/pdf",'142', '500', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/rapcot/pdf", name="seeRemunerationPreRapcotpdf")
     */
    public function RemunerationPreRapcotPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Rappels cotisations",'142', '500', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/mes", name="seeRemunerationPreRapmes")
     */
    public function RemunerationPreRapmesAction()
    {
        return $this->listChamp("Préparation de la paie / Messages bulletins","traitement/remuneration/pre/mes/pdf",'142', '501', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/mes/pdf", name="seeRemunerationPreRapmespdf")
     */
    public function RemunerationPreRapmesPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Messages bulletins",'142', '501', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/ele", name="seeRemunerationPreEle")
     */
    public function RemunerationPreEleAction()
    {
        return $this->listChamp("Préparation de la paie / Elements variables","traitement/remuneration/pre/ele/pdf",'142', '502', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/ele/pdf", name="seeRemunerationPreElepdf")
     */
    public function RemunerationPreElePdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Elements variables",'142', '502', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/pre/tra", name="seeRemunerationPreTra")
     */
    public function RemunerationPreTraAction()
    {
        return $this->listChamp("Préparation de la paie / Traitement des Allocations Familiales","traitement/remuneration/pre/tra/pdf",'142', '503', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/pre/tra/pdf", name="seeRemunerationPreTrapdf")
     */
    public function RemunerationPreTraPdfAction()
    {
        return $this->listChampPdf("Préparation de la paie / Traitement des Allocations Familiales",'142', '503', "Traitement");
    }
}