<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TdsController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/tds/par", name="seeRemunerationTds")
     */
    public function RemunerationRubComAction()
    {
        return $this->listChamp("TDS / Paramètres TDS","referentiel/remuneration/tds/par/pdf",'54', '276', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/tds/par/pdf", name="seeRemunerationRubCompdf")
     */
    public function RemunerationRubComPdfAction()
    {
        return $this->listChampPdf("TDS / Paramètres TDS",'54', '276', "Référentiel");
    }
}