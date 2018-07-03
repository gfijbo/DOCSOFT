<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ModelesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/mod", name="seeGestionmodeleMod")
     */
    public function GestionmodeleModAction()
    {
        return $this->listChamp("Gestion Modèle / Modèles de document","referentiel/gestionmodele/mod/pdf",'37', '197', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/mod/pdf", name="seeGestionmodeleModpdf")
     */
    public function GestionmodeleModPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Modèles de document",'37', '197', "Référentiel");
    }
}