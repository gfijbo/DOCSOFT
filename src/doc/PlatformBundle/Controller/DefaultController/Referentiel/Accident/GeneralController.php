<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Accident;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GeneralController extends ListPage
{
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/act", name="seeAccidentdutravailGenAct")
     */
    public function AccidentdutravailGenActAction()
    {
        return $this->listChamp("Général accident / Activité accident","referentiel/accidentdutravail/gen/act/pdf",'22', '123', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/act/pdf", name="seeAccidentdutravailGenActpdf")
     */
    public function AccidentdutravailGenActPdfAction()
    {
        return $this->listChampPdf("Général accident / Activité accident",'22', '123', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/cir", name="seeAccidentdutravailGenCir")
     */
    public function AccidentdutravailGenCirAction()
    {
        return $this->listChamp("Général accident / Circonstances","referentiel/accidentdutravail/gen/cir/pdf",'22', '124', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/cir/pdf", name="seeAccidentdutravailGenCirpdf")
     */
    public function AccidentdutravailGenCirPdfAction()
    {
        return $this->listChampPdf("Général accident / Circonstances",'22', '124', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/lie", name="seeAccidentdutravailGenLie")
     */
    public function AccidentdutravailGenLieAction()
    {
        return $this->listChamp("Général accident / Lieux géographiques","referentiel/accidentdutravail/gen/lie/pdf",'22', '125', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/lie/pdf", name="seeAccidentdutravailGenLiepdf")
     */
    public function AccidentdutravailGenLiePdfAction()
    {
        return $this->listChampPdf("Général accident / Lieux géographiques",'22', '125', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/sie", name="seeAccidentdutravailGenSie")
     */
    public function AccidentdutravailGenSieAction()
    {
        return $this->listChamp("Général accident / Sièges lésions","referentiel/accidentdutravail/gen/sie/pdf",'22', '126', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/sie/pdf", name="seeAccidentdutravailGenLiepdf")
     */
    public function AccidentdutravailGenSiePdfAction()
    {
        return $this->listChampPdf("Général accident / Sièges lésions",'22', '126', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/nat", name="seeAccidentdutravailGenNat")
     */
    public function AccidentdutravailGenNatAction()
    {
        return $this->listChamp("Général accident / Natures lésions","referentiel/accidentdutravail/gen/nat/pdf",'22', '127', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/nat/pdf", name="seeAccidentdutravailGenNatpdf")
     */
    public function AccidentdutravailGenNatPdfAction()
    {
        return $this->listChampPdf("Général accident / Natures lésions",'22', '127', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/typ", name="seeAccidentdutravailGenTyp")
     */
    public function AccidentdutravailGenTypAction()
    {
        return $this->listChamp("Général accident / Types frais","referentiel/accidentdutravail/gen/typ/pdf",'22', '128', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/typ/pdf", name="seeAccidentdutravailGenTyppdf")
     */
    public function AccidentdutravailGenTypPdfAction()
    {
        return $this->listChampPdf("Général accident / Types frais",'22', '128', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/tie", name="seeAccidentdutravailGenTie")
     */
    public function AccidentdutravailGenTieAction()
    {
        return $this->listChamp("Général accident / Tiers et prestataires","referentiel/accidentdutravail/gen/tie/pdf",'22', '129', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/gen/tie/pdf", name="seeAccidentdutravailGenTiepdf")
     */
    public function AccidentdutravailGenTiePdfAction()
    {
        return $this->listChampPdf("Général accident / Tiers et prestataires",'22', '129', "Référentiel");
    }
}