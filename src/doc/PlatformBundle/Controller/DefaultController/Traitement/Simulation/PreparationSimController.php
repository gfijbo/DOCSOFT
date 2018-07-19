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

class PreparationSimController extends ListPage
{
    /**
     *
     * @Route("/traitement/simulation/pre/rec", name="seeCalSimRec")
     */
    public function CalSimRecAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Recherche de mouvements","/traitement/simulation/pre/rec/pdf",'230', '734', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/rec/pdf", name="seeCalSimRecPdf")
     */
    public function CalSimRecPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Recherche de mouvements",'230', '734', "Traitement");
    }



    /**
     *
     * @Route("/traitement/simulation/pre/mou", name="seeSimulationPreMou")
     */
    public function SimuPreMouAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Copie des avancements RH","/traitement/simulation/pre/rec/pdf",'230', '735', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/mou/pdf", name="seeSimPreMouPdf")
     */
    public function SimPreMouPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Copie des avancements RH",'230', '735', "Traitement");
    }
}