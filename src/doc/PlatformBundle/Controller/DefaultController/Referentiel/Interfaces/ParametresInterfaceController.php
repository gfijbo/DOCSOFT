<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Interfaces;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametresInterfaceController extends ListPage
{
    /**
     *
     * @Route("/referentiel/interface/parint", name="seeInterfaceParint")
     */
    public function InterfaceParintAction()
    {
        return $this->listChamp("Paramètres interface (IRH)","referentiel/interface/parint/pdf",'75', '332', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/interface/parint/pdf", name="seeInterfaceParintpdf")
     */
    public function InterfaceParintPdfAction()
    {
        return $this->listChampPdf("Paramètres interface (IRH)",'75', '332', "Référentiel");
    }
}