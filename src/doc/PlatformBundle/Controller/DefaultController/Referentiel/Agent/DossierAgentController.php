<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DossierAgentController extends ListPage
{
    /**
     *
     * @Route("/referentiel/agent/gro", name="seeAgentGro")
     */
    public function AgentGroAction()
    {
        return $this->listChamp("Dossier agent / Groupes d'agents","referentiel/agent/gro/pdf",'33', '182', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/gro/pdf", name="seeAgentGropdf")
     */
    public function AgentGroPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Groupes d'agents",'33', '182', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/fon", name="seeAgentFon")
     */
    public function AgentFonAction()
    {
        return $this->listChamp("Dossier agent / Fonctions","referentiel/agent/fon/pdf",'33', '183', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/fon/pdf", name="seeAgentFonpdf")
     */
    public function AgentFonPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Fonctions",'33', '183', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/cla", name="seeAgentCla")
     */
    public function AgentClaAction()
    {
        return $this->listChamp("Dossier agent / Classes CNRACL","referentiel/agent/cla/pdf",'33', '184', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/cla/pdf", name="seeAgentClapdf")
     */
    public function AgentClaPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Classes CNRACL",'33', '184', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/typ", name="seeAgentTyp")
     */
    public function AgentTypAction()
    {
        return $this->listChamp("Dossier agent / Types demande","referentiel/agent/typ/pdf",'33', '185', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/typ/pdf", name="seeAgentTyppdf")
     */
    public function AgentTypPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Types demande",'33', '185', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/mot", name="seeAgentMot")
     */
    public function AgentMotAction()
    {
        return $this->listChamp("Dossier agent / Motifs demande","referentiel/agent/mot/pdf",'33', '186', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/mot/pdf", name="seeAgentMotpdf")
     */
    public function AgentMotPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Motifs demande",'33', '186', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/han", name="seeAgentHan")
     */
    public function AgentHanAction()
    {
        return $this->listChamp("Dossier agent / Handicaps","referentiel/agent/han/pdf",'33', '187', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/han/pdf", name="seeAgentHanpdf")
     */
    public function AgentHanPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Handicaps",'33', '187', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/res", name="seeAgentRes")
     */
    public function AgentResAction()
    {
        return $this->listChamp("Dossier agent / Réserve aptitude","referentiel/agent/res/pdf",'33', '188', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/res/pdf", name="seeAgentRespdf")
     */
    public function AgentResPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Réserve aptitude",'33', '188', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/hancot", name="seeAgentHancot")
     */
    public function AgentHancotAction()
    {
        return $this->listChamp("Dossier agent / Handicaps COTOREP","referentiel/agent/hancot/pdf",'33', '189', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/hancot/pdf", name="seeAgentHancotpdf")
     */
    public function AgentHancotPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Handicaps COTOREP",'33', '189', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/oricot", name="seeAgentOricot")
     */
    public function AgentOricotAction()
    {
        return $this->listChamp("Dossier agent / Orientations COTOREP","referentiel/agent/oricot/pdf",'33', '190', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/oricot/pdf", name="seeAgentOricotpdf")
     */
    public function AgentOricotPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Orientations COTOREP",'33', '190', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/sit", name="seeAgentSit")
     */
    public function AgentSitAction()
    {
        return $this->listChamp("Dossier agent / Situation enfant","referentiel/agent/sit/pdf",'33', '191', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/sit/pdf", name="seeAgentSitpdf")
     */
    public function AgentSitPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Situation enfant",'33', '191', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/motnbi", name="seeAgentMotnbi")
     */
    public function AgentMotnbiAction()
    {
        return $this->listChamp("Dossier agent / Motif nbi","referentiel/agent/mot/pdf",'33', '192', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/agent/motnbi/pdf", name="seeAgentMotnbipdf")
     */
    public function AgentMotnbiPdfAction()
    {
        return $this->listChampPdf("Dossier agent / Motif nbi",'33', '192', "Référentiel");
    }
    
}