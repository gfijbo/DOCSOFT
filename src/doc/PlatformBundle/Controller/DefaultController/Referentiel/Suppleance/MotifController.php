<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Suppleance;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MotifController extends ListPage
{
    /**
     *
     * @Route("/referentiel/suppleance/mot", name="seeSuppleanceMot")
     */
    public function SuppleanceMotAction()
    {
        return $this->listChamp("Motif de suppléance","referentiel/suppleance/mot/pdf",'97', '370', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/suppleance/mot/pdf", name="seeSuppleanceMotpdf")
     */
    public function SuppleanceMotPdfAction()
    {
        return $this->listChampPdf("Motif de suppléance",'97', '370', "Référentiel");
    }
}