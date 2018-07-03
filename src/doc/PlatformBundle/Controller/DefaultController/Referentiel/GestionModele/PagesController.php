<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/pag", name="seeGestionmodelePag")
     */
    public function GestionmodelePagAction()
    {
        return $this->listChamp("Gestion Modèle / Pages d'origine","referentiel/gestionmodele/pag/pdf",'36', '196', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/pag/pdf", name="seeGestionmodelePagpdf")
     */
    public function GestionmodelePagPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Pages d'origine",'36', '196', "Référentiel");
    }
}