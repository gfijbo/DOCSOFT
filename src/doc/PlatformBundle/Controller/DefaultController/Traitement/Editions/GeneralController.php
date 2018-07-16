<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Editions;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class GeneralController extends ListPage
{
    /**
     *
     * @Route("/traitement/editions/general/par", name="seeEditionsGeneralPar")
     */
    public function EditionsGeneralParAction()
    {
        return $this->listChamp("Général / Paramètres","traitement/editions/general/par/pdf",'164', '614', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/general/par/pdf", name="seeEditionsGeneralParpdf")
     */
    public function EditionsGeneralParPdfAction()
    {
        return $this->listChampPdf("Général / Paramètres",'164', '614', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/general/org", name="seeEditionsGeneralOrg")
     */
    public function EditionsGeneralOrgAction()
    {
        return $this->listChamp("Général / Organismes (batch)","traitement/editions/general/org/pdf",'164', '615', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/general/org/pdf", name="seeEditionsGeneralOrgpdf")
     */
    public function EditionsGeneralOrgPdfAction()
    {
        return $this->listChampPdf("Général / Organismes (batch)",'164', '615', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/general/eta", name="seeEditionsGeneralEta")
     */
    public function EditionsGeneralEtaAction()
    {
        return $this->listChamp("Général / Etablissements","traitement/editions/general/eta/pdf",'164', '616', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/general/eta/pdf", name="seeEditionsGeneralEtapdf")
     */
    public function EditionsGeneralEtaPdfAction()
    {
        return $this->listChampPdf("Général / Etablissements",'164', '616', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/general/str", name="seeEditionsGeneralStr")
     */
    public function EditionsGeneralStrAction()
    {
        return $this->listChamp("Général / Structures","traitement/editions/general/str/pdf",'164', '617', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/general/str/pdf", name="seeEditionsGeneralStrpdf")
     */
    public function EditionsGeneralStrPdfAction()
    {
        return $this->listChampPdf("Général / Structures",'164', '617', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/general/fon", name="seeEditionsGeneralFon")
     */
    public function EditionsGeneralFonAction()
    {
        return $this->listChamp("Général / Fonctions","traitement/editions/general/fon/pdf",'164', '618', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/general/fon/pdf", name="seeEditionsGeneralFonpdf")
     */
    public function EditionsGeneralFonPdfAction()
    {
        return $this->listChampPdf("Général / Fonctions",'164', '618', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/general/fonbat", name="seeEditionsGeneralFonbat")
     */
    public function EditionsGeneralFonbatAction()
    {
        return $this->listChamp("Général / Fonctions (batch)","traitement/editions/general/fonbat/pdf",'164', '619', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/general/fonbat/pdf", name="seeEditionsGeneralFonbatpdf")
     */
    public function EditionsGeneralFonbatPdfAction()
    {
        return $this->listChampPdf("Général / Fonctions",'164', '619', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/editions/general/cen", name="seeEditionsGeneralCen")
     */
    public function EditionsGeneralCenAction()
    {
        return $this->listChamp("Général / Centres URSSAF","/traitement/editions/general/cen/pdf",'164', '619', "Traitement");
    }
    /**
     *
     * @Route("/traitement/editions/general/cen/pdf", name="seeEditionsGeneralCenpdf")
     */
    public function EditionsGeneralCenPdfAction()
    {
        return $this->listChampPdf("Général / Centres URSSAF",'164', '619', "Traitement");
    }
}