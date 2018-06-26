<?php
// src\doc\PlatformBundle\Controller\DefaultController\Gestion\Effectif\MetiersController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SimulationController extends ListPage
{
    /**
     *
     * @Route("/gestion/simulation/simulation", name="seeSimulationSimulation")
     */
    public function SimulationSimulationAction()
    {
        return $this->listChamp("Simulation / Simulation","/gestion/simulation/simulation/pdf",'266', '75', "Gestion", "266");
    }
    /**
     *
     * @Route("/gestion/simulation/simulation/pdf", name="seeSimulationSimulationpdf")
     */
    public function SimulationSimulationPdfAction()
    {
        return $this->listChampPdf("Simulation / Simulation",'266', '75', "Gestion", "266");
    }
}