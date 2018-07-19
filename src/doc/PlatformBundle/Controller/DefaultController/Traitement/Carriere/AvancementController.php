<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class AvancementController extends ListPage
{
    /**
     *
     * @Route("/traitement/carriere/ava/suppro", name="seeCarriereAvaSup")
     */
    public function CarriereAvaSupAction()
    {
        return $this->listChamp("Avancements / Suppression des propositions d'avancements","/traitement/carriere/ava/suppro/pdf",'128', '427', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/suppro/pdf", name="seeCarriereAvaSuppdf")
     */
    public function CarriereAvaSupPdfAction()
    {
        return $this->listChampPdf("Avancements / Suppression des propositions d'avancements",'128', '427', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/ech", name="seeCarriereAvaEch")
     */
    public function CarriereAvaEchAction()
    {
        return $this->listChamp("Avancements / Echelons","/traitement/carriere/ava/ech/pdf",'128', '428', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/ech/pdf", name="seeCarriereAvaEchpdf")
     */
    public function CarriereAvaEchPdfAction()
    {
        return $this->listChampPdf("Avancements / Echelons",'128', '428', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/gra", name="seeCarriereAvaGra")
     */
    public function CarriereAvaGraAction()
    {
        return $this->listChamp("Avancements / Grades-Promotion interne","/traitement/carriere/ava/gra/pdf",'128', '429', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/gra/pdf", name="seeCarriereAvaGrapdf")
     */
    public function CarriereAvaGraPdfAction()
    {
        return $this->listChampPdf("Avancements / Grades-Promotion interne",'128', '429', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/tit", name="seeCarriereAvaTit")
     */
    public function CarriereAvaTitAction()
    {
        return $this->listChamp("Avancements / Titularisations","/traitement/carriere/ava/tit/pdf",'128', '430', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/tit/pdf", name="seeCarriereAvaTitpdf")
     */
    public function CarriereAvaTitPdfAction()
    {
        return $this->listChampPdf("Avancements / Titularisations",'128', '430', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/rec", name="seeCarriereAvaRec")
     */
    public function CarriereAvaRecAction()
    {
        return $this->listChamp("Avancements / Reclassements","/traitement/carriere/ava/rec/pdf",'128', '431', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/rec/pdf", name="seeCarriereAvaRecpdf")
     */
    public function CarriereAvaRecPdfAction()
    {
        return $this->listChampPdf("Avancements / Reclassements",'128', '431', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/recpos", name="seeCarriereAvaRecPos")
     */
    public function CarriereAvaRecPosAction()
    {
        return $this->listChamp("Avancements / Reclassements postes","/traitement/carriere/ava/recpos/pdf",'128', '432', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/recpos/pdf", name="seeCarriereAvaRecPospdf")
     */
    public function CarriereAvaRecPosPdfAction()
    {
        return $this->listChampPdf("Avancements / Reclassements postes",'128', '432', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/quo", name="seeCarriereAvaQuo")
     */
    public function CarriereAvaQuoAction()
    {
        return $this->listChamp("Avancements / Quotas","/traitement/carriere/ava/quo/pdf",'128', '433', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/quo/pdf", name="seeCarriereAvaQuopdf")
     */
    public function CarriereAvaQuoPdfAction()
    {
        return $this->listChampPdf("Avancements / Quotas",'128', '433', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/bas", name="seeCarriereAvaBas")
     */
    public function CarriereAvaBasAction()
    {
        return $this->listChamp("Avancements / Bascule evts validés","/traitement/carriere/ava/quo/pdf",'128', '434', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/bas/pdf", name="seeCarriereAvaBaspdf")
     */
    public function CarriereAvaBasPdfAction()
    {
        return $this->listChampPdf("Avancements / Bascule evts validés",'128', '434', "Traitement");
    }
    /**
 *
 * @Route("/traitement/carriere/ava/val", name="seeCarriereAvaVal")
 */
    public function CarriereAvaValAction()
    {
        return $this->listChamp("Avancements / Validation des propositions avancement","/traitement/carriere/ava/val/pdf",'128', '435', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/val/pdf", name="seeCarriereAvaValpdf")
     */
    public function CarriereAvaValPdfAction()
    {
        return $this->listChampPdf("Avancements / Validation des propositions avancement",'128', '435', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/cal", name="seeCarriereAvaCal")
     */
    public function CarriereAvaCalAction()
    {
        return $this->listChamp("Avancements / Calcul des bonifications hospitalières","/traitement/carriere/ava/cal/pdf",'128', '436', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/cal/pdf", name="seeCarriereAvaCalpdf")
     */
    public function CarriereAvaCalPdfAction()
    {
        return $this->listChampPdf("Avancements / Calcul des bonifications hospitalières",'128', '436', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/basbon", name="seeCarriereAvaBasbon")
     */
    public function CarriereAvaBasBonAction()
    {
        return $this->listChamp("Avancements / Basculement des bonifications","/traitement/carriere/ava/basbon/pdf",'128', '437', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/basbon/pdf", name="seeCarriereAvaBasBonpdf")
     */
    public function CarriereAvaBasBonPdfAction()
    {
        return $this->listChampPdf("Avancements / Basculement des bonifications",'128', '437', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/edi", name="seeCarriereAvaEdi")
     */
    public function CarriereAvaEdiAction()
    {
        return $this->listChamp("Avancements / Edition des bonifications attribuées","/traitement/carriere/ava/basbon/pdf",'128', '438', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/ava/edi/pdf", name="seeCarriereAvaEdipdf")
     */
    public function CarriereAvaEdiPdfAction()
    {
        return $this->listChampPdf("Avancements / Edition des bonifications attribuées",'128', '438', "Traitement");
    }
}