<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ComplementFusionController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/comfus", name="seeGestionmodeleComfus")
     */
    public function GestionmodeleComfusAction()
    {
        return $this->listChamp("Gestion Modèle / Complément fusion","referentiel/gestionmodele/comfus/pdf",'41', '201', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/comfus/pdf", name="seeGestionmodeleComfuspdf")
     */
    public function GestionmodeleComfusPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Complément fusion",'41', '201', "Référentiel");
    }
}