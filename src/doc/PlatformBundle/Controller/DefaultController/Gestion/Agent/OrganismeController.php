<?php
// src\doc\PlatformBundle\Controller\OrganismeController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OrganismeController extends ListPage
{
    /**
     *
     * @Route("/gestion/organisme/agent", name="seeOrganismeAgent")
     */
    public function OrganismeAgentAction()
    {
        return $this->listChamp("Organisme / Agent","gestion/organisme/agent/pdf",'3', '4',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/agent/pdf", name="seeOrganismeAgentpdf")
     */
    public function OrganismeAgentPdfAction()
    {
        return $this->listChampPdf("Organisme / Agent",'3', '4',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/affectation", name="seeOrganismeAffectation")
     */
    public function OrganismeAffectationAction()
    {
        return $this->listChamp("Organisme / Affectation","gestion/organisme/affectation/pdf",'3', '5',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/affectation/pdf", name="seeOrganismeAffectationpdf")
     */
    public function OrganismeAffectationPdfAction()
    {
        return $this->listChampPdf("Organisme / Affectation",'3', '5',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/demmodaff", name="seeDemModAff")
     */
    public function OrganismeDemModAffAction()
    {
        return $this->listChamp("Organisme / Demandes de modifications d'affectations","gestion/organisme/demmodaff/pdf",'3', '26',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/demmodaff/pdf", name="seeOrganismeDemModAffpdf")
     */
    public function OrganismeDemModAffPdfAction()
    {
        return $this->listChampPdf("Organisme / Demandes de modifications d'affectations",'3', '26',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/contrat", name="seeOrgCon")
     */
    public function OrganismeContratAction()
    {
        return $this->listChamp("Organisme / Contrat","gestion/organisme/contrat/pdf",'3', '27',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/contrat/pdf", name="seeOrgConpdf")
     */
    public function OrganismeContratPdfAction()
    {
        return $this->listChampPdf("Organisme / Contrat",'3', '27',"Gestion");

    }
    /**
     *
     * @Route("/gestion/organisme/remplacements", name="seeOrganismeRemplacements")
     */
    public function OrganismeRemplacementsAction()
    {
        return $this->listChamp("Organisme / Remplacements","gestion/organisme/remplacements/pdf",'3', '28',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/remplacements/pdf", name="seeOrganismeRemplacementspdf")
     */
    public function OrganismeRemplacementsPdfAction()
    {
        return $this->listChampPdf("Organisme / Remplacements",'3', '28',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/infpru", name="seeOrganismeInfPru")
     */
    public function OrganismeInfPruAction()
    {
        return $this->listChamp("Organisme / Information Prud'homme","gestion/organisme/infpru/pdf",'3', '29',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/infpru/pdf", name="seeOrganismeInfPrupdf")
     */
    public function OrganismeInfPruPdfAction()
    {
        return $this->listChampPdf("Organisme / Information Prud'homme",'3', '29',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/mutdep", name="seeOrganismeMutDep")
     */
    public function OrganismeMutDepAction()
    {
        return $this->listChamp("Organisme / Mutation départ","gestion/organisme/mutdep/pdf",'3', '30',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/mutdep/pdf", name="seeOrganismeMutDeppdf")
     */
    public function OrganismeMutDepPdfAction()
    {
        return $this->listChampPdf("Organisme / Mutation départ",'3', '30',"Gestion");

    }
    /**
     *
     * @Route("/gestion/organisme/comage", name="seeOrganismeContrat")
     */
    public function OrganismeComAgeAction()
    {
        return $this->listChamp("Organisme / Complément agent","gestion/organisme/comage/pdf",'3', '31',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/comage/pdf", name="seeOrganismeComAgepdf")
     */
    public function OrganismeComAgePdfAction()
    {
        return $this->listChampPdf("Organisme / Complément agent",'3', '31',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/premutass", name="seeOrganismePreMutAss")
     */
    public function OrganismePreMutAssAction()
    {
        return $this->listChamp("Organisme / Prévoyance-Mutuelle-Assurance","gestion/organisme/premutass/pdf",'3', '32',"Gestion");
    }
    /**
     *
     * @Route("/gestion/organisme/premutass/pdf", name="seeOrganismePreMutAsspdf")
     */
    public function OrganismePreMutAssPdfAction()
    {
        return $this->listChampPdf("Organisme / Prévoyance-Mutuelle-Assurance",'3', '32',"Gestion");
    }
}