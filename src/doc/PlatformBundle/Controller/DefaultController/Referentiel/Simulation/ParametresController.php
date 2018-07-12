<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametresController extends ListPage
{
    /**
     *
     * @Route("/referentiel/simulation/par", name="seeSimulationPar")
     */
    public function SimulationParAction()
    {
        return $this->listChamp("Paramètres (SMS)","referentiel/simulation/par/pdf",'88', '362', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/simulation/par/pdf", name="seeSimulationParpdf")
     */
    public function SimulationParPdfAction()
    {
        return $this->listChampPdf("Paramètres (SMS)",'88', '362', "Référentiel");
    }
}