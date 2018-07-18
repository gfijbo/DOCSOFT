<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Prestation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TitreRepasController extends ListPage
{
    /**
     *
     * @Route("/traitement/prestation/tit/cal", name="seePrestationTitCal")
     */
    public function PrestationTitCalAction()
    {
        return $this->listChamp("Titre Repas / Calcul Regularisation Titre Repas","traitement/prestation/tit/cal/pdf",'222', '726', "Traitement");
    }
    /**
     *
     * @Route("/traitement/prestation/tit/cal/pdf", name="seePrestationTitCalpdf")
     */
    public function PrestationTitCalPdfAction()
    {
        return $this->listChampPdf("Titre Repas / Calcul Regularisation Titre Repas",'222', '726', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/prestation/titcon", name="seePrestationTitcon")
     */
    public function PrestationTitconAction()
    {
        return $this->listChamp("Titre Repas / Consultation / Régularisation","traitement/prestation/titcon/pdf",'222', '727', "Traitement");
    }
    /**
     *
     * @Route("/traitement/prestation/titcon/pdf", name="seePrestationTitconpdf")
     */
    public function PrestationTitconPdfAction()
    {
        return $this->listChampPdf("Titre Repas / Consultation / Régularisation",'222', '727', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/prestation/titapp", name="seePrestationTitapp")
     */
    public function PrestationTitappAction()
    {
        return $this->listChamp("Titre Repas / Approbation Régularisation Titre Repas","traitement/prestation/titapp/pdf",'222', '728', "Traitement");
    }
    /**
     *
     * @Route("/traitement/prestation/titapp/pdf", name="seePrestationTitapppdf")
     */
    public function PrestationTitappPdfAction()
    {
        return $this->listChampPdf("Titre Repas / Approbation Régularisation Titre Repas",'222', '728', "Traitement");
    }
}