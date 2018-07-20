<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class MandatementController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/man/cal", name="seeRemunerationManCal")
     */
    public function RemunerationManCalAction()
    {
        return $this->listChamp("Mandatement / Calcul mandatement","traitement/remuneration/man/cal/pdf",'146', '535', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/cal/pdf", name="seeRemunerationManCalpdf")
     */
    public function RemunerationManCalPdfAction()
    {
        return $this->listChampPdf("Mandatement / Calcul mandatement",'146', '535', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/man/promanact", name="seeRemunerationManPromanact")
     */
    public function RemunerationManPromanactAction()
    {
        return $this->listChamp("Mandatement / Prop. Mandats (Actuate)","traitement/remuneration/man/promanact/pdf",'146', '536', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/promanact/pdf", name="seeRemunerationManPromanactpdf")
     */
    public function RemunerationManPromanactPdfAction()
    {
        return $this->listChampPdf("Mandatement / Prop. Mandats (Actuate)",'146', '536', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/man/proman", name="seeRemunerationManProman")
     */
    public function RemunerationManPromanAction()
    {
        return $this->listChamp("Mandatement / Prop. Mandats","traitement/remuneration/man/proman/pdf",'146', '537', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/proman/pdf", name="seeRemunerationManPromanpdf")
     */
    public function RemunerationManPromanPdfAction()
    {
        return $this->listChampPdf("Mandatement / Prop. Mandats",'146', '537', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/man/mis", name="seeRemunerationManMis")
     */
    public function RemunerationManMisAction()
    {
        return $this->listChamp("Mandatement / Mise à jour des mandats de paie","traitement/remuneration/man/mis/pdf",'146', '538', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/mis/pdf", name="seeRemunerationManMispdf")
     */
    public function RemunerationManMisPdfAction()
    {
        return $this->listChampPdf("Mandatement / Mise à jour des mandats de paie",'146', '538', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/man/calrep", name="seeRemunerationManCalrep")
     */
    public function RemunerationManCalrepAction()
    {
        return $this->listChamp("Mandatement / Calcul répartition affectation","traitement/remuneration/man/calrep/pdf",'146', '539', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/calrep/pdf", name="seeRemunerationManCalreppdf")
     */
    public function RemunerationManCalrepPdfAction()
    {
        return $this->listChampPdf("Mandatement / Calcul répartition affectation",'146', '539', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/man/manana/cal", name="seeRemunerationManMananaCal")
     */
    public function RemunerationManMananaCalAction()
    {
        return $this->listChamp("Mandatement / Mandatement Analytique / Calcul de mandatement analytique","traitement/remuneration/man/manana/cal/pdf",'146', '540', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/manana/cal/pdf", name="seeRemunerationManMananaCalpdf")
     */
    public function RemunerationManMananaCalPdfAction()
    {
        return $this->listChampPdf("Mandatement / Mandatement Analytique / Calcul de mandatement analytique",'146', '540', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/man/manana/pro", name="seeRemunerationManMananaPro")
     */
    public function RemunerationManMananaProAction()
    {
        return $this->listChamp("Mandatement / Mandatement Analytique / Prop. mandats analytiques","traitement/remuneration/man/manana/pro/pdf",'146', '541', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/manana/pro/pdf", name="seeRemunerationManMananaPropdf")
     */
    public function RemunerationManMananaProPdfAction()
    {
        return $this->listChampPdf("Mandatement / Mandatement Analytique / Prop. mandats analytiques",'146', '541', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/man/val", name="seeRemunerationManVal")
     */
    public function RemunerationManValAction()
    {
        return $this->listChamp("Mandatement / Validation du mandatement","traitement/remuneration/man/manana/pro/pdf",'146', '542', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/man/val/pdf", name="seeRemunerationManValdf")
     */
    public function RemunerationManValPdfAction()
    {
        return $this->listChampPdf("Mandatement / Validation du mandatement",'146', '542', "Traitement");
    }
}