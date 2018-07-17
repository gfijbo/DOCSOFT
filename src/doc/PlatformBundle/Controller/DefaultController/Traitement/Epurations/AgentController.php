<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Epurations;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class AgentController extends ListPage
{
    /**
     *
     * @Route("/traitement/epurations/agent/sel", name="seeEpurationsAgentSel")
     */
    public function EpurationsAgentSelAction()
    {
        return $this->listChamp("Agents / Sélection agents","traitement/epurations/agent/sel/pdf",'181', '644', "Traitement");
    }
    /**
     *
     * @Route("/traitement/epurations/agent/sel/pdf", name="seeEpurationsAgentSelpdf")
     */
    public function EpurationsAgentSelPdfAction()
    {
        return $this->listChampPdf("Agents / Sélection agents",'181', '644', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/epurations/agent/edi", name="seeEpurationsAgentEdi")
     */
    public function EpurationsAgentEdiAction()
    {
        return $this->listChamp("Agents / Edition agents sélectionnés","traitement/epurations/agent/edi/pdf",'181', '645', "Traitement");
    }
    /**
     *
     * @Route("/traitement/epurations/agent/edi/pdf", name="seeEpurationsAgentEdipdf")
     */
    public function EpurationsAgentEdiPdfAction()
    {
        return $this->listChampPdf("Agents / Edition agents sélectionnés",'181', '645', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/epurations/agent/sup", name="seeEpurationsAgentSup")
     */
    public function EpurationsAgentSupAction()
    {
        return $this->listChamp("Agents / Suppression","traitement/epurations/agent/sup/pdf",'181', '646', "Traitement");
    }
    /**
     *
     * @Route("/traitement/epurations/agent/sup/pdf", name="seeEpurationsAgentSuppdf")
     */
    public function EpurationsAgentSupPdfAction()
    {
        return $this->listChampPdf("Agents / Suppression",'181', '646', "Traitement");
    }
}