<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Absences;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CalendrierController extends ListPage
{
    /**
     *
     * @Route("/referentiel/absences/cal/cal", name="seeAbsencesCalCal")
     */
    public function AbsencesCalCalAction()
    {
        return $this->listChamp("Calendrier / Calendrier","referentiel/absences/cal/cal/pdf",'19', '112', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/cal/cal/pdf", name="seeAbsencesCalCalpdf")
     */
    public function AbsencesCalCalPdfAction()
    {
        return $this->listChampPdf("Calendrier / Calendrier",'19', '112', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/cal/rep", name="seeAbsencesCalRep")
     */
    public function AbsencesCalRepAction()
    {
        return $this->listChamp("Calendrier / Repos hebdomadaire","referentiel/absences/cal/rep/pdf",'19', '113', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/cal/rep/pdf", name="seeAbsencesCalReppdf")
     */
    public function AbsencesCalRepPdfAction()
    {
        return $this->listChampPdf("Calendrier / Repos hebdomadaire",'19', '113', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/cal/jou", name="seeAbsencesCalJou")
     */
    public function AbsencesCalJouAction()
    {
        return $this->listChamp("Calendrier / Jours fériés","referentiel/absences/cal/jou/pdf",'19', '114', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/cal/jou/pdf", name="seeAbsencesCalJoupdf")
     */
    public function AbsencesCalJouPdfAction()
    {
        return $this->listChampPdf("Calendrier / Jours fériés",'19', '114', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/cal/hor", name="seeAbsencesCalHor")
     */
    public function AbsencesCalHorAction()
    {
        return $this->listChamp("Calendrier / Horaires","referentiel/absences/cal/hor/pdf",'19', '115', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/cal/hor/pdf", name="seeAbsencesCalHorpdf")
     */
    public function AbsencesCalHorPdfAction()
    {
        return $this->listChampPdf("Calendrier / Horaires",'19', '115', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/cal/calarr", name="seeAbsencesCalCalarr")
     */
    public function AbsencesCalCalarrAction()
    {
        return $this->listChamp("Calendrier / Calendrier arrêt","referentiel/absences/cal/calarr/pdf",'19', '116', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/cal/calarr/pdf", name="seeAbsencesCalCalarrpdf")
     */
    public function AbsencesCalCalarrPdfAction()
    {
        return $this->listChampPdf("Calendrier / Calendrier arrêt",'19', '116', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/cal/gen", name="seeAbsencesCalGen")
     */
    public function AbsencesCalGenAction()
    {
        return $this->listChamp("Calendrier / Génération calendriers","referentiel/absences/cal/gen/pdf",'19', '117', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/cal/gen/pdf", name="seeAbsencesCalGenpdf")
     */
    public function AbsencesCalGenPdfAction()
    {
        return $this->listChampPdf("Calendrier / Génération calendriers",'19', '117', "Référentiel");
    }
}