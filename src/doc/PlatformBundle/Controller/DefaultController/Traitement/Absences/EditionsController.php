<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Absences;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class EditionsController extends ListPage
{
    /**
     *
     * @Route("/traitement/absences/edi/arr", name="seeAbsencesEdiArr")
     */
    public function AbsencesEdiArrAction()
    {
        return $this->listChamp("Editions absences / Arrêts de l'agent","/traitement/absences/edi/arr/pdf",'136', '484', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/edi/arr/pdf", name="seeAbsencesEdiArrpdf")
     */
    public function AbsencesEdiArrPdfAction()
    {
        return $this->listChampPdf("Editions absences / Arrêts de l'agent",'136', '484', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/edi/dro", name="seeAbsencesEdiDro")
     */
    public function AbsencesEdiDroAction()
    {
        return $this->listChamp("Editions absences / Droits aux absences par agent","/traitement/absences/edi/dro/pdf",'136', '485', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/edi/dro/pdf", name="seeAbsencesEdiDropdf")
     */
    public function AbsencesEdiDroPdfAction()
    {
        return $this->listChampPdf("Editions absences / Droits aux absences par agent",'136', '485', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/edi/sta", name="seeAbsencesEdiSta")
     */
    public function AbsencesEdiStaAction()
    {
        return $this->listChamp("Editions absences / Statistiques AT","/traitement/absences/edi/sta/pdf",'136', '486', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/edi/sta/pdf", name="seeAbsencesEdiStapdf")
     */
    public function AbsencesEdiStaPdfAction()
    {
        return $this->listChampPdf("Editions absences / Statistiques AT",'136', '486', "Traitement");
    }
}