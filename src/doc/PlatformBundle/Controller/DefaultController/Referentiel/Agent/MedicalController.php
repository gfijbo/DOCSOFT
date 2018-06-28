<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MedicalController extends ListPage
{
    /**
     *
     * @Route("/referentiel/medical/mot", name="seeMedicalMot")
     */
    public function MedicalMotAction()
    {
        return $this->listChamp("Médical / Motif visite médicale","referentiel/medical/mot/pdf",'34', '193', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/medical/mot/pdf", name="seeMedicalMotpdf")
     */
    public function MedicalMotPdfAction()
    {
        return $this->listChampPdf("Médical / Motif visite médicale",'34', '193', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/medical/typ", name="seeMedicalTyp")
     */
    public function MedicalTypAction()
    {
        return $this->listChamp("Médical / Types de vaccin","referentiel/medical/typ/pdf",'34', '194', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/medical/typ/pdf", name="seeMedicalTyppdf")
     */
    public function MedicalTypPdfAction()
    {
        return $this->listChampPdf("Médical / Types de vaccin",'34', '194', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/medical/res", name="seeMedicalRes")
     */
    public function MedicalResAction()
    {
        return $this->listChamp("Médical / Résultat visite médicale","referentiel/medical/res/pdf",'34', '195', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/medical/res/pdf", name="seeMedicalRespdf")
     */
    public function MedicalResPdfAction()
    {
        return $this->listChampPdf("Médical / Résultat visite médicale",'34', '195', "Référentiel");
    }
    
}