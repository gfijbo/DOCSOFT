<?php
// src\doc\PlatformBundle\Controller\OrganismeController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OrganismeController extends ListPage
{
    /**
     *
     * @Route("/organisme/agent", name="seeOrganismeAgent")
     */
    public function OrganismeAgentAction()
    {
        return $this->listChamp("Organisme / Agent","organisme/agent/pdf",'3', '4',"Gestion");
    }
    /**
     *
     * @Route("/organisme/agent/pdf", name="seeOrganismeAgentpdf")
     */
    public function OrganismeAgentPdfAction()
    {
        return $this->listChampPdf("Organisme / Agent",'3', '4',"Gestion");
    }
    /**
     *
     * @Route("/organisme/affectation", name="seeOrganismeAffectation")
     */
    public function OrganismeAffectationAction()
    {
        return $this->listChamp("Organisme / Affectation","organisme/affectation/pdf",'3', '5',"Gestion");
    }
    /**
     *
     * @Route("/organisme/affectation/pdf", name="seeOrganismeAffectationpdf")
     */
    public function OrganismeAffectationPdfAction()
    {
        return $this->listChampPdf("Organisme / Affectation",'3', '5',"Gestion");
    }
    /**
     *
     * @Route("/organisme/demmodaff", name="seeDemModAff")
     */
    public function OrganismeDemModAffAction()
    {
        return $this->listChamp("Organisme / Demandes de modifications d'affectations","organisme/demmodaff/pdf",'3', '26',"Gestion");
    }
    /**
     *
     * @Route("/organisme/demmodaff/pdf", name="seeOrganismeDemModAffpdf")
     */
    public function OrganismeDemModAffPdfAction()
    {
        return $this->listChampPdf("Organisme / Demandes de modifications d'affectations",'3', '26',"Gestion");
    }
    /**
     *
     * @Route("/organisme/contrat", name="seeOrgCon")
     */
    public function OrganismeContratAction()
    {
        return $this->listChamp("Organisme / Contrat","organisme/contrat/pdf",'3', '27',"Gestion");
    }
    /**
     *
     * @Route("/organisme/contrat/pdf", name="seeOrgConpdf")
     */
    public function OrganismeContratPdfAction()
    {
        return $this->listChampPdf("Organisme / Contrat",'3', '27',"Gestion");

    }
    /**
     *
     * @Route("/organisme/remplacements", name="seeOrganismeRemplacements")
     */
    public function OrganismeRemplacementsAction()
    {
        return $this->listChamp("Organisme / Remplacements","organisme/remplacements/pdf",'3', '28',"Gestion");
    }
    /**
     *
     * @Route("/organisme/remplacements/pdf", name="seeOrganismeRemplacementspdf")
     */
    public function OrganismeRemplacementsPdfAction()
    {
        return $this->listChampPdf("Organisme / Remplacements",'3', '28',"Gestion");
    }
    /**
     *
     * @Route("/organisme/infpru", name="seeOrganismeInfPru")
     */
    public function OrganismeInfPruAction()
    {
        return $this->listChamp("Organisme / Information Prud'homme","organisme/infpru/pdf",'3', '29',"Gestion");
    }
    /**
     *
     * @Route("/organisme/infpru/pdf", name="seeOrganismeInfPrupdf")
     */
    public function OrganismeInfPruPdfAction()
    {
        return $this->listChampPdf("Organisme / Information Prud'homme",'3', '29',"Gestion");
    }
    /**
     *
     * @Route("/organisme/mutdep", name="seeOrganismeMutDep")
     */
    public function OrganismeMutDepAction()
    {
        return $this->listChamp("Organisme / Mutation départ","organisme/mutdep/pdf",'3', '30',"Gestion");
    }
    /**
     *
     * @Route("/organisme/mutdep/pdf", name="seeOrganismeMutDeppdf")
     */
    public function OrganismeMutDepPdfAction()
    {
        return $this->listChampPdf("Organisme / Mutation départ",'3', '30',"Gestion");

    }
    /**
     *
     * @Route("/organisme/comage", name="seeOrganismeContrat")
     */
    public function OrganismeComAgeAction()
    {
        return $this->listChamp("Organisme / Complément agent","organisme/comage/pdf",'3', '31',"Gestion");
    }
    /**
     *
     * @Route("/organisme/comage/pdf", name="seeOrganismeComAgepdf")
     */
    public function OrganismeComAgePdfAction()
    {
        return $this->listChampPdf("Organisme / Complément agent",'3', '31',"Gestion");
    }
    /**
     *
     * @Route("/organisme/premutass", name="seeOrganismePreMutAss")
     */
    public function OrganismePreMutAssAction()
    {
        return $this->listChamp("Organisme / Prévoyance-Mutuelle-Assurance","organisme/premutass/pdf",'3', '32',"Gestion");
    }

    /**
     *
     * @Route("/organisme/premutass/pdf", name="seeOrganismePreMutAsspdf")
     */
    public function OrganismePreMutAssPdfAction()
    {
        return $this->listChampPdf("Organisme / Prévoyance-Mutuelle-Assurance",'3', '32',"Gestion");
    }

}