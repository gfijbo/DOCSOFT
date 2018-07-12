<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class VentillationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/simulation/ven", name="seeSimulationVen")
     */
    public function SimulationVenAction()
    {
        return $this->listChamp("Ventilations Financières","referentiel/simulation/ven/pdf",'91', '365', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/simulation/ven/pdf", name="seeSimulationVenpdf")
     */
    public function SimulationVenPdfAction()
    {
        return $this->listChampPdf("Ventilations Financières",'91', '365', "Référentiel");
    }
}