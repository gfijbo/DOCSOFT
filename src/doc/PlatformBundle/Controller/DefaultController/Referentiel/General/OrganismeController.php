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
}