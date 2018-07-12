<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Suppleance;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategorieController extends ListPage
{
    /**
     *
     * @Route("/referentiel/suppleance/cat", name="seeSuppleanceCat")
     */
    public function SuppleanceCatAction()
    {
        return $this->listChamp("Catégorie de suppléant","referentiel/suppleance/cat/pdf",'96', '369', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/suppleance/cat/pdf", name="seeSuppleanceCatpdf")
     */
    public function SuppleanceCatPdfAction()
    {
        return $this->listChampPdf("Catégorie de suppléant",'96', '369', "Référentiel");
    }
}