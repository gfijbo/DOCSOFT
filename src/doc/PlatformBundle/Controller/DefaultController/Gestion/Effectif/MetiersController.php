<?php 
// src\doc\PlatformBundle\Controller\DefaultController\Gestion\Effectif\MetiersController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Effectif;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MetiersController extends ListPage
{
    /**
     *
     * @Route("/gestion/effectif/metiers", name="seeEffectifMetiers")
     */
    public function EffectifMetiersAction()
    {
        return $this->listChamp("Effectif / Métiers","/gestion/effectif/metiers/pdf",'264', '73', "Gestion", "264");
    }
    /**
     *
     * @Route("/gestion/effectif/metiers/pdf", name="seeEffectifMetierspdf")
     */
    public function EffectifMetiersPdfAction()
    {
        return $this->listChampPdf("Effectif / Métiers",'264', '73', "Gestion", "264");
    }
}