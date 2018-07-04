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
}