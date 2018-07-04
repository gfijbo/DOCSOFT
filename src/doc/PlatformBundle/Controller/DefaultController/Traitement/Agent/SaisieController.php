<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 04/07/2018
 * Time: 12:27
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Agent;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class SaisieController extends ListPage
{
    /**
     *
     * @Route("/traitement/agent/sai", name="seeAgentSai")
     */
    public function AgentSaiAction()
    {
        return $this->listChamp("Saisie de masse dossier agent","/traitement/agent/sai/pdf",'121', '411', "Traitement");
    }
    /**
     *
     * @Route("/traitement/agent/saipdf", name="seeAgentsaipdf")
     */
    public function AgentSaiPdfAction()
    {
        return $this->listChampPdf("Saisie de masse dossier agent",'121', '411', "Traitement");
    }
}