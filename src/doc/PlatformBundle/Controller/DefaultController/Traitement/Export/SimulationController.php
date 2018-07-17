<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Export;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class SimulationController extends ListPage
{
    /**
     *
     * @Route("/traitement/export/simexp", name="seeExportSimexp")
     */
    public function ExportSimexpAction()
    {
        return $this->listChamp("Simulation / Export","traitement/export/simexp/pdf",'242', '766', "Traitement");
    }
    /**
     *
     * @Route("/traitement/export/simexp/pdf", name="seeExportSimexppdf")
     */
    public function ExportSimexpPdfAction()
    {
        return $this->listChampPdf("Simulation / Export",'242', '766', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/export/simimp", name="seeExportSimimp")
     */
    public function ExportSimimpAction()
    {
        return $this->listChamp("Simulation / Import","traitement/export/simimp/pdf",'242', '767', "Traitement");
    }
    /**
     *
     * @Route("/traitement/export/simimp/pdf", name="seeExportSimimppdf")
     */
    public function ExportSimimpPdfAction()
    {
        return $this->listChampPdf("Simulation / Import",'242', '767', "Traitement");
    }
}