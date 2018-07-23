<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class SimulationController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/sim/par", name="seeRemunerationSimPar")
     */
    public function RemunerationSimParAction()
    {
        return $this->listChamp("Simulation bulletin / Paramètre de simulation d'un bulletin","traitement/remuneration/sim/par/pdf",'153', '583', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/sim/par/pdf", name="seeRemunerationSimParpdf")
     */
    public function RemunerationSimParPdfAction()
    {
        return $this->listChampPdf("Simulation bulletin / Paramètre de simulation d'un bulletin",'153', '583', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/sim/sim", name="seeRemunerationSimSim")
     */
    public function RemunerationSimSimAction()
    {
        return $this->listChamp("Simulation bulletin / Simulation d'un bulletin","traitement/remuneration/sim/sim/pdf",'153', '584', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/sim/sim/pdf", name="seeRemunerationSimSimpdf")
     */
    public function RemunerationSimSimPdfAction()
    {
        return $this->listChampPdf("Simulation bulletin / Simulation d'un bulletin",'153', '584', "Traitement");
    }
}