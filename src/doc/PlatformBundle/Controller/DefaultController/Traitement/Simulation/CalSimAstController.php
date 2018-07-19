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

class CalSimAstController extends ListPage
{
    /**
     *
     * @Route("/traitement/simulation/calsimast", name="seeSimulationCalSimAst")
     */
    public function SimulationCalSimAstAction()
    {
        return $this->listChamp("Calcul simulation astromate","/traitement/simulation/calsimast/pdf",'229', '733', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/calsimast/pdf", name="seeSimulationCalSimAstPdf")
     */
    public function SimulationCalSimPdfAction()
    {
        return $this->listChampPdf("Calcul simulation astromate",'229', '733', "Traitement");
    }

}