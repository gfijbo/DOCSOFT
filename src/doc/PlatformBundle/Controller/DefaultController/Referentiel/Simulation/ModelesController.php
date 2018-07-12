<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ModelesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/simulation/mod", name="seeSimulationMod")
     */
    public function SimulationModAction()
    {
        return $this->listChamp("Général / Type Activité","referentiel/simulation/mod/pdf",'93', '367', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/simulation/mod/pdf", name="seeSimulationModpdf")
     */
    public function SimulationModPdfAction()
    {
        return $this->listChampPdf("Général / Type Activité",'93', '367', "Référentiel");
    }
}