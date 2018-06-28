<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SitAdministrativesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/sit/cat", name="seeCarriereSitCat")
     */
    public function CarriereSitCatAction()
    {
        return $this->listChamp("Sit. Administratives / Catégories agent","referentiel/carriere/sit/cat/pdf",'25', '131', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/cat/pdf", name="seeCarriereSitCatpdf")
     */
    public function CarriereSitCatPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Catégories agent",'25', '131', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/posadm", name="seeCarriereSitPosadm")
     */
    public function CarriereSitPosadmAction()
    {
        return $this->listChamp("Sit. Administratives / Positions administratives","referentiel/carriere/sit/posadm/pdf",'25', '132', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/posadm/pdf", name="seeCarriereSitPosadmpdf")
     */
    public function CarriereSitPosadmPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Positions administratives",'25', '132', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/possta", name="seeCarriereSitPossta")
     */
    public function CarriereSitPosstaAction()
    {
        return $this->listChamp("Sit. Administratives / Positions statutaires","referentiel/carriere/sit/possta/pdf",'25', '133', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/possta/pdf", name="seeCarriereSitPosstapdf")
     */
    public function CarriereSitPosstaPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Positions statutaires",'25', '133', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/typeve", name="seeCarriereSitTypeve")
     */
    public function CarriereSitTypeveAction()
    {
        return $this->listChamp("Sit. Administratives / Type évènements","referentiel/carriere/sit/typeve/pdf",'25', '134', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/typeve/pdf", name="seeCarriereSitPosTypevepdf")
     */
    public function CarriereSitTypevePdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Type évènements",'25', '134', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/codlib", name="seeCarriereSitCodlib")
     */
    public function CarriereSitCodlibAction()
    {
        return $this->listChamp("Sit. Administratives / Codes libres","referentiel/carriere/sit/codlib/pdf",'25', '135', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/codlib/pdf", name="seeCarriereSitCodlibpdf")
     */
    public function CarriereSitCodlibPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Codes libres",'25', '135', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/typcon", name="seeCarriereSitTypcon")
     */
    public function CarriereSitTypconAction()
    {
        return $this->listChamp("Sit. Administratives / Type contrat","referentiel/carriere/sit/typcon/pdf",'25', '136', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/typcon/pdf", name="seeCarriereSitTypconpdf")
     */
    public function CarriereSitTypconPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Type contrat",'25', '136', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/motcon", name="seeCarriereMotcon")
     */
    public function CarriereMotconAction()
    {
        return $this->listChamp("Sit. Administratives / Motif du contrat","referentiel/carriere/sit/motcon/pdf",'25', '137', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/motcon/pdf", name="seeCarriereMotconpdf")
     */
    public function CarriereMotconPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Motif du contrat",'25', '137', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/carriere/sit/tau", name="seeCarriereSitTau")
     */
    public function CarriereSitTauAction()
    {
        return $this->listChamp("Sit. Administratives / Taux par code temps","referentiel/carriere/sit/tau/pdf",'25', '138', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/tau/pdf", name="seeCarriereSitTaupdf")
     */
    public function CarriereSitTauPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Taux par code temps",'25', '138', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/del", name="seeCarriereSitDel")
     */
    public function CarriereSitDelAction()
    {
        return $this->listChamp("Sit. Administratives / Délai de prévenance","referentiel/carriere/sit/del/pdf",'25', '139', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/sit/del/pdf", name="seeCarriereSitDelpdf")
     */
    public function CarriereSitDelPdfAction()
    {
        return $this->listChampPdf("Sit. Administratives / Délai de prévenance",'25', '139', "Référentiel");
    }
}