<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Prestation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GeneralController extends ListPage
{
    /**
     *
     * @Route("/referentiel/prestation/gen/pre", name="seePrestationGenPre")
     */
    public function PrestationGenPreAction()
    {
        return $this->listChamp("Général / Prestation","referentiel/prestation/gen/pre/pdf",'80', '337', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/gen/pre/pdf", name="seePrestationGenPrepdf")
     */
    public function PrestationGenPrePdfAction()
    {
        return $this->listChampPdf("Général / Prestation",'80', '337', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/reg", name="seePrestationGenReg")
     */
    public function PrestationGenRegAction()
    {
        return $this->listChamp("Général / Règle Attribution","referentiel/prestation/gen/reg/pdf",'80', '338', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/gen/reg/pdf", name="seePrestationGenRegpdf")
     */
    public function PrestationGenRegPdfAction()
    {
        return $this->listChampPdf("Général / Règle Attribution",'80', '338', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/con", name="seePrestationGenCon")
     */
    public function PrestationGenConAction()
    {
        return $this->listChamp("Général / Conditions attribution","referentiel/prestation/gen/con/pdf",'80', '339', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/gen/con/pdf", name="seePrestationGenConpdf")
     */
    public function PrestationGenConPdfAction()
    {
        return $this->listChampPdf("Général / Conditions attribution",'80', '339', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/typact", name="seePrestationGenTypAct")
     */
    public function PrestationGenTypActAction()
    {
        return $this->listChamp("Général / Type Activité","referentiel/prestation/gen/typact/pdf",'80', '340', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/prestation/gen/typact/pdf", name="seePrestationGenTypActpdf")
     */
    public function PrestationGenTypActPdfAction()
    {
        return $this->listChampPdf("Général / Type Activité",'80', '340', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/typsejenf", name="seePrestationGenTypseJenf")
     */
    public function PrestationGenTypseJenfAction()
    {
        return $this->listChamp("Général / Type de Séjour Enfant","referentiel/prestation/gen/typsejenf/pdf",'80', '341', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/typsejenf/pdf", name="seePrestationGenTypseJenfpdf")
     */
    public function PrestationGenTypseJenfPdfAction()
    {
        return $this->listChampPdf("Général / Type de Séjour Enfant",'80', '341', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/typsejhan", name="seePrestationGenTypsejhan")
     */
    public function PrestationGenTypsejhanAction()
    {
        return $this->listChamp("Général / Type de Séjour Handicapé","referentiel/prestation/gen/typsejhan/pdf",'80', '342', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/typsejhan/pdf", name="seePrestationGenTypsejhanpdf")
     */
    public function PrestationGenTypsejhanPdfAction()
    {
        return $this->listChampPdf("Général / Type de Séjour Handicapé",'80', '342', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/nat", name="seePrestationGenNat")
     */
    public function PrestationGenNatAction()
    {
        return $this->listChamp("Général / Nature de Prestation","referentiel/prestation/gen/nat/pdf",'80', '343', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/nat/pdf", name="seePrestationGenNatpdf")
     */
    public function PrestationGenNatPdfAction()
    {
        return $this->listChampPdf("Général / Nature de Prestation",'80', '343', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/ind", name="seePrestationGenInd")
     */
    public function PrestationGenIndAction()
    {
        return $this->listChamp("Général / Indice de Prestation","referentiel/prestation/gen/nat/pdf",'80', '344', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/prestation/gen/ind/pdf", name="seePrestationGenIndpdf")
     */
    public function PrestationGenIndPdfAction()
    {
        return $this->listChampPdf("Général / Indice de Prestation",'80', '344', "Référentiel");
    }
}