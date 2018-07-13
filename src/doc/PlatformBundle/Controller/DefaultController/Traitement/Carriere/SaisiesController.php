<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class SaisiesController extends ListPage
{
    /**
     *
     * @Route("/traitement/carriere/sai/con/proava", name="seeCarriereSaiProava")
     */
    public function CarriereSaiProavaAction()
    {
        return $this->listChamp("Saisies / Consultations / Propositions d'avancements","/traitement/carriere/sai/con/proava/pdf",'126', '414', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/proava/pdf", name="seeCarriereSaiProavapdf")
     */
    public function CarriereSaiProavaPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Propositions d'avancements",'126', '414', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/promed", name="seeCarriereSaiPromed")
     */
    public function CarriereSaiPromedAction()
    {
        return $this->listChamp("Saisies / Consultations / Proposition de Médailles","/traitement/carriere/sai/con/promed/pdf",'126', '415', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/promed/pdf", name="seeCarriereSaiPromedpdf")
     */
    public function CarriereSaiPromedPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Proposition de Médailles",'126', '415', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/inv", name="seeCarriereSaiInv")
     */
    public function CarriereSaiInvAction()
    {
        return $this->listChamp("Saisies / Consultations / Invalidation Echelons","/traitement/carriere/sai/con/inv/pdf",'126', '416', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/inv/pdf", name="seeCarriereSaiInvpdf")
     */
    public function CarriereSaiInvPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Invalidation Echelons",'126', '416', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/sai", name="seeCarriereSaiSai")
     */
    public function CarriereSaiSaiAction()
    {
        return $this->listChamp("Saisies / Consultations / Saisie des notes","/traitement/carriere/sai/con/sai/pdf",'126', '417', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/sai/pdf", name="seeCarriereSaiSaipdf")
     */
    public function CarriereSaiSaiPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Saisie des notes",'126', '417', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/quores", name="seeCarriereSaiQuo")
     */
    public function CarriereSaiQuoAction()
    {
        return $this->listChamp("Saisies / Consultations / Quotas Résultats","/traitement/carriere/sai/con/quores/pdf",'126', '418', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/quo/pdf", name="seeCarriereSaiQuopdf")
     */
    public function CarriereSaiQuoPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Quotas Résultats",'126', '418', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/quopri", name="seeCarriereSaiQuopri")
     */
    public function CarriereSaiQuoPriAction()
    {
        return $this->listChamp("Saisies / Consultations / Quotas Prises en compte","/traitement/carriere/sai/con/quopri/pdf",'126', '419', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/quopri/pdf", name="seeCarriereSaiQuopripdf")
     */
    public function CarriereSaiQuoPriPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Quotas Prises en compte",'126', '419', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/sui", name="seeCarriereSaiSui")
     */
    public function CarriereSaiSuiAction()
    {
        return $this->listChamp("Saisies / Consultations / Suivi des arrêtés","/traitement/carriere/sai/con/sui/pdf",'126', '420', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/sui/pdf", name="seeCarriereSaiSuipdf")
     */
    public function CarriereSaiSuiPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Suivi des arrêtés",'126', '420', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/arr", name="seeCarriereSaiArr")
     */
    public function CarriereSaiArrAction()
    {
        return $this->listChamp("Saisies / Consultations / Arrêtés avancement","/traitement/carriere/sai/con/arr/pdf",'126', '421', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/arr/pdf", name="seeCarriereSaiArrpdf")
     */
    public function CarriereSaiArrPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations / Arrêtés avancement",'126', '421', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/mis", name="seeCarriereSaiMis")
     */
    public function CarriereSaiMisAction()
    {
        return $this->listChamp("Saisies / Consultations /  Mise à jour des indices","/traitement/carriere/sai/con/mis/pdf",'126', '422', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/mis/pdf", name="seeCarriereSaiMispdf")
     */
    public function CarriereSaiMisPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations /  Mise à jour des indices",'126', '422', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/probon", name="seeCarriereSaiProBon")
     */
    public function CarriereSaiProBonAction()
    {
        return $this->listChamp("Saisies / Consultations /  Propositions de bonifications hospitalières","/traitement/carriere/sai/con/probon/pdf",'126', '423', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/probon/pdf", name="seeCarriereSaiProBonpdf")
     */
    public function CarriereSaiProBonPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations /  Propositions de bonifications hospitalières",'126', '423', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/dem", name="seeCarriereSaiDem")
     */
    public function CarriereSaiDemAction()
    {
        return $this->listChamp("Saisies / Consultations /  Demandes de modifications d'affectations","/traitement/carriere/sai/con/dem/pdf",'126', '424', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/con/dem/pdf", name="seeCarriereSaiDempdf")
     */
    public function CarriereSaiDemPdfAction()
    {
        return $this->listChampPdf("Saisies / Consultations /  Demandes de modifications d'affectations",'126', '424', "Traitement");
    }
}