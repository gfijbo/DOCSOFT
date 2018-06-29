<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Absences;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class SaisiesController extends ListPage
{
    /**
     *
     * @Route("/traitement/absences/sai/con/arr", name="seeAbsencesSaiArr")
     */
    public function AbsencesSaiArrAction()
    {
        return $this->listChamp("Saisies/Consultations / Arrêts Agents","/traitement/absences/sai/con/arr/pdf",'135', '477', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/arr/pdf", name="seeAbsencesSaiArrpdf")
     */
    public function AbsencesSaiArrPdfAction()
    {
        return $this->listChampPdf("Saisies/Consultations / Arrêts Agents",'135', '477', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/dro", name="seeAbsencesSaiDro")
     */
    public function AbsencesSaiDroAction()
    {
        return $this->listChamp("Saisies/Consultations / Droits à congé","/traitement/absences/sai/con/dro/pdf",'135', '478', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/dro/pdf", name="seeAbsencesSaiDropdf")
     */
    public function AbsencesSaiDroPdfAction()
    {
        return $this->listChampPdf("Saisies/Consultations / Droits à congé",'135', '478', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/rec", name="seeAbsencesSaiRec")
     */
    public function AbsencesSaiRecAction()
    {
        return $this->listChamp("Saisies/Consultations / Recalcul congés H.S.","/traitement/absences/sai/con/rec/pdf",'135', '479', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/rec/pdf", name="seeAbsencesSaiRecpdf")
     */
    public function AbsencesSaiRecPdfAction()
    {
        return $this->listChampPdf("Saisies/Consultations / Recalcul congés H.S.",'135', '479', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/cha", name="seeAbsencesSaiCha")
     */
    public function AbsencesSaiChaAction()
    {
        return $this->listChamp("Saisies/Consultations / Changement régime","/traitement/absences/sai/con/cha/pdf",'135', '480', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/cha/pdf", name="seeAbsencesSaiChapdf")
     */
    public function AbsencesSaiChaPdfAction()
    {
        return $this->listChampPdf("Saisies/Consultations / Changement régime",'135', '480', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/gen", name="seeAbsencesSaiGen")
     */
    public function AbsencesSaiGenAction()
    {
        return $this->listChamp("Saisies/Consultations / Génération calendriers","/traitement/absences/sai/con/gen/pdf",'135', '481', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/gen/pdf", name="seeAbsencesSaiGenpdf")
     */
    public function AbsencesSaiGenPdfAction()
    {
        return $this->listChampPdf("Saisies/Consultations / Génération calendriers",'135', '481', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/rem", name="seeAbsencesSaiRem")
     */
    public function AbsencesSaiRemAction()
    {
        return $this->listChamp("Saisies/Consultations / Remplacements","/traitement/absences/sai/con/rem/pdf",'135', '482', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/rem/pdf", name="seeAbsencesSaiRempdf")
     */
    public function AbsencesSaiRemPdfAction()
    {
        return $this->listChampPdf("Saisies/Consultations / Remplacements",'135', '482', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/pla", name="seeAbsencesSaiPla")
     */
    public function AbsencesSaiPlaAction()
    {
        return $this->listChamp("Saisies/Consultations / Planning Arrêts","/traitement/absences/sai/con/pla/pdf",'135', '483', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/sai/con/pla/pdf", name="seeAbsencesSaiPlapdf")
     */
    public function AbsencesSaiPlaPdfAction()
    {
        return $this->listChampPdf("Saisies/Consultations / Planning Arrêts",'135', '483', "Traitement");
    }
}