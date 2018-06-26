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
        return $this->listChamp("Données nationales / Pays","referentiel/general/don/pays/pdf",'14', '78', "Référentiel", "14");
    }
    /**
     *
     * @Route("/referentiel/general/don/pays/pdf", name="seeGeneralDonPayspdf")
     */
    public function GeneralDonPaysPdfAction()
    {
        return $this->listChampPdf("Données nationales / Pays",'14', '78', "Référentiel", "14", "Référentiel");
    }
}