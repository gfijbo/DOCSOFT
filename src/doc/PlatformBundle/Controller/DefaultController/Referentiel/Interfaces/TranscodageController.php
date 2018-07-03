<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Interfaces;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TranscodageController extends ListPage
{
    /**
     *
     * @Route("/referentiel/interface/traago", name="seeInterfaceTraago")
     */
    public function InterfaceTraagoAction()
    {
        return $this->listChamp("Transcodage AGORA/ASTRE","referentiel/interface/parint/pdf",'76', '333', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/interface/traago/pdf", name="seeInterfaceTraagopdf")
     */
    public function InterfaceTraagoPdfAction()
    {
        return $this->listChampPdf("Transcodage AGORA/ASTRE",'76', '333', "Référentiel");
    }
}