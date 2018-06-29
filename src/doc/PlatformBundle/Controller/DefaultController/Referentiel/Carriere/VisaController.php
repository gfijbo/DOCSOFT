<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class VisaController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/visa/def", name="seeCarriereVisaDef")
     */
    public function CarriereVisaDefAction()
    {
        return $this->listChamp("Visa / Définition des visas","referentiel/carriere/visa/def/pdf",'31', '180', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/visa/def/pdf", name="seeCarriereVisaDefpdf")
     */
    public function CarriereVisaDefPdfAction()
    {
        return $this->listChampPdf("Visa / Définition des visas",'31', '180', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/visa/assmod", name="seeCarriereVisaAssmod")
     */
    public function CarriereVisaAssmodAction()
    {
        return $this->listChamp("Visa / Association visas/modèles","referentiel/carriere/visa/assmod/pdf",'31', '181', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/visa/assmod/pdf", name="seeCarriereVisaAssmodpdf")
     */
    public function CarriereVisaAssmodPdfAction()
    {
        return $this->listChampPdf("Visa / Association visas/modèles",'31', '181', "Référentiel");
    }
}