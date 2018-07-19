<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 18/07/2018
 * Time: 17:23
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Simulation;
use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CalculSimController extends ListPage
{
    /**
     *
     * @Route("/traitement/simulation/calsim", name="seeSimulationCalSim")
     */
    public function SimulationCalSimAction()
    {
        return $this->listChamp("Calcul d'une simulation","/traitement/simulation/calsim/pdf",'228', '732', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/calsim/pdf", name="seeSimulationCalSimPdf")
     */
    public function SimulationCalSimPdfAction()
    {
        return $this->listChampPdf("Calcul d'une simulation",'228', '732', "Traitement");
    }

}