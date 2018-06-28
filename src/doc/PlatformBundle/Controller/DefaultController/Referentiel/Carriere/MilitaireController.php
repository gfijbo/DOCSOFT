<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MilitaireController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/mil/aff", name="seeCarriereMilAff")
     */
    public function CarriereMilAffAction()
    {
        return $this->listChamp("Militaire / Affectation défense","referentiel/carriere/mil/aff/pdf",'27', '144', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/mil/aff/pdf", name="seeCarriereMilAffpdf")
     */
    public function CarriereMilAffPdfAction()
    {
        return $this->listChampPdf("Militaire / Affectation défense",'27', '144', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/mil/pos", name="seeCarriereMilPos")
     */
    public function CarriereMilPosAction()
    {
        return $this->listChamp("Militaire / Position militaire","referentiel/carriere/mil/pos/pdf",'27', '145', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/mil/pos/pdf", name="seeCarriereMilPospdf")
     */
    public function CarriereMilPosPdfAction()
    {
        return $this->listChampPdf("Militaire / Position militaire",'27', '145', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/mil/reg", name="seeCarriereMilReg")
     */
    public function CarriereMilRegAction()
    {
        return $this->listChamp("Militaire / Régime militaire","referentiel/carriere/mil/reg/pdf",'27', '147', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/mil/reg/pdf", name="seeCarriereMilRegpdf")
     */
    public function CarriereMilRegPdfAction()
    {
        return $this->listChampPdf("Militaire / Régime militaire",'27', '147', "Référentiel");
    }
}