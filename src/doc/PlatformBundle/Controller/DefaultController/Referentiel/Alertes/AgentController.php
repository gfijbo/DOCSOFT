<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Alertes;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AgentController extends ListPage
{
    /**
     *
     * @Route("/referentiel/alertes/agent", name="seeAlertesAgent")
     */
    public function AlertesAgentAction()
    {
        return $this->listChamp("Agent","referentiel/alertes/agent/pdf",'70', '325', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/alertes/agent/pdf", name="seeAlertesAgentpdf")
     */
    public function AlertesAgentPdfAction()
    {
        return $this->listChampPdf("Agent",'70', '325', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/alertes/candidat", name="seeAlertesCandidat")
     */
    public function AlertesCandidatAction()
    {
        return $this->listChamp("Candidat","referentiel/alertes/candidat/pdf",'70', '326', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/alertes/candidat/pdf", name="seeAlertesCandidatpdf")
     */
    public function AlertesCandidatPdfAction()
    {
        return $this->listChampPdf("Candidat",'70', '326', "Référentiel");
    }
}