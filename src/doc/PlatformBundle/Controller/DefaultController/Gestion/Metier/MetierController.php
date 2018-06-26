<?php
// src\doc\PlatformBundle\Controller\DefaultController\Gestion\Effectif\MetiersController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Metier;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MetierController extends ListPage
{
    /**
     *
     * @Route("/gestion/metier/metier", name="seeMetierMetier")
     */
    public function MetierMetierAction()
    {
        return $this->listChamp("Métier / Métier","/gestion/metier/metier/pdf",'265', '74', "Gestion", "265");
    }
    /**
     *
     * @Route("/gestion/metier/metier/pdf", name="seeMetierMetierpdf")
     */
    public function MetierMetierPdfAction()
    {
        return $this->listChampPdf("Metier/metier",'265', '74', "Gestion", "265");
    }
}