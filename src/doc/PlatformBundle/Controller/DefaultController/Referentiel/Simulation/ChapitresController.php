<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Simulation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ChapitresController extends ListPage
{
    /**
     *
     * @Route("/referentiel/simulation/cha", name="seeSimulationCha")
     */
    public function SimulationChaAction()
    {
        return $this->listChamp("Chapitres","referentiel/simulation/cha/pdf",'89', '363', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/simulation/cha/pdf", name="seeSimulationChapdf")
     */
    public function SimulationChaPdfAction()
    {
        return $this->listChampPdf("Chapitres",'89', '363', "Référentiel");
    }
}