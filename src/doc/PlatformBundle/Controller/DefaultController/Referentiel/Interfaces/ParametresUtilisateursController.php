<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Interfaces;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametresUtilisateursController extends ListPage
{
    /**
     *
     * @Route("/referentiel/interface/paruti", name="seeInterfaceParuti")
     */
    public function InterfaceParutiAction()
    {
        return $this->listChamp("Paramètres Utilisateurs","/referentiel/interface/paruti/pdf",'74', '331', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/interface/paruti/pdf", name="seeInterfaceParutipdf")
     */
    public function InterfaceParutiPdfAction()
    {
        return $this->listChampPdf("Paramètres Utilisateurs",'74', '331', "Référentiel");
    }
}