<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TicketsController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/tic/cod", name="seeRemunerationTicCod")
     */
    public function RemunerationTicCodAction()
    {
        return $this->listChamp("Tickets restaurants / Code ticket","referentiel/remuneration/tic/cod/pdf",'55', '277', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/tic/cod/pdf", name="seeRemunerationTicCodpdf")
     */
    public function RemunerationTicCodPdfAction()
    {
        return $this->listChampPdf("Tickets restaurants / Code ticket",'55', '277', "Référentiel");
    }
}