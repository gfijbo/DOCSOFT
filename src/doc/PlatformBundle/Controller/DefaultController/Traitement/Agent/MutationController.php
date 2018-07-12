<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 04/07/2018
 * Time: 12:31
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Agent;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class MutationController extends ListPage
{
    /**
     *
     * @Route("/traitement/agent/mut", name="seeAgentMut")
     */
    public function AgentMutAction()
    {
        return $this->listChamp("Mutation arrivée","/traitement/agent/mut/pdf",'121', '413', "Traitement");
    }
    /**
     *
     * @Route("/traitement/agent/mutpdf", name="seeAgentmutpdf")
     */
    public function AgentMutPdfAction()
    {
        return $this->listChampPdf("Mutation arrivée",'121', '413', "Traitement");
    }
}