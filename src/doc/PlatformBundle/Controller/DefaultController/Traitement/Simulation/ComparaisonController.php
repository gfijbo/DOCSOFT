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

class ComparaisonController extends ListPage
{
    /**
     *
     * @Route("/traitement/simulation/com", name="seeSimulationCom")
     */
    public function SimulationComAction()
    {
        return $this->listChamp("Comparaison","/traitement/simulation/com/pdf",'227', '731', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/com/pdf", name="seeSimulationComPdf")
     */
    public function SimulationComPdfAction()
    {
        return $this->listChampPdf("Comparaison",'227', '731', "Traitement");
    }

}