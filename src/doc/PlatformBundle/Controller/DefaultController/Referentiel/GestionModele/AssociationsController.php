<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AssociationsController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/ass", name="seeGestionmodeleAss")
     */
    public function GestionmodeleAssAction()
    {
        return $this->listChamp("Gestion Modèle / Associations","referentiel/gestionmodele/ass/pdf",'40', '200', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/ass/pdf", name="seeGestionmodeleAsspdf")
     */
    public function GestionmodeleAssPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Associations",'40', '200', "Référentiel");
    }
}