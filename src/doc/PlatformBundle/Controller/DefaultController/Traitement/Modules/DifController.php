<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Modules;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class DifController extends ListPage
{
    /**
     *
     * @Route("/traitement/modules/dif/cal", name="seeModulesDifCal")
     */
    public function ModulesDifCalAction()
    {
        return $this->listChamp("Dif / Calcul droits acquis","traitement/modules/dif/cal/pdf",'245', '769', "Traitement");
    }
    /**
     *
     * @Route("/traitement/modules/dif/cal/pdf", name="seeModulesDifCalpdf")
     */
    public function ModulesDifCalPdfAction()
    {
        return $this->listChampPdf("Dif / Calcul droits acquis",'245', '769', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/modules/dif/mes", name="seeModulesDifMes")
     */
    public function ModulesDifMesAction()
    {
        return $this->listChamp("Dif / Messages Dif (Bulletin Paie)","traitement/modules/dif/mes/pdf",'245', '770', "Traitement");
    }
    /**
     *
     * @Route("/traitement/modules/dif/mes/pdf", name="seeModulesDifMespdf")
     */
    public function ModulesDifMesPdfAction()
    {
        return $this->listChampPdf("Dif / Messages Dif (Bulletin Paie)",'245', '770', "Traitement");
    }
}