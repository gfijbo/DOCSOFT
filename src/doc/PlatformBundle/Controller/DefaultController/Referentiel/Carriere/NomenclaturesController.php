<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NomenclaturesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/nom/nomnet", name="seeCarriereNomNomnet")
     */
    public function CarriereNomNomnetAction()
    {
        return $this->listChamp("Nomenclatures / Nomenclature NET","referentiel/carriere/nom/nomnet/pdf",'30', '177', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/nom/nomnet/pdf", name="seeCarriereNomNomnetpdf")
     */
    public function CarriereNomNomnetPdfAction()
    {
        return $this->listChampPdf("Nomenclatures / Nomenclature NET",'30', '177', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/nom/nomnne", name="seeCarriereNomNomnne")
     */
    public function CarriereNomNomnneAction()
    {
        return $this->listChamp("Nomenclatures / Nomenclature NNE","referentiel/carriere/nom/nomnne/pdf",'30', '178', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/nom/nomnne/pdf", name="seeCarriereNomNomnnepdf")
     */
    public function CarriereNomNomnnePdfAction()
    {
        return $this->listChampPdf("Nomenclatures / Nomenclature NNE",'30', '178', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/nom/nomneh", name="seeCarriereNomNomneh")
     */
    public function CarriereNomNomnehAction()
    {
        return $this->listChamp("Nomenclatures / Nomenclature NEH","referentiel/carriere/nom/nomneh/pdf",'30', '179', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/nom/nomneh/pdf", name="seeCarriereNomNomnehpdf")
     */
    public function CarriereNomNomnehPdfAction()
    {
        return $this->listChampPdf("Nomenclatures / Nomenclature NEH",'30', '179', "Référentiel");
    }
}