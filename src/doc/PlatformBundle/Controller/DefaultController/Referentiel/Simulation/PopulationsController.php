<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PopulationsController extends ListPage
{
    /**
     *
     * @Route("/referentiel/simulation/pop", name="seeSimulationPop")
     */
    public function SimulationPopAction()
    {
        return $this->listChamp("Populations","referentiel/simulation/pop/pdf",'94', '368', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/simulation/pop/pdf", name="seeSimulationPoppdf")
     */
    public function SimulationPopPdfAction()
    {
        return $this->listChampPdf("Populations",'94', '368', "Référentiel");
    }
}