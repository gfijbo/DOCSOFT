<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class EditionsController extends ListPage
{
    /**
     *
     * @Route("/traitement/carriere/edi/avcech", name="seeCarriereAvcEch")
     */
    public function CarriereAvcEchAction()
    {
        return $this->listChamp("Editions carrière / Avc. échelon","/traitement/carriere/edi/avcech/pdf",'130', '441', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/avcech/pdf", name="seeCarriereAvcEchpdf")
     */
    public function CarriereAvcEchPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Avc. échelon",'130', '441', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/avcgra", name="seeCarriereAvcGra")
     */
    public function CarriereAvcGraAction()
    {
        return $this->listChamp("Editions carrière / Avc. échelon","/traitement/carriere/edi/avcgra/pdf",'130', '442', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/avcgra/pdf", name="seeCarriereAvcGrapdf")
     */
    public function CarriereAvcGraPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Avc. échelon",'130', '442', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/tit", name="seeCarriereTit")
     */
    public function CarriereTitAction()
    {
        return $this->listChamp("Editions carrière / Titularisations","/traitement/carriere/edi/tit/pdf",'130', '443', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/tit/pdf", name="seeCarriereTitpdf")
     */
    public function CarriereTitPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Titularisations",'130', '443', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/cah", name="seeCarrierecah")
     */
    public function CarriereCahAction()
    {
        return $this->listChamp("Editions carrière / Cahier avancements","/traitement/carriere/edi/cah/pdf",'130', '444', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/cah/pdf", name="seeCarriereCahpdf")
     */
    public function CarriereCahPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Cahier avancements",'130', '444', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/fic", name="seeCarriereFic")
     */
    public function CarriereFicAction()
    {
        return $this->listChamp("Editions carrière / Fiches avancements","/traitement/carriere/edi/fic/pdf",'130', '445', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/fic/pdf", name="seeCarriereFicpdf")
     */
    public function CarriereFicPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Fiches avancements",'130', '445', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/eve", name="seeCarriereEve")
     */
    public function CarriereEveAction()
    {
        return $this->listChamp("Editions carrière / Evènements futurs","/traitement/carriere/edi/eve/pdf",'130', '446', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/eve/pdf", name="seeCarriereEvepdf")
     */
    public function CarriereEvePdfAction()
    {
        return $this->listChampPdf("Editions carrière / Evènements futurs",'130', '446', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/his", name="seeCarriereHis")
     */
    public function CarriereHisAction()
    {
        return $this->listChamp("Editions carrière / Historique carrière","/traitement/carriere/edi/his/pdf",'130', '447', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/his/pdf", name="seeCarriereHispdf")
     */
    public function CarriereHisPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Historique carrière",'130', '447', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/pro", name="seeCarrierePro")
     */
    public function CarriereProAction()
    {
        return $this->listChamp("Editions carrière / Propositions de médailles","/traitement/carriere/edi/pro/pdf",'130', '448', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/pro/pdf", name="seeCarrierePropdf")
     */
    public function CarriereProPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Propositions de médailles",'130', '448', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/ref", name="seeCarriereRef")
     */
    public function CarriereRefAction()
    {
        return $this->listChamp("Editions carrière / Refus de médailles","/traitement/carriere/edi/ref/pdf",'130', '449', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/ref/pdf", name="seeCarriereRefpdf")
     */
    public function CarriereRefPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Refus de médailles",'130', '449', "Traitement");
    }
    /**
 *
 * @Route("/traitement/carriere/edi/avagra", name="seeCarriereAvaGra")
 */
    public function CarriereAvaGraAction()
    {
        return $this->listChamp("Editions carrière / Avancement de Grade Simplifiée","/traitement/carriere/edi/avagra/pdf",'130', '450', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/avagra/pdf", name="seeCarriereAvaGrapdf")
     */
    public function CarriereAvaGraPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Avancement de Grade Simplifiée",'130', '450', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/avaech", name="seeCarriereAvaEch")
     */
    public function CarriereAvaEchAction()
    {
        return $this->listChamp("Editions carrière / Avancement d'Echelon Simplifiée","/traitement/carriere/edi/avaech/pdf",'130', '451', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/avaech/pdf", name="seeCarriereAvaEchpdf")
     */
    public function CarriereAvaEchPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Avancement d'Echelon Simplifiée",'130', '451', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/pro", name="seeCarriereEdiPro")
     */
    public function CarriereEdiProAction()
    {
        return $this->listChamp("Editions carrière / Promotion Interne Simplifiée","/traitement/carriere/edi/pro/pdf",'130', '452', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/pro/pdf", name="seeCarriereEdiPropdf")
     */
    public function CarriereEdiProPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Promotion Interne Simplifiée",'130', '452', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/arrava", name="seeCarriereEdiArrAva")
     */
    public function CarriereEdiArrAvaAction()
    {
        return $this->listChamp("Editions carrière / Arrêtés d'avancement (via visas basés)","/traitement/carriere/edi/arrava/pdf",'130', '453', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/arrava/pdf", name="seeCarriereEdiArrAvapdf")
     */
    public function CarriereEdiArrAvaPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Arrêtés d'avancement (via visas basés)",'130', '453', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/dem", name="seeCarriereEdiDem")
     */
    public function CarriereEdiDemAction()
    {
        return $this->listChamp("Editions carrière / Dématérialisation des arrêtés","/traitement/carriere/edi/dem/pdf",'130', '454', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/dem/pdf", name="seeCarriereEdiDempdf")
     */
    public function CarriereEdiDemPdfAction()
    {
        return $this->listChampPdf("Editions carrière / Dématérialisation des arrêtés",'130', '454', "Traitement");
    }
}