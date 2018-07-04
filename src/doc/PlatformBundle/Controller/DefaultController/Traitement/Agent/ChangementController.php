<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Agent;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ChangementController extends ListPage
{
    /**
     *
     * @Route("/traitement/agent/cha/cha", name="seeAgentChaCha")
     */
    public function AgentChaChaAction()
    {
        return $this->listChamp("Changement d'affectation / Changement affectation de masse","/traitement/agent/cha/cha/pdf",'121', '408', "Traitement");
    }
    /**
     *
     * @Route("/traitement/agent/cha/cha/pdf", name="seeAgentChaChapdf")
     */
    public function AgentChaChaPdfAction()
    {
        return $this->listChampPdf("Changement d'affectation / Changement affectation de masse",'121', '408', "Traitement");
    }

    /**
     *
     * @Route("/traitement/agent/cha/tra", name="seeAgentChaTra")
     */
    public function AgentChaTraAction()
    {
        return $this->listChamp("Changement d'affectation / Traitement du changement","/traitement/agent/cha/cha/pdf",'121', '409', "Traitement");
    }
    /**
     *
     * @Route("/traitement/agent/cha/tra/pdf", name="seeAgentChaTrapdf")
     */
    public function AgentChaTraPdfAction()
    {
        return $this->listChampPdf("Changement d'affectation / Traitement du changement",'121', '409', "Traitement");
    }
    /**
     *
     * @Route("/traitement/agent/cha/vis", name="seeAgentChaVis")
     */
    public function AgentChaVisAction()
    {
        return $this->listChamp("Changement d'affectation / Visualisation des agents et des postes","/traitement/agent/cha/vis/pdf",'121', '410', "Traitement");
    }
    /**
     *
     * @Route("/traitement/agent/cha/vis/pdf", name="seeAgentChaVispdf")
     */
    public function AgentChaVisPdfAction()
    {
        return $this->listChampPdf("Changement d'affectation / Visualisation des agents et des postes",'121', '410', "Traitement");
    }
}

