<?php
// src\doc\PlatformBundle\Controller\CarriereController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class CarriereController extends ListPage
{
    /**
     *
     * @Route("/gestion/carriere/situation", name="seeCarriereSituation")
     */
    public function CarriereSituationAction()
    {
       return $this->listChamp("Carrière / Situation","gestion/carriere/situation/pdf",'4', '6', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/situation/pdf", name="seeCarriereSituationpdf")
     */
    public function CarriereSituationPdfAction()
    {
        return $this->listChampPdf("Carrière / Situation",'4', '6', "Gestion");
    }

    /**
     *
     * @Route("/gestion/carriere/contrat", name="seeCarriereContrat")
     */
    public function CarriereContratAction()
    {
        return $this->listChamp("Carrière / Contrat","gestion/carriere/contrat/pdf",'4', '33', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/contrat/pdf", name="seeCarriereContratpdf")
     */
    public function CarriereContratPdfAction()
    {
        return $this->listChampPdf("Carrière / Contrat",'4', '33', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/notation", name="seeCarriereNotation")
     */
    public function CarriereNotationAction()
    {
        return $this->listChamp("Carrière / Notation","gestion/carriere/notation/pdf",'4', '34', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/notation/pdf", name="seeCarriereNotationpdf")
     */
    public function CarriereNotationPdfAction()
    {
        return $this->listChampPdf("Carrière / Notation",'4', '34', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/proava", name="seeCarriereProava")
     */
    public function CarriereProavaAction()
    {
        return $this->listChamp("Carrière / Propositions avancement","gestion/carriere/proava/pdf",'4', '35', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/proava/pdf", name="seeCarriereProavapdf")
     */
    public function CarriereProavaPdfAction()
    {
        return $this->listChampPdf("Carrière / Propositions avancement",'4', '35', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/arrava", name="seeCarriereArrava")
     */
    public function CarriereArravaAction()
    {
        return $this->listChamp("Carrière / Arretés d'avancements","gestion/carriere/arrava/pdf",'4', '36', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/arrava/pdf", name="seeCarriereArravapdf")
     */
    public function CarriereArravaPdfAction()
    {
        return $this->listChampPdf("Carrière / Arretés d'avancements",'4', '36', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/demandes", name="seeCarriereDemandes")
     */
    public function CarriereDemandesAction()
    {
        return $this->listChamp("Carrière / Demandes","gestion/carriere/demandes/pdf",'4', '37', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/demandes/pdf", name="seeCarriereDemandespdf")
     */
    public function CarriereDemandesPdfAction()
    {
        return $this->listChampPdf("Carrière / Notation",'4', '37', "Gestion");
    }
    
    /**
     *
     * @Route("/gestion/carriere/demtempar", name="seeCarriereDemtempar")
     */
    public function CarriereDemtemparAction()
    {
        return $this->listChamp("Carrière / Demande de temps partiel","gestion/carriere/demtempar/pdf",'4', '38', "Gestion");
    }
    
    /**
     *
     * @Route("/gestion/carriere/demtempar/pdf", name="seeCarriereDemtemparpdf")
     */
    public function CarriereDemtemparPdfAction()
    {
        return $this->listChampPdf("Carrière / Demande de temps partiel",'4', '38', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/vismed", name="seeCarriereVismed")
     */
    public function CarriereVismedAction()
    {
        return $this->listChamp("Carrière / Visites médicales","gestion/carriere/vismed/pdf",'4', '39', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/vismed/pdf", name="seeCarriereVismedpdf")
     */
    public function CarriereVismedPdfAction()
    {
        return $this->listChampPdf("Carrière / Visites médicales",'4', '39', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/vaccination", name="seeCarriereVaccination")
     */
    public function CarriereVaccinationAction()
    {
        return $this->listChamp("Carrière / Vaccination","gestion/carriere/vaccination/pdf",'4', '40', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/vaccination/pdf", name="seeCarriereVaccinationpdf")
     */
    public function CarriereVaccinationPdfAction()
    {
        return $this->listChampPdf("Carrière / Vaccination",'4', '40', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/historique", name="seeCarriereHistorique")
     */
    public function CarriereHistoriqueAction()
    {
        return $this->listChamp("Carrière / Historique","gestion/carriere/historique/pdf",'4', '41', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/historique/pdf", name="seeCarriereHistoriquepdf")
     */
    public function CarriereHistoriquePdfAction()
    {
        return $this->listChampPdf("Carrière / Historique",'4', '41', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/hiseve", name="seeCarriereHiseve")
     */
    public function CarriereHiseveAction()
    {
        return $this->listChamp("Carrière / Historique évènements","gestion/carriere/hiseve/pdf",'4', '42', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/hiseve/pdf", name="seeCarriereHisevepdf")
     */
    public function CarriereHisevePdfAction()
    {
        return $this->listChampPdf("Carrière / Historique évènements",'4', '42', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/medaille", name="seeCarriereMedaille")
     */
    public function CarriereMedailleAction()
    {
        return $this->listChamp("Carrière / Médaille","gestion/carriere/medaille/pdf",'4', '43', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/medaille/pdf", name="seeCarriereMedaillepdf")
     */
    public function CarriereMedaillePdfAction()
    {
        return $this->listChampPdf("Carrière / Médaille",'4', '43', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/infmed", name="seeCarriereInfmed")
     */
    public function CarriereInfmedAction()
    {
        return $this->listChamp("Carrière / Infos médaille","gestion/carriere/infmed/pdf",'4', '44', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/infmed/pdf", name="seeCarriereInfmedpdf")
     */
    public function CarriereInfmedPdfAction()
    {
        return $this->listChampPdf("Carrière / Infos médaille",'4', '44', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/sanction", name="seeCarriereSanction")
     */
    public function CarriereSanctionAction()
    {
        return $this->listChamp("Carrière / Sanction","gestion/carriere/sanction/pdf",'4', '45', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/sanction/pdf", name="seeCarriereSanctionpdf")
     */
    public function CarriereSanctionPdfAction()
    {
        return $this->listChampPdf("Carrière / Sanction",'4', '45', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/doucar", name="seeCarriereDoucar")
     */
    public function CarriereDoucarAction()
    {
        return $this->listChamp("Carrière / Double carrière","gestion/carriere/doucar/pdf",'4', '46', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/doucar/pdf", name="seeCarriereDoucarpdf")
     */
    public function CarriereDoucarPdfAction()
    {
        return $this->listChampPdf("Carrière / Double carrière",'4', '46', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/chreve", name="seeCarriereChreve")
     */
    public function CarriereChreveAction()
    {
        return $this->listChamp("Carrière / Chronologie des évènements","gestion/carriere/chreve/pdf",'4', '47', "Gestion");
    }
    /**
     *
     * @Route("/gestion/carriere/chreve/pdf", name="seeCarriereChrevepdf")
     */
    public function CarriereChrevePdfAction()
    {
        return $this->listChampPdf("Carrière / Chronologie des évènements",'4', '47', "Gestion");
    }
}