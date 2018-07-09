<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OffreController extends ListPage
{
    /**
     *
     * @Route("/referentiel/recrutement/offre/mot", name="seeRecrutementOffreMot")
     */
    public function RecrutementOffreMotAction()
    {
        return $this->listChamp("Offre / Motif Offre","referentiel/recrutement/offre/mot/pdf",'65', '308', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/offre/mot/pdf", name="seeRecrutementOffreMotpdf")
     */
    public function RecrutementOffreMotPdfAction()
    {
        return $this->listChampPdf("Offre / Motif Offre",'65', '308', "Référentiel");
    }
}