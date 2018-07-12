<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Suppleance;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class VoeuController extends ListPage
{
    /**
     *
     * @Route("/referentiel/suppleance/voe", name="seeSuppleanceVoe")
     */
    public function SuppleanceVoeAction()
    {
        return $this->listChamp("Vœu géographique","referentiel/suppleance/voe/pdf",'99', '372', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/suppleance/voe/pdf", name="seeSuppleanceVoepdf")
     */
    public function SuppleanceVoePdfAction()
    {
        return $this->listChampPdf("Vœu géographique",'99', '372', "Référentiel");
    }
}