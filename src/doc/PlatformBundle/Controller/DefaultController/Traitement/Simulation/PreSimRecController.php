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

class PreSimRecController extends ListPage
{
    /**
     *
     * @Route("/traitement/simulation/pre/rec", name="seeSimulationCalSimRec")
     */
    public function SimulationCalSimRecAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Recherche de mouvements","/traitement/simulation/pre/rec/pdf",'230', '734', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/rec/pdf", name="seeSimulationCalSimRecPdf")
     */
    public function SimulationCalSimRecPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Recherche de mouvements",'230', '734', "Traitement");
    }

}