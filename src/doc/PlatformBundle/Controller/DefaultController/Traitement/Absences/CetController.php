<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Absences;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class CetController extends ListPage
{
    /**
     *
     * @Route("/traitement/absences/cet/edi", name="seeAbsencesCetEdi")
     */
    public function AbsencesCetEdiAction()
    {
        return $this->listChamp("CET / Edition Situation CET","/traitement/absences/edi/arr/pdf",'138', '488', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/cet/edi/pdf", name="seeAbsencesCetEdipdf")
     */
    public function AbsencesCetEdiPdfAction()
    {
        return $this->listChampPdf("CET / Edition Situation CET",'138', '488', "Traitement");
    }
}