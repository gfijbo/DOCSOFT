<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CourrierController extends ListPage
{
    /**
     *
     * @Route("/referentiel/recrutement/courrier/typ", name="seeRecrutementCourrierTyp")
     */
    public function RecrutementCourrierTypAction()
    {
        return $this->listChamp("Courrier / Types de courrier","/referentiel/recrutement/courrier/typ/pdf",'64', '305', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/courrier/typ/pdf", name="seeRecrutementCourrierTypdf")
     */
    public function RecrutementCourrierTypPdfAction()
    {
        return $this->listChampPdf("Courrier / Types de courrier",'64', '305', "Référentiel");
    }
}