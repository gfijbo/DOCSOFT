<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\GestionFichier;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TypeController extends ListPage
{
    /**
     *
     * @Route("/referentiel/gestionfichier/p", name="seeGestionfichierP")
     */
    public function GestionfichierPAction()
    {
        return $this->listChamp("Type de document","referentiel/gestionfichier/p/pdf",'101', '373', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/gestionfichier/p/pdf", name="seeGestionfichierPpdf")
     */
    public function GestionfichierPPdfAction()
    {
        return $this->listChampPdf("Type de document",'101', '373', "Référentiel");
    }
}