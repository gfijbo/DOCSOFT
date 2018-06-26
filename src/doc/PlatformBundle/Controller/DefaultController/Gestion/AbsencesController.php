<?php
// src\doc\PlatformBundle\Controller\AbsencesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AbsencesController extends ListPage
{
    /**
     *
     * @Route("/gestion/absences/maladies", name="seeabsencesMaladies")
     */
    public function SeeabsencesMaladiesAction()
    {
        return $this->listChamp("Absences / Maladies","gestion/absences/maladies/pdf",'5', '11',"Gestion", "5");
    }
    /**
     *
     * @Route("/gestion/absences/maladies/pdf", name="seeabsencesMaladiesPdf")
     */
    public function SeeabsencesMaladiesPdfAction()
    {
        return $this->listChampPdf("Absences / Maladies",'5', '11',"Gestion");
    }
    /**
     *
     * @Route("/gestion/absences/maternites", name="seeabsencesMaternites")
     */
    public function SeeabsencesMaternitesAction()
    {
        return $this->listChamp("Absences / Maternites","gestion/absences/maternites/pdf",'5', '48',"Gestion", "5");
    }
    /**
     *
     * @Route("/gestion/absences/maternites/pdf", name="seeabsencesMaternitesPdf")
     */
    public function SeeabsencesMaternitesPdfAction()
    {
        return $this->listChampPdf("Absences / Maternites",'5', '48',"Gestion");
    }
    /**
     *
     * @Route("/gestion/absences/adoptions", name="seeabsencesAdoptions")
     */
    public function SeeabsencesAdoptionsAction()
    {
        return $this->listChamp("Absences / Adoptions","gestion/absences/adoptions/pdf",'5', '49',"Gestion", "5");
    }
    /**
     *
     * @Route("/gestion/absences/adoptions/pdf", name="seeabsencesAdoptionsPdf")
     */
    public function SeeabsencesAdoptionsPdfAction()
    {
        return $this->listChampPdf("Absences / Adoptions",'5', '49',"Gestion");
    }
    
    /**
     *
     * @Route("/gestion/absences/autarr", name="seeabsencesAutarr")
     */
    public function SeeabsencesAutarrAction()
    {
        return $this->listChamp("Absences / Autres Ar.","gestion/absences/autarr/pdf",'5', '50',"Gestion", "5");
    }
    
    /**
     *
     * @Route("/gestion/absences/autarr/pdf", name="seeabsencesAutarrsPdf")
     */
    public function SeeabsencesAdoptioansPdfAction()
    {
        return $this->listChampPdf("Absences / Autres Ar.",'5', '50',"Gestion");
    }
    /**
     *
     * @Route("/gestion/absences/droits", name="seeabsencesDroits")
     */
    public function SeeabsencesDroitsAction()
    {
        return $this->listChamp("Absences / Droits","gestion/absences/droits/pdf",'5', '51',"Gestion", "5");
    }
    /**
     *
     * @Route("/gestion/absences/droits/pdf", name="seeabsencesDroitsPdf")
     */
    public function SeeabsencesDroitsPdfAction()
    {
        return $this->listChampPdf("Absences / Droits",'5', '51',"Gestion");
    }
    
    /**
     *
     * @Route("/gestion/absences/acctra", name="seeabsencesAcctra")
     */
    public function SeeabsencesAcctraAction()
    {
        return $this->listChamp("Absences / Accidents du travail","gestion/absences/acctra/pdf",'5', '52',"Gestion", "5");
    }
    
    /**
     *
     * @Route("/gestion/absences/acctra/pdf", name="seeabsencesAcctraPdf")
     */
    public function SeeabsencesAcctrasPdfAction()
    {
        return $this->listChampPdf("Absences / Accidents du travail",'5', '52',"Gestion");
    }
    
    /**
     *
     * @Route("/gestion/absences/calmal", name="seeabsencesCalmal")
     */
    public function SeeabsencesCalmalAction()
    {
        return $this->listChamp("Absences / Cal. maladie","gestion/absences/calmal/pdf",'5', '53',"Gestion", "5");
    }
    
    /**
     *
     * @Route("/gestion/absences/calmal/pdf", name="seeabsencesCalmalPdf")
     */
    public function SeeabsencesCalmalPdfAction()
    {
        return $this->listChampPdf("Absences / Cal. maladie",'5', '53',"Gestion");
    }
    
    /**
     *
     * @Route("/gestion/absences/gescet", name="seeabsencesgescet")
     */
    public function SeeabsencesGescetAction()
    {
        return $this->listChamp("Absences / Gestion CET","gestion/absences/gescet/pdf",'5', '54',"Gestion", "5");
    }
    
    /**
     *
     * @Route("/gestion/absences/gescet/pdf", name="seeabsencesGescetPdf")
     */
    public function SeeabsencesGescetPdfAction()
    {
        return $this->listChampPdf("Absences / Gestion CET",'5', '54',"Gestion");
    }
    
    /**
     *
     * @Route("/gestion/absences/sitdif", name="seeabsencesSitdif")
     */
    public function SeeabsencesSitdifAction()
    {
        return $this->listChamp("Absences / Situation DIF","gestion/absences/sitdif/pdf",'5', '55',"Gestion", "5");
    }
    
    /**
     *
     * @Route("/gestion/absences/sitdif/pdf", name="seeabsencesSitdifPdf")
     */
    public function SeeabsencesSitdifPdfAction()
    {
        return $this->listChampPdf("Absences / Situation DIF",'5', '55',"Gestion");
    }
    
    /**
     *
     * @Route("/gestion/absences/sitcpa", name="seeabsencesSitcpa")
     */
    public function SeeabsencesSitcpaAction()
    {
        return $this->listChamp("Absences / Situation CPA","gestion/absences/sitcpa/pdf",'5', '56',"Gestion", "5");
    }
    
    /**
     *
     * @Route("/gestion/absences/sitcpa/pdf", name="seeabsencesSitcpaPdf")
     */
    public function SeeabsencesSitcpaPdfAction()
    {
        return $this->listChampPdf("Absences / Situation CPA",'5', '56',"Gestion");
    }
}