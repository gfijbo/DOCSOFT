<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\N4ds;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TraitementController extends ListPage
{
    /**
     *
     * @Route("/traitement/n4ds/tra/seldef", name="seeN4dsTraSeldef")
     */
    public function N4dsTraSeldefAction()
    {
        return $this->listChamp("Traitement / Sélection des agents N4DS / Définition d'une sélection","traitement/n4ds/tra/seldef/pdf",'212', '692', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/seldef/pdf", name="seeN4dsTraSeldefpdf")
     */
    public function N4dsTraSeldefPdfAction()
    {
        return $this->listChampPdf("Traitement / Sélection des agents N4DS / Définition d'une sélection",'212', '692', "Traitement");
    }
}