<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Prestation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FusionController extends ListPage
{
    /**
     *
     * @Route("/referentiel/prestation/fus/typ", name="seePrestationFusTyp")
     */
    public function PrestationFusTypAction()
    {
        return $this->listChamp("Fusion / Types de courrier","referentiel/prestation/fus/typ/pdf",'84', '353', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/fus/typ/pdf", name="seePrestationFusTyppdf")
     */
    public function PrestationFusTypPdfAction()
    {
        return $this->listChampPdf("Fusion / Types de courrier",'84', '353', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/fus/edi", name="seePrestationFusEdi")
     */
    public function PrestationFusEdiAction()
    {
        return $this->listChamp("Fusion / Editions conjointes","referentiel/prestation/fus/edi/pdf",'84', '354', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/fus/edi/pdf", name="seePrestationFusEdipdf")
     */
    public function PrestationFusEdiPdfAction()
    {
        return $this->listChampPdf("Fusion / Editions conjointes",'84', '354', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/fus/com", name="seePrestationFusCom")
     */
    public function PrestationFusComAction()
    {
        return $this->listChamp("Fusion / Complément courrier","referentiel/prestation/fus/com/pdf",'84', '355', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/fus/com/pdf", name="seePrestationFusCompdf")
     */
    public function PrestationFusComPdfAction()
    {
        return $this->listChampPdf("Fusion / Complément courrier",'84', '355', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/fus/lib", name="seePrestationFusLib")
     */
    public function PrestationFusLibAction()
    {
        return $this->listChamp("Fusion / Librairie champs fusion","referentiel/prestation/fus/lib/pdf",'84', '356', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/fus/lib/pdf", name="seePrestationFusLibpdf")
     */
    public function PrestationFusLibPdfAction()
    {
        return $this->listChampPdf("Fusion / Librairie champs fusion",'84', '356', "Référentiel");
    }
}