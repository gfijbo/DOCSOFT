<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 04/07/2018
 * Time: 12:30
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Agent;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class DuplicationController extends ListPage
{
    /**
     *
     * @Route("/traitement/agent/dup", name="seeAgentDup")
     */
    public function AgentDupAction()
    {
        return $this->listChamp("Duplication Agent","/traitement/agent/dup/pdf",'121', '412', "Traitement");
    }
    /**
     *
     * @Route("/traitement/agent/duppdf", name="seeAgentduppdf")
     */
    public function AgentDupPdfAction()
    {
        return $this->listChampPdf("Duplication Agent",'121', '412', "Traitement");
    }
}