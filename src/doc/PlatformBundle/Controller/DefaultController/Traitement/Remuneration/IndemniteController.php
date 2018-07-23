<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class IndemniteController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/ind/cal", name="seeRemunerationIndCal")
     */
    public function RemunerationIndCalAction()
    {
        return $this->listChamp("Indemnité Dégressive CSG / Calcul des forçages à réaliser","traitement/remuneration/ind/cal/pdf",'157', '595', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ind/cal/pdf", name="seeRemunerationIndCalpdf")
     */
    public function RemunerationIndCalPdfAction()
    {
        return $this->listChampPdf("Indemnité Dégressive CSG / Calcul des forçages à réaliser",'157', '595', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/ind/edi", name="seeRemunerationIndEdi")
     */
    public function RemunerationIndEdiAction()
    {
        return $this->listChamp("Indemnité Dégressive CSG / Edition des rubriques calculées","traitement/remuneration/ind/edi/pdf",'157', '596', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/ind/edi/pdf", name="seeRemunerationIndEdipdf")
     */
    public function RemunerationIndEdiPdfAction()
    {
        return $this->listChampPdf("Indemnité Dégressive CSG / Edition des rubriques calculées",'157', '596', "Traitement");
    }
}