<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ClotureAnnController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/cloann/ini", name="seeRemunerationCloannIni")
     */
    public function RemunerationCloannIniAction()
    {
        return $this->listChamp("Clôture annuelle / Initialisation des cumuls annuels","traitement/remuneration/cloann/in/pdf",'151', '574', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/cloann/in/pdf", name="seeRemunerationCloannInipdf")
     */
    public function RemunerationCloannIniPdfAction()
    {
        return $this->listChampPdf("Clôture annuelle / Initialisation des cumuls annuels",'151', '574', "Traitement");
    }
}