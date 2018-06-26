<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\GeneralController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel;

use doc\PlatformBundle\Controller\ListPage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;



class GeneralController extends ListPage
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