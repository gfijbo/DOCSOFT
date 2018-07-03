<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\General;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OrganismeController extends ListPage
{
    /**
     *
     * @Route("/referentiel/general/organisme/org", name="seeGeneralOrganismeOrg")
     */
    public function GeneralOrganismeOrgAction()
    {
        return $this->listChamp("Organisme / Organisme","referentiel/general/organisme/org/pdf",'15', '91', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/org/pdf", name="seeGeneralOrganismeOrgpdf")
     */
    public function GeneralOrganismeOrgPdfAction()
    {
        return $this->listChampPdf("Organisme / Organisme",'15', '91', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/typorg", name="seeGeneralOrganismeTypOrg")
     */
    public function GeneralOrganismeTypOrgAction()
    {
        return $this->listChamp("Organisme / Type organisme","referentiel/general/organisme/typorg/pdf",'15', '92', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/typorg/pdf", name="seeGeneralOrganismeTypOrgpdf")
     */
    public function GeneralOrganismeTypOrgPdfAction()
    {
        return $this->listChampPdf("Organisme / Type organisme",'15', '92', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/orginf", name="seeGeneralOrganismeOrginf")
     */
    public function GeneralOrganismeOrginfAction()
    {
        return $this->listChamp("Organisme / Organisme (informations complémentaires)","referentiel/general/organisme/orginf/pdf",'15', '93', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/orginf/pdf", name="seeGeneralOrganismeOrginfpdf")
     */
    public function GeneralOrganismeOrginfPdfAction()
    {
        return $this->listChampPdf("Organisme / Organisme (informations complémentaires)",'15', '93', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/str", name="seeGeneralOrganismeStr")
     */
    public function GeneralOrganismeStrAction()
    {
        return $this->listChamp("Organisme / Structures Historisées","referentiel/general/organisme/str/pdf",'15', '94', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/str/pdf", name="seeGeneralOrganismeStrpdf")
     */
    public function GeneralOrganismeStrPdfAction()
    {
        return $this->listChampPdf("Organisme / Structures Historisées",'15', '94', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/arb", name="seeGeneralOrganismeArb")
     */
    public function GeneralOrganismeArbAction()
    {
        return $this->listChamp("Organisme / Arborescences des structures","referentiel/general/organisme/arb/pdf",'15', '95', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/arb/pdf", name="seeGeneralOrganismeArbpdf")
     */
    public function GeneralOrganismeArbPdfAction()
    {
        return $this->listChampPdf("Organisme / Arborescences des structures",'15', '95', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/niv", name="seeGeneralOrganismeNiv")
     */
    public function GeneralOrganismeNivAction()
    {
        return $this->listChamp("Organisme / Niveaux des structures","referentiel/general/organisme/niv/pdf",'15', '96', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/niv/pdf", name="seeGeneralOrganismeNivpdf")
     */
    public function GeneralOrganismeNivPdfAction()
    {
        return $this->listChampPdf("Organisme / Niveaux des structures",'15', '96', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/mod", name="seeGeneralOrganismeMod")
     */
    public function GeneralOrganismeModAction()
    {
        return $this->listChamp("Organisme / Modes de paiement","referentiel/general/organisme/mod/pdf",'15', '97', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/mod/pdf", name="seeGeneralOrganismeModpdf")
     */
    public function GeneralOrganismeModPdfAction()
    {
        return $this->listChampPdf("Organisme / Modes de paiement",'15', '97', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/sec", name="seeGeneralOrganismeSec")
     */
    public function GeneralOrganismeSecAction()
    {
        return $this->listChamp("Organisme / Secteurs","referentiel/general/organisme/sec/pdf",'15', '98', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/sec/pdf", name="seeGeneralOrganismeSecpdf")
     */
    public function GeneralOrganismeSecPdfAction()
    {
        return $this->listChampPdf("Organisme / Secteurs",'15', '98', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/typbud", name="seeGeneralOrganismeTypbud")
     */
    public function GeneralOrganismeTypbudAction()
    {
        return $this->listChamp("Organisme / Types de budget","referentiel/general/organisme/typbud/pdf",'15', '99', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/typbud/pdf", name="seeGeneralOrganismeTypbudpdf")
     */
    public function GeneralOrganismeTypbudPdfAction()
    {
        return $this->listChampPdf("Organisme / Types de budget",'15', '99', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/bud", name="seeGeneralOrganismeBud")
     */
    public function GeneralOrganismeBudAction()
    {
        return $this->listChamp("Organisme / Budgets","referentiel/general/organisme/bud/pdf",'15', '100', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/bud/pdf", name="seeGeneralOrganismeBudpdf")
     */
    public function GeneralOrganismeBudPdfAction()
    {
        return $this->listChampPdf("Organisme / Budgets",'15', '100', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/exe", name="seeGeneralOrganismeExe")
     */
    public function GeneralOrganismeExeAction()
    {
        return $this->listChamp("Organisme / Exercices","referentiel/general/organisme/exe/pdf",'15', '101', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/exe/pdf", name="seeGeneralOrganismeExepdf")
     */
    public function GeneralOrganismeExePdfAction()
    {
        return $this->listChampPdf("Organisme / Exercices",'15', '101', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/ind/def", name="seeGeneralOrganismeIndDef")
     */
    public function GeneralOrganismeIndDefAction()
    {
        return $this->listChamp("Organisme / Indicateurs organisme / Définition indicateurs","referentiel/general/organisme/ind/def/pdf",'15', '102', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/ind/def/pdf", name="seeGeneralOrganismeIndDefpdf")
     */
    public function GeneralOrganismeIndDefPdfAction()
    {
        return $this->listChampPdf("Organisme / Indicateurs organisme / Définition indicateurs",'15', '102', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/ind/sai", name="seeGeneralOrganismeIndSai")
     */
    public function GeneralOrganismeIndSaiAction()
    {
        return $this->listChamp("Organisme / Indicateurs organisme / Saisie des indicateurs","referentiel/general/organisme/ind/sai/pdf",'15', '103', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/ind/sai/pdf", name="seeGeneralOrganismeIndSaipdf")
     */
    public function GeneralOrganismeIndSaiPdfAction()
    {
        return $this->listChampPdf("Organisme / Indicateurs organisme / Saisie des indicateurs",'15', '103', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/organisme/ind/val", name="seeGeneralOrganismeIndVal")
     */
    public function GeneralOrganismeIndValAction()
    {
        return $this->listChamp("Organisme / Indicateurs organisme /  Valeurs indicateurs","referentiel/general/organisme/ind/val/pdf",'15', '104', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/organisme/ind/val/pdf", name="seeGeneralOrganismeIndValpdf")
     */
    public function GeneralOrganismeIndValPdfAction()
    {
        return $this->listChampPdf("Organisme / Indicateurs organisme /  Valeurs indicateurs",'15', '104', "Référentiel");
    }
}