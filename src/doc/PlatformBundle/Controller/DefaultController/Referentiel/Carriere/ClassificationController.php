<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ClassificationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/cla/gra", name="seeCarriereClaGra")
     */
    public function CarriereClaGraAction()
    {
        return $this->listChamp("Classification / Grades","referentiel/carriere/cla/gra/pdf",'29', '151', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/gra/pdf", name="seeCarriereClaCatgrapdf")
     */
    public function CarriereClaGraPdfAction()
    {
        return $this->listChampPdf("Classification / Grades",'29', '151', "Référentiel");
    }
    
    /**
     *
     * @Route("referentiel/carriere/cla/catgra", name="seeCarriereClaCatgra")
     */
    public function CarriereClaCatgraAction()
    {
        return $this->listChamp("Classification / Catégories grades","referentiel/carriere/cla/catgra/pdf",'29', '152', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/catgra/pdf", name="seeCarriereClaCatgrapdf")
     */
    public function CarriereClaCatgraPdfAction()
    {
        return $this->listChampPdf("Classification / Catégories grades",'29', '152', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/carriere/cla/cor", name="seeCarriereClaCor")
     */
    public function CarriereClaCorAction()
    {
        return $this->listChamp("Classification / Corps et cadres d'emplois","referentiel/carriere/cla/cor/pdf",'29', '153', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/cor/pdf", name="seeCarriereClaCorpdf")
     */
    public function CarriereClaCorPdfAction()
    {
        return $this->listChampPdf("Classification / Corps et cadres d'emplois",'29', '153', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/fil", name="seeCarriereClaFil")
     */
    public function CarriereClaFilAction()
    {
        return $this->listChamp("Classification / Filière","referentiel/carriere/cla/fil/pdf",'29', '154', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/fil/pdf", name="seeCarriereClaFilpdf")
     */
    public function CarriereClaFilPdfAction()
    {
        return $this->listChampPdf("Classification / Filière",'29', '154', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/gro", name="seeCarriereClaGro")
     */
    public function CarriereClaGroAction()
    {
        return $this->listChamp("Classification / Groupes notation","referentiel/carriere/cla/gro/pdf",'29', '155', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/gro/pdf", name="seeCarriereClaGropdf")
     */
    public function CarriereClaGroPdfAction()
    {
        return $this->listChampPdf("Classification / Groupes notation",'29', '155', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/sec", name="seeCarriereClaSec")
     */
    public function CarriereClaSecAction()
    {
        return $this->listChamp("Classification / Secteurs d'activité","referentiel/carriere/cla/sec/pdf",'29', '156', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/sec/pdf", name="seeCarriereClaSecpdf")
     */
    public function CarriereClaSecPdfAction()
    {
        return $this->listChampPdf("Classification / Secteurs d'activité",'29', '156', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/echelle", name="seeCarriereClaEchelle")
     */
    public function CarriereClaEchelleAction()
    {
        return $this->listChamp("Classification / Echelle","/referentiel/carriere/cla/echelle/pdf",'29', '157', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/echelle/pdf", name="seeCarriereClaEchellepdf")
     */
    public function CarriereClaEchellePdfAction()
    {
        return $this->listChampPdf("Classification / Echelle",'29', '157', "Référentiel");
    }
}