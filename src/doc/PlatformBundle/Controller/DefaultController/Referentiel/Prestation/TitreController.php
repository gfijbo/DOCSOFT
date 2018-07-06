<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Prestation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TitreController extends ListPage
{
    /**
     *
     * @Route("/referentiel/prestation/tit/str", name="seePrestationTitStr")
     */
    public function PrestationTitStrAction()
    {
        return $this->listChamp("Titres Repas / Structure Livraison","referentiel/prestation/tit/str/pdf",'86', '357', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/tit/str/pdf", name="seePrestationTitStrpdf")
     */
    public function PrestationTitStrPdfAction()
    {
        return $this->listChampPdf("Titres Repas / Structure Livraison",'86', '357', "Référentiel");
    }
}