<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Prestation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametresController extends ListPage
{
    /**
     *
     * @Route("/referentiel/prestation/par", name="seePrestationPar")
     */
    public function PrestationParAction()
    {
        return $this->listChamp("Paramètres / Paramètres","referentiel/prestation/par/pdf",'81', '345', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/par/pdf", name="seePrestationParpdf")
     */
    public function PrestationParPdfAction()
    {
        return $this->listChampPdf("Paramètres / Paramètres",'81', '345', "Référentiel");
    }
}