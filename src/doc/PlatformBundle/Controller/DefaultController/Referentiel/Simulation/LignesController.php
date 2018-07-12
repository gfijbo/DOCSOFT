<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LignesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/simulation/lig", name="seeSimulationLig")
     */
    public function SimulationLigAction()
    {
        return $this->listChamp("Lignes de Crédit","referentiel/simulation/lig/pdf",'92', '366', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/simulation/lig/pdf", name="seeSimulationLigpdf")
     */
    public function SimulationLigPdfAction()
    {
        return $this->listChampPdf("Lignes de Crédit",'92', '366', "Référentiel");
    }
}