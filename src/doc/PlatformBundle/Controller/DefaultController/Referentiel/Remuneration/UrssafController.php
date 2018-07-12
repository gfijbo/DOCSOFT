<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UrssafController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/urssaf/par", name="seeRemunerationUrssafPar")
     */
    public function RemunerationUrssafParAction()
    {
        return $this->listChamp("Urssaf / Paramétrage","referentiel/remuneration/urssaf/par/pdf",'59', '286', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/urssaf/par/pdf", name="seeRemunerationUrssafParpdf")
     */
    public function RemunerationUrssafParPdfAction()
    {
        return $this->listChampPdf("Urssaf / Paramétrage",'59', '286', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/urssaf/urssaf", name="seeRemunerationUrssafUrssaf")
     */
    public function RemunerationUrssafUrssafAction()
    {
        return $this->listChamp("Urssaf / URSSAF","referentiel/remuneration/urssaf/urssaf/pdf",'59', '287', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/urssaf/urssaf/pdf", name="seeRemunerationUrssafUrssafpdf")
     */
    public function RemunerationUrssafUrssafPdfAction()
    {
        return $this->listChampPdf("Urssaf / URSSAF",'59', '287', "Référentiel");
    }
}