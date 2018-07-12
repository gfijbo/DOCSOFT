<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Alerte;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class AgentController extends ListPage
{
    /**
     *
     * @Route("/traitement/alerte/age", name="seeAlerteAge")
     */
    public function AlerteAgeAction()
    {
        return $this->listChamp("Agent","traitement/alerte/age/pdf",'224', '729', "Traitement");
    }
    /**
     *
     * @Route("/traitement/alerte/age/pdf", name="seeAlerteAgepdf")
     */
    public function AlerteAgePdfAction()
    {
        return $this->listChampPdf("Agent",'224', '729', "Traitement");
    }
}