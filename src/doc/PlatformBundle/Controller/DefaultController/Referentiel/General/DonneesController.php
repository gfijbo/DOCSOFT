<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\General;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DonneesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/general/don/pays", name="seeGeneralDonPays")
     */
    public function GeneralDonPaysAction()
    {
        return $this->listChamp("Données nationales / Pays","referentiel/general/don/pays/pdf",'14', '78', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/pays/pdf", name="seeGeneralDonPayspdf")
     */
    public function GeneralDonPaysPdfAction()
    {
        return $this->listChampPdf("Données nationales / Pays",'14', '78', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/region", name="seeGeneralDonRegion")
     */
    public function GeneralDonRegionAction()
    {
        return $this->listChamp("Données nationales / Région","referentiel/general/don/region/pdf",'14', '79', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/region/pdf", name="seeGeneralDonRegionpdf")
     */
    public function GeneralDonRegionPdfAction()
    {
        return $this->listChampPdf("Données nationales / Région",'14', '79', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/dep", name="seeGeneralDonDep")
     */
    public function GeneralDonDepAction()
    {
        return $this->listChamp("Données nationales / Département","referentiel/general/don/dep/pdf",'14', '80', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/dep/pdf", name="seeGeneralDonDeppdf")
     */
    public function GeneralDonDepPdfAction()
    {
        return $this->listChampPdf("Données nationales / Département",'14', '80', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/arr", name="seeGeneralDonArr")
     */
    public function GeneralDonArrAction()
    {
        return $this->listChamp("Données nationales / Arrondissements","referentiel/general/don/arr/pdf",'14', '81', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/arr/pdf", name="seeGeneralDonArrpdf")
     */
    public function GeneralDonArrPdfAction()
    {
        return $this->listChampPdf("Données nationales / Arrondissements",'14', '81', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/can", name="seeGeneralDonCan")
     */
    public function GeneralDonCanAction()
    {
        return $this->listChamp("Données nationales / Cantons","referentiel/general/don/arr/pdf",'14', '82', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/can/pdf", name="seeGeneralDonCanpdf")
     */
    public function GeneralDonCanPdfAction()
    {
        return $this->listChampPdf("Données nationales / Cantons",'14', '82', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/com", name="seeGeneralDonCom")
     */
    public function GeneralDonComAction()
    {
        return $this->listChamp("Données nationales / Communes","referentiel/general/don/com/pdf",'14', '83', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/com/pdf", name="seeGeneralDonCompdf")
     */
    public function GeneralDonComPdfAction()
    {
        return $this->listChampPdf("Données nationales / Communes",'14', '83', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/cod", name="seeGeneralDonCod")
     */
    public function GeneralDonCodAction()
    {
        return $this->listChamp("Données nationales / Code postale","referentiel/general/don/com/pdf",'14', '84', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/cod/pdf", name="seeGeneralDonCodpdf")
     */
    public function GeneralDonCodPdfAction()
    {
        return $this->listChampPdf("Données nationales / Code postale",'14', '84', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/dev", name="seeGeneralDonDev")
     */
    public function GeneralDonDevAction()
    {
        return $this->listChamp("Données nationales / Devise","referentiel/general/don/dev/pdf",'14', '85', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/dev/pdf", name="seeGeneralDonDevpdf")
     */
    public function GeneralDonDevPdfAction()
    {
        return $this->listChampPdf("Données nationales / Devise",'14', '85', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/ban", name="seeGeneralDonBan")
     */
    public function GeneralDonBanAction()
    {
        return $this->listChamp("Données nationales / Banque","referentiel/general/don/ban/pdf",'14', '86', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/ban/pdf", name="seeGeneralDonBanpdf")
     */
    public function GeneralDonBanPdfAction()
    {
        return $this->listChampPdf("Données nationales / Banque",'14', '86', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/gui", name="seeGeneralDonGui")
     */
    public function GeneralDonGuiAction()
    {
        return $this->listChamp("Données nationales / Guichet","referentiel/general/don/gui/pdf",'14', '87', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/gui/pdf", name="seeGeneralDonGuipdf")
     */
    public function GeneralDonGuiPdfAction()
    {
        return $this->listChampPdf("Données nationales / Guichet",'14', '87', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/bic", name="seeGeneralDonBic")
     */
    public function GeneralDonBicAction()
    {
        return $this->listChamp("Données nationales / BIC - Identification Bancaire","referentiel/general/don/bic/pdf",'14', '88', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/bic/pdf", name="seeGeneralDonBicpdf")
     */
    public function GeneralDonBicPdfAction()
    {
        return $this->listChampPdf("Données nationales / BIC - Identification Bancaire",'14', '88', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/mod", name="seeGeneralDonMod")
     */
    public function GeneralDonModAction()
    {
        return $this->listChamp("Données nationales / Modes de paiement","referentiel/general/don/mod/pdf",'14', '89', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/mod/pdf", name="seeGeneralDonModpdf")
     */
    public function GeneralDonModPdfAction()
    {
        return $this->listChampPdf("Données nationales / Modes de paiement",'14', '89', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/general/don/con", name="seeGeneralDonCon")
     */
    public function GeneralDonConAction()
    {
        return $this->listChamp("Données nationales / Convention collective","referentiel/general/don/con/pdf",'14', '90', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/general/don/con/pdf", name="seeGeneralDonConpdf")
     */
    public function GeneralDonConPdfAction()
    {
        return $this->listChampPdf("Données nationales / Convention collective",'14', '90', "Référentiel");
    }
}