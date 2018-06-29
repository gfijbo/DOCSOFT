<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Absences;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class JourneeController extends ListPage
{
    /**
     *
     * @Route("/traitement/absences/jou/gen", name="seeAbsencesJouGen")
     */
    public function AbsencesJouGenAction()
    {
        return $this->listChamp("Journée de carence / Génération des journées de carence","/traitement/absences/jou/gen/pdf",'139', '489', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/jou/gen/pdf", name="seeAbsencesJouGenpdf")
     */
    public function AbsencesJouGenPdfAction()
    {
        return $this->listChampPdf("Journée de carence / Génération des journées de carence",'139', '489', "Traitement");
    }
}