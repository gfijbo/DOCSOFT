<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NaturesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/simulation/nat", name="seeSimulationNat")
     */
    public function SimulationNatAction()
    {
        return $this->listChamp("Natures","referentiel/simulation/nat/pdf",'90', '364', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/simulation/nat/pdf", name="seeSimulationNatpdf")
     */
    public function SimulationNatPdfAction()
    {
        return $this->listChampPdf("Natures",'90', '364', "Référentiel");
    }
}