<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Suppleance;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AppreciationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/suppleance/app", name="seeSuppleanceApp")
     */
    public function SuppleanceAppAction()
    {
        return $this->listChamp("Appréciation","referentiel/suppleance/app/pdf",'98', '371', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/suppleance/app/pdf", name="seeSuppleanceApppdf")
     */
    public function SuppleanceAppPdfAction()
    {
        return $this->listChampPdf("Appréciation",'98', '371', "Référentiel");
    }
}