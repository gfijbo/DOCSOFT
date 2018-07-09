<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametrageController extends ListPage
{
    /**
     *
     * @Route("/referentiel/recrutement/par/parrec", name="seeRecrutementParParrec")
     */
    public function RecrutementParParrecAction()
    {
        return $this->listChamp("Paramétrage / Paramètres recrutement (DE)","referentiel/recrutement/par/parrec/pdf",'66', '309', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/par/parrec/pdf", name="seeRecrutementParParrecpdf")
     */
    public function RecrutementParParrecPdfAction()
    {
        return $this->listChampPdf("Paramétrage / Paramètres recrutement (DE)",'66', '309', "Référentiel");
    }
}