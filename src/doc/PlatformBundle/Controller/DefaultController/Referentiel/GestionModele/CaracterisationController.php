<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CaracterisationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/car", name="seeGestionmodeleCar")
     */
    public function GestionmodeleCarAction()
    {
        return $this->listChamp("Gestion Modèle / Caractérisation GFI des types d'évènements","referentiel/gestionmodele/car/pdf",'39', '199', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/car/pdf", name="seeGestionmodeleCarpdf")
     */
    public function GestionmodeleCarPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Caractérisation GFI des types d'évènements",'39', '199', "Référentiel");
    }
}