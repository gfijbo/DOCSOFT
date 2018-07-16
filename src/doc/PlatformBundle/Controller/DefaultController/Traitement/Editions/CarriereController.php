<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Editions;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class CarriereController extends ListPage
{
    /**
     *
     * @Route("/traitement/editions/carriere/gra", name="seeEditionsCarriereGra")
     */
    public function EditionsCarriereGraAction()
    {
        return $this->listChamp("Carrière / Grades","traitement/editions/carriere/gra/pdf",'165', '621', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/carriere/gra/pdf", name="seeEditionsCarriereGrapdf")
     */
    public function EditionsCarriereGraPdfAction()
    {
        return $this->listChampPdf("Carrière / Grades",'165', '621', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/carriere/gra/echcar", name="seeEditionsCarriereGraEchcar")
     */
    public function EditionsCarriereGraEchcarAction()
    {
        return $this->listChamp("Carrière / Grades / échelle carrière","traitement/editions/carriere/gra/echcar/pdf",'165', '622', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/carriere/gra/echcar/pdf", name="seeEditionsCarriereGraEchcarpdf")
     */
    public function EditionsCarriereGraEchcarPdfAction()
    {
        return $this->listChampPdf("Carrière / Grades / échelle carrière",'165', '622', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/carriere/gra/echind", name="seeEditionsCarriereGraEchind")
     */
    public function EditionsCarriereGraEchindAction()
    {
        return $this->listChamp("Carrière / Grades / échelles indiciaires","traitement/editions/carriere/gra/echind/pdf",'165', '623', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/carriere/gra/echind/pdf", name="seeEditionsCarriereGraEchindpdf")
     */
    public function EditionsCarriereGraEchindPdfAction()
    {
        return $this->listChampPdf("Carrière / Grades / échelles indiciaires",'165', '623', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/carriere/echcar", name="seeEditionsCarriereEchCar")
     */
    public function EditionsCarriereEchCarAction()
    {
        return $this->listChamp("Carrière / Echelles carrière","traitement/editions/carriere/echcar/pdf",'165', '624', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/carriere/echcar/pdf", name="seeEditionsCarriereEchCarpdf")
     */
    public function EditionsCarriereEchCarPdfAction()
    {
        return $this->listChampPdf("Carrière / Echelles carrière",'165', '624', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/carriere/echind", name="seeEditionsCarriereEchind")
     */
    public function EditionsCarriereEchindAction()
    {
        return $this->listChamp("Carrière / Echelles indiciaires","traitement/editions/carriere/echind/pdf",'165', '625', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/carriere/echind/pdf", name="seeEditionsCarriereEchindpdf")
     */
    public function EditionsCarriereEchindPdfAction()
    {
        return $this->listChampPdf("Carrière / Echelles indiciaires",'165', '625', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/carriere/ind", name="seeEditionsCarriereInd")
     */
    public function EditionsCarriereIndAction()
    {
        return $this->listChamp("Carrière / Indices bruts majorés","traitement/editions/carriere/ind/pdf",'165', '626', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/carriere/ind/pdf", name="seeEditionsCarriereIndpdf")
     */
    public function EditionsCarriereIndPdfAction()
    {
        return $this->listChampPdf("Carrière / Indices bruts majorés",'165', '626', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/carriere/con", name="seeEditionsCarriereCon")
     */
    public function EditionsCarriereConAction()
    {
        return $this->listChamp("Carrière / Conditions avancement grade","traitement/editions/carriere/con/pdf",'165', '627', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/carriere/con/pdf", name="seeEditionsCarriereConpdf")
     */
    public function EditionsCarriereConPdfAction()
    {
        return $this->listChampPdf("Carrière / Conditions avancement grade",'165', '627', "Traitement");
    }
}