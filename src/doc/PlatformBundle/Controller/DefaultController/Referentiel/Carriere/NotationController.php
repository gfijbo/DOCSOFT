<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NotationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/not/cri", name="seeCarriereNotCri")
     */
    public function CarriereNotCriAction()
    {
        return $this->listChamp("Notation / Critères","referentiel/carriere/not/cri/pdf",'28', '147', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/not/cri/pdf", name="seeCarriereNotCripdf")
     */
    public function CarriereNotCriPdfAction()
    {
        return $this->listChampPdf("Notation / Critères",'28', '147', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/not/notmoy", name="seeCarriereNotNotmoy")
     */
    public function CarriereNotNotmoyAction()
    {
        return $this->listChamp("Notation / Notes moyennes","referentiel/carriere/not/notmoy/pdf",'28', '148', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/not/notmoy/pdf", name="seeCarriereNotNotmoypdf")
     */
    public function CarriereNotNotmoyPdfAction()
    {
        return $this->listChampPdf("Notation / Notes moyennes",'28', '148', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/not/mod", name="seeCarriereNotMod")
     */
    public function CarriereNotModAction()
    {
        return $this->listChamp("Notation / Modèle fiche notation","referentiel/carriere/not/mod/pdf",'28', '149', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/not/mod/pdf", name="seeCarriereNotModpdf")
     */
    public function CarriereNotModPdfAction()
    {
        return $this->listChampPdf("Notation / Modèle fiche notation",'28', '149', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/not/notlit", name="seeCarriereNotNotlit")
     */
    public function CarriereNotNotlitAction()
    {
        return $this->listChamp("Notation / Notes littérales","referentiel/carriere/not/notlit/pdf",'28', '150', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/not/notlit/pdf", name="seeCarriereNotNotlitpdf")
     */
    public function CarriereNotNotlitPdfAction()
    {
        return $this->listChampPdf("Notation / Notes littérales",'28', '150', "Référentiel");
    }
}