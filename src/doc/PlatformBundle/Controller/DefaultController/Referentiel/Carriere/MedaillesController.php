<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MedaillesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/med/sancodmed", name="seeCarriereMedSancodmed")
     */
    public function CarriereMedSancodmedAction()
    {
        return $this->listChamp("Médailles / sanctions / Codes médailles","referentiel/carriere/med/sancodmed/pdf",'26', '140', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/med/sancodmed/pdf", name="seeCarriereMedSancodmedpdf")
     */
    public function CarriereMedSancodmedPdfAction()
    {
        return $this->listChampPdf("Médailles / sanctions / Codes médailles",'26', '140', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/med/sanmot", name="seeCarriereMedSanmot")
     */
    public function CarriereMedSanmotAction()
    {
        return $this->listChamp("Médailles / sanctions / Motifs refus médailles","referentiel/carriere/med/sanmot/pdf",'26', '141', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/med/sanmot/pdf", name="seeCarriereMedSanmotpdf")
     */
    public function CarriereMedSanmotPdfAction()
    {
        return $this->listChampPdf("Médailles / sanctions / Motifs refus médailles",'26', '141', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/med/sancodsan", name="seeCarriereMedSancodsan")
     */
    public function CarriereMedSancodsanAction()
    {
        return $this->listChamp("Médailles / sanctions / Codes sanction","referentiel/carriere/med/sancodsan/pdf",'26', '142', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/med/sancodsan/pdf", name="seeCarriereMedSancodsanpdf")
     */
    public function CarriereMedSancodsanPdfAction()
    {
        return $this->listChampPdf("Médailles / sanctions / Codes sanction",'26', '142', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/med/sancodrad", name="seeCarriereMedSancodrad")
     */
    public function CarriereMedSancodradAction()
    {
        return $this->listChamp("Médailles / sanctions / Codes radiation","referentiel/carriere/med/sancodrad/pdf",'26', '143', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/med/sancodrad/pdf", name="seeCarriereMedSancodradpdf")
     */
    public function CarriereMedSancodradPdfAction()
    {
        return $this->listChampPdf("Médailles / sanctions / Codes radiation",'26', '143', "Référentiel");
    }
}