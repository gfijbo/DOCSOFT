<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Rapport;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ChargementController extends ListPage
{
    /**
     *
     * @Route("/traitement/rapport/cha", name="seeRapportCha")
     */
    public function RapportChaAction()
    {
        return $this->listChamp("Chargement Paramètres","traitement/rapport/cha/pdf",'232', '747', "Traitement");
    }
    /**
     *
     * @Route("/traitement/rapport/cha/pdf", name="seeRapportChapdf")
     */
    public function RapportChaPdfAction()
    {
        return $this->listChampPdf("Chargement Paramètres",'232', '747', "Traitement");
    }
}