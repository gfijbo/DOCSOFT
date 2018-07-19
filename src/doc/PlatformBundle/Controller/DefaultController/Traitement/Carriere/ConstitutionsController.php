<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 17/07/2018
 * Time: 17:03
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;
use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConstitutionsController extends ListPage
{
    /**
     *
     * @Route("/traitement/carriere/con/aut", name="seeCarriereConAut")
     */
    public function CarriereConAutAction()
    {
        return $this->listChamp("Constitutions fichiers / Autres arrêtés","/traitement/carriere/con/aut/pdf",'131', '455', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/aut/pdf", name="seeCarriereConAutpdf")
     */
    public function CarriereConAutPdfAction()
    {
        return $this->listChampPdf("Constitutions fichiers / Autres arrêtés",'131', '455', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/arr", name="seeCarriereConArr")
     */
    public function CarriereConArrAction()
    {
        return $this->listChamp("Constitutions fichiers / Arrêtés avancement","/traitement/carriere/con/arr/pdf",'131', '456', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/arr/pdf", name="seeCarriereConArrpdf")
     */
    public function CarriereConArrPdfAction()
    {
        return $this->listChampPdf("Constitutions fichiers / Arrêtés avancement",'131', '456', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/sta", name="seeCarriereConSta")
     */
    public function CarriereConStaAction()
    {
        return $this->listChamp("Constitutions fichiers / Stagiaires","/traitement/carriere/con/sta/pdf",'131', '457', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/sta/pdf", name="seeCarriereConStapdf")
     */
    public function CarriereConStaPdfAction()
    {
        return $this->listChampPdf("Constitutions fichiers / Stagiaires ",'131', '457', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/con", name="seeCarriereConCon")
     */
    public function CarriereConConAction()
    {
        return $this->listChamp("Constitutions fichiers / Contractuels","/traitement/carriere/con/con/pdf",'131', '457', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/con/pdf", name="seeCarriereConConpdf")
     */
    public function CarriereConConPdfAction()
    {
        return $this->listChampPdf("Constitutions fichiers / Contractuels ",'131', '457', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/pre", name="seeCarriereConPre")
     */
    public function CarriereConPreAction()
    {
        return $this->listChamp("Constitutions fichiers / Préparation des arrêtés","/traitement/carriere/con/pre/pdf",'131', '458', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/pre/pdf", name="seeCarriereConPrepdf")
     */
    public function CarriereConPrePdfAction()
    {
        return $this->listChampPdf("Constitutions fichiers / Préparation des arrêtés ",'131', '458', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/edi", name="seeCarriereConEdi")
     */
    public function CarriereConEdiAction()
    {
        return $this->listChamp("Constitutions fichiers / Edition des arrêtés","/traitement/carriere/con/edi/pdf",'131', '459', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/con/edi/pdf", name="seeCarriereConEdipdf")
     */
    public function CarriereConEdiPdfAction()
    {
        return $this->listChampPdf("Constitutions fichiers / Edition des arrêtés ",'131', '459', "Traitement");
    }

}