<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Prestation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PiecesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/prestation/pie/def", name="seePrestationPieDef")
     */
    public function PrestationPieDefAction()
    {
        return $this->listChamp("Pièces / Définition des Pièces","referentiel/prestation/pie/def/pdf",'82', '346', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/pie/def/pdf", name="seePrestationPieDefpdf")
     */
    public function PrestationPieDefPdfAction()
    {
        return $this->listChampPdf("Pièces / Définition des Pièces",'82', '346', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/pie/don", name="seePrestationPieDon")
     */
    public function PrestationPieDonAction()
    {
        return $this->listChamp("Pièces / Données associées aux Pièces","referentiel/prestation/pie/don/pdf",'82', '347', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/pie/don/pdf", name="seePrestationPieDonpdf")
     */
    public function PrestationPieDonPdfAction()
    {
        return $this->listChampPdf("Pièces / Données associées aux Pièces",'82', '347', "Référentiel");
    }
}