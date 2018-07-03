<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionModele;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TypeController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionmodele/typ", name="seeGestionmodeleTyp")
     */
    public function GestionmodeleTypAction()
    {
        return $this->listChamp("Gestion Modèle / Type évènements","referentiel/gestionmodele/typ/pdf",'38', '198', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionmodele/typ/pdf", name="seeGestionmodeleTyppdf")
     */
    public function GestionmodeleTypPdfAction()
    {
        return $this->listChampPdf("Gestion Modèle / Type évènements",'38', '198', "Référentiel");
    }
}