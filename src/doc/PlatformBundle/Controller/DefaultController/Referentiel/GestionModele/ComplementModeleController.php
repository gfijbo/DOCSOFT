<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ComplementModeleController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/commod", name="seeGestionmodeleCommod")
     */
    public function GestionmodeleCommodAction()
    {
        return $this->listChamp("Gestion Modèle / Complément modèle","referentiel/gestionmodele/commod/pdf",'42', '202', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/commod/pdf", name="seeGestionmodeleCommodpdf")
     */
    public function GestionmodeleCommodPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Complément modèle",'42', '202', "Référentiel");
    }
}