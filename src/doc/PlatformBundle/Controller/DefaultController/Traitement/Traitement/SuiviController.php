<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Traitement;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class SuiviController extends ListPage
{
    /**
     *
     * @Route("/traitement/groupes/sui", name="seeRemunerationGroupesSui")
     */
    public function RemunerationGroupesSuiAction()
    {
        return $this->listChamp("Suivi","traitement/groupes/sui/pdf",'179', '643', "Traitement");
    }
    /**
     *
     * @Route("/traitement/groupes/sui/pdf", name="seeRemunerationGroupesSuipdf")
     */
    public function RemunerationGroupesSuiPdfAction()
    {
        return $this->listChampPdf("Suivi",'179', '643', "Traitement");
    }
}