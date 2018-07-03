<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LibrairieController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/libcha", name="seeGestionmodeleLibcha")
     */
    public function GestionmodeleLibchaAction()
    {
        return $this->listChamp("Gestion Modèle / Librairie champs fusion","referentiel/gestionmodele/libcha/pdf",'43', '203', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/libcha/pdf", name="seeGestionmodeleLibchapdf")
     */
    public function GestionmodeleLibchaPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Librairie champs fusion",'43', '203', "Référentiel");
    }
}