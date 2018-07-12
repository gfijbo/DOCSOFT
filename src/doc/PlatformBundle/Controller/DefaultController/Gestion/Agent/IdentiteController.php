<?php
// src\doc\PlatformBundle\Controller\IdentiteController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class IdentiteController extends ListPage
{
    /**
     *
     * @Route("/gestion/identite/etatcivil", name="seeIdentiteEtatcivil")
     */
    public function IdentiteEtatcivilAction()
    {
        return $this->listChamp("Identité / Etat Civil","gestion/identite/etatcivil/pdf",'2', '2',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/etatcivil/pdf", name="seeIdentiteEtatcivilpdf")
     */
    public function IdentiteEtatcivilpdfAction()
    {
        return $this->listChampPdf("Identité / Etat Civil",'2', '2',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/repertoire", name="seeIdentiteRepertoire")
     */
    public function IdentiteRepertoireAction()
    {
        return $this->listChamp("Identité / Repertoire","gestion/identite/repertoire/pdf",'2', '13',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/repertoire/pdf", name="seeIdentiteRepertoirepdf")
     */
    public function IdentiteRepertoirepdfAction()
    {
        return $this->listChampPdf("Identité / Repertoire",'2', '13',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/domiciliations", name="seeIdentiteDomiciliations")
     */
    public function IdentiteDomiciliationsAction()
    {
        return $this->listChamp("Identité / Domiciliations","gestion/identite/domiciliations/pdf",'2', '14',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/domiciliations/pdf", name="seeIdentiteDomiciliationspdf")
     */
    public function IdentiteDomiciliationspdfAction()
    {
        return $this->listChampPdf("Identité / Domiciliations",'2', '14',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/enfants", name="seeIdentiteEnfants")
     */
    public function IdentiteEnfantsAction()
    {
        return $this->listChamp("Identité / Enfants","gestion/identite/enfants/pdf",'2', '15',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/enfants/pdf", name="seeIdentiteEnfantspdf")
     */
    public function IdentiteEnfantspdfAction()
    {
        return $this->listChampPdf("Identité / Enfants",'2', '15',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/conjoint", name="seeIdentiteConjoint")
     */
    public function IdentiteConjointAction()
    {
        return $this->listChamp("Identité / Conjoint","gestion/identite/conjoint/pdf",'2', '16',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/conjoint/pdf", name="seeIdentiteConjointpdf")
     */
    public function IdentiteConjointpdfAction()
    {
        return $this->listChampPdf("Identité / Conjoint",'2', '16',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/beneficiaire", name="seeIdentiteBeneficiaire")
     */
    public function IdentiteBeneficiaireAction()
    {
        return $this->listChamp("Identité / Beneficiaire","gestion/identite/beneficiaire/pdf",'2', '17',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/beneficiaire/pdf", name="seeIdentiteBeneficiairepdf")
     */
    public function IdentiteBeneficiairepdfAction()
    {
        return $this->listChampPdf("Identité / Beneficiaire",'2', '17',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/repleg", name="seeIdentiteRepLegal")
     */
    public function IdentiteRepLegalAction()
    {
        return $this->listChamp("Identité / Représentation Legal","gestion/identite/replegal/pdf",'2', '18',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/replegal/pdf", name="seeIdentiteRepLegalpdf")
     */
    public function IdentiteRepLegalpdfAction()
    {
        return $this->listChampPdf("Identité / Représentation Legal",'2', '18',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/competences", name="seeIdentiteCompetences")
     */
    public function IdentiteCompetencesAction()
    {
        return $this->listChamp("Identité / Compétences","gestion/identite/competences/pdf",'2', '19',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/competences/pdf", name="seeIdentiteCompetencespdf")
     */
    public function IdentiteCompetencespdfAction()
    {
        return $this->listChampPdf("Identité / Compétences",'2', '19',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/metiers", name="seeIdentiteMetiers")
     */
    public function IdentiteMetiersAction()
    {
        return $this->listChamp("Identité / Métiers","gestion/identite/metiers/pdf",'2', '20',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/metiers/pdf", name="seeIdentiteMetierspdf")
     */
    public function IdentiteMetierspdfAction()
    {
        return $this->listChampPdf("Identité / Métiers",'2', '20',"Gestion");
    }

    /**
     *
     * @Route("/gestion/identite/sitmil", name="seeIdentiteSitMilitaire")
     */
    public function IdentiteSitMilitaireAction()
    {
        return $this->listChamp("Identité / Sit. militaire","gestion/identite/sitmil/pdf",'2', '21',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/sitmil/pdf", name="seeIdentiteSitMilitairepdf")
     */
    public function IdentiteSitMilitairepdfAction()
    {
        return $this->listChampPdf("Identité / Sit. militaire",'2', '21',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/handicaps", name="seeIdentiteHandicaps")
     */
    public function IdentiteHandicapsAction()
    {
        return $this->listChamp("Identité / Handicaps","gestion/identite/handicaps/pdf",'2', '22',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/handicaps/pdf", name="seeIdentiteHandicapspdf")
     */
    public function IdentiteHandicapspdfAction()
    {
        return $this->listChampPdf("Identité / Handicaps",'2', '22',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/resapt", name="seeIdentiteResApt")
     */
    public function IdentiteResAptAction()
    {
        return $this->listChamp("Identité / Réserve d'aptitude","gestion/identite/resapt/pdf",'2', '23',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/resapt/pdf", name="seeIdentiteResAptpdf")
     */
    public function IdentiteResAptpdfAction()
    {
        return $this->listChampPdf("Identité / Réserve d'aptitude",'2', '23',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/mensurations", name="seeIdentiteMensurations")
     */
    public function IdentiteMensAction()
    {
        return $this->listChamp("Identité / Mensurations","gestion/identite/mensurations/pdf",'2', '24',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/mensurations/pdf", name="seeIdentiteMensurationspdf")
     */
    public function IdentiteMenspdfAction()
    {
        return $this->listChampPdf("Identité / Mensurations",'2', '24',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/infallfam", name="seeIdentiteInfAlocF")
     */
    public function IdentiteInfAlocFAction()
    {
        return $this->listChamp("Identité / Informations Allocations Familiales","gestion/identite/infallfam/pdf",'2', '25',"Gestion");
    }
    /**
     *
     * @Route("/gestion/identite/infallfam/pdf", name="seeIdentiteInfAlocFpdf")
     */
    public function IdentiteInfAlocFpdfAction()
    {
        return $this->listChampPdf("Identité / Informations Allocations Familiales",'2', '25',"Gestion");
    }
}