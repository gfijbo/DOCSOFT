<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Prestation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DeliberationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/prestation/del/jur", name="seePrestationDelJur")
     */
    public function PrestationDelJurAction()
    {
        return $this->listChamp("Délibération / Jury de délibération","referentiel/prestation/del/jur/pdf",'85', '357', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/del/jur/pdf", name="seePrestationDelJurpdf")
     */
    public function PrestationDelJurPdfAction()
    {
        return $this->listChampPdf("Délibération / Jury de délibération",'85', '357', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/del/typ", name="seePrestationDelTyp")
     */
    public function PrestationDelTypAction()
    {
        return $this->listChamp("Délibération / Type de délibération","referentiel/prestation/del/typ/pdf",'85', '358', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/del/typ/pdf", name="seePrestationDelTyppdf")
     */
    public function PrestationDelTypPdfAction()
    {
        return $this->listChampPdf("Délibération / Type de délibération",'85', '358', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/del/dec", name="seePrestationDelDec")
     */
    public function PrestationDelDecAction()
    {
        return $this->listChamp("Délibération / Décision de délibération","referentiel/prestation/del/dec/pdf",'85', '359', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/del/dec/pdf", name="seePrestationDelDecpdf")
     */
    public function PrestationDelDecPdfAction()
    {
        return $this->listChampPdf("Délibération / Décision de délibération",'85', '359', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/del/del", name="seePrestationDelDel")
     */
    public function PrestationDelDelAction()
    {
        return $this->listChamp("Délibération /Délibération","referentiel/prestation/del/del/pdf",'85', '360', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/del/del/pdf", name="seePrestationDelDelpdf")
     */
    public function PrestationDelDelPdfAction()
    {
        return $this->listChampPdf("Délibération /Délibération",'85', '360', "Référentiel");
    }
}