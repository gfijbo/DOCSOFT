<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Prestation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BaremesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/prestation/bar/che", name="seePrestationBarChe")
     */
    public function PrestationBarCheAction()
    {
        return $this->listChamp("Barèmes / Chèques Vacances","referentiel/prestation/bar/che/pdf",'83', '348', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/bar/che/pdf", name="seePrestationBarChepdf")
     */
    public function PrestationBarChePdfAction()
    {
        return $this->listChampPdf("Barèmes / Chèques Vacances",'83', '348', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/bar/bou", name="seePrestationBarBou")
     */
    public function PrestationBarBouAction()
    {
        return $this->listChamp("Barèmes / Bourses Etudes","referentiel/prestation/bar/bou/pdf",'83', '349', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/bar/bou/pdf", name="seePrestationBarBoupdf")
     */
    public function PrestationBarBouPdfAction()
    {
        return $this->listChampPdf("Barèmes / Bourses Etudes",'83', '349', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/bar/sej", name="seePrestationBarSej")
     */
    public function PrestationBarSejAction()
    {
        return $this->listChamp("Barèmes / Séjour Enfants","referentiel/prestation/bar/sej/pdf",'83', '350', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/bar/sej/pdf", name="seePrestationBarSejpdf")
     */
    public function PrestationBarSejPdfAction()
    {
        return $this->listChampPdf("Barèmes / Séjour Enfants",'83', '350', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/bar/typ", name="seePrestationBarTyp")
     */
    public function PrestationBarTypAction()
    {
        return $this->listChamp("Barèmes / Type Séjour Enfant","referentiel/prestation/bar/typ/pdf",'83', '351', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/bar/typ/pdf", name="seePrestationBarTyppdf")
     */
    public function PrestationBarTypPdfAction()
    {
        return $this->listChampPdf("Barèmes / Type Séjour Enfant",'83', '351', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/bar/gar", name="seePrestationBarGar")
     */
    public function PrestationBarGarAction()
    {
        return $this->listChamp("Barèmes / Garde Enfant","referentiel/prestation/bar/gar/pdf",'83', '352', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/bar/gar/pdf", name="seePrestationBarGarpdf")
     */
    public function PrestationBarGarPdfAction()
    {
        return $this->listChampPdf("Barèmes / Garde Enfant",'83', '352', "Référentiel");
    }
}