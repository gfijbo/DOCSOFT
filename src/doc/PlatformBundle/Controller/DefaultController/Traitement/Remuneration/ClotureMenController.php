<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ClotureMenController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/clo/val", name="seeRemunerationCloVal")
     */
    public function RemunerationCloValAction()
    {
        return $this->listChamp("Clôture mensuelle / Valorisation table de paie répartie","traitement/remuneration/clo/val/pdf",'149', '556', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/clo/val/pdf", name="seeRemunerationCloValpdf")
     */
    public function RemunerationCloValPdfAction()
    {
        return $this->listChampPdf("Clôture mensuelle / Valorisation table de paie répartie",'149', '556', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/clo/arc", name="seeRemunerationCloArc")
     */
    public function RemunerationCloArcAction()
    {
        return $this->listChamp("Clôture mensuelle / Archivage paie","traitement/remuneration/clo/arc/pdf",'149', '557', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/clo/arc/pdf", name="seeRemunerationCloArcpdf")
     */
    public function RemunerationCloArcPdfAction()
    {
        return $this->listChampPdf("Clôture mensuelle / Archivage paie",'149', '557', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/clo/ele", name="seeRemunerationCloEle")
     */
    public function RemunerationCloEleAction()
    {
        return $this->listChamp("Clôture mensuelle / Element échus","traitement/remuneration/clo/ele/pdf",'149', '558', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/clo/ele/pdf", name="seeRemunerationCloElepdf")
     */
    public function RemunerationCloElePdfAction()
    {
        return $this->listChampPdf("Clôture mensuelle / Element échus",'149', '558', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/clo/ini", name="seeRemunerationCloIni")
     */
    public function RemunerationCloIniAction()
    {
        return $this->listChamp("Clôture mensuelle / Initialisation tables mensuelles","traitement/remuneration/clo/ini/pdf",'149', '559', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/clo/ini/pdf", name="seeRemunerationCloInipdf")
     */
    public function RemunerationCloIniPdfAction()
    {
        return $this->listChampPdf("Clôture mensuelle / Initialisation tables mensuelles",'149', '559', "Traitement");
    }
}