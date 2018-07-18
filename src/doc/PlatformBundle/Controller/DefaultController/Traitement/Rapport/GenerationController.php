<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Rapport;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class GenerationController extends ListPage
{
    /**
     *
     * @Route("/traitement/rapport/gen", name="seeRapportGen")
     */
    public function RapportGenAction()
    {
        return $this->listChamp("Génération du Fichier","traitement/rapport/gen/pdf",'235', '750', "Traitement");
    }
    /**
     *
     * @Route("/traitement/rapport/gen/pdf", name="seeRapportGenpdf")
     */
    public function RapportGenPdfAction()
    {
        return $this->listChampPdf("Génération du Fichier",'235', '750', "Traitement");
    }
}