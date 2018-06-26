<?php
// src\doc\PlatformBundle\Controller\DefaultController\Gestion\Effectif\MetiersController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Suppleance;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SuppleanceController extends ListPage
{
    /**
     *
     * @Route("/gestion/suppleance/suppleance", name="seeSuppleanceSuppleance")
     */
    public function SuppleanceSuppleanceAction()
    {
        return $this->listChamp("Suppléance / Suppléance","/gestion/suppleance/suppleance/pdf",'267', '76', "Gestion", "267");
    }
    /**
     *
     * @Route("/gestion/suppleance/suppleance/pdf", name="seeSuppleanceSuppleancepdf")
     */
    public function SuppleanceSuppleancePdfAction()
    {
        return $this->listChampPdf("Suppléance / Suppléance",'267', '76', "Gestion", "267");
    }
}