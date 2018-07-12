<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MandatementController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/man/cod", name="seeRemunerationManCod")
     */
    public function RemunerationManCodAction()
    {
        return $this->listChamp("Mandatement / Codes URSSAF","referentiel/remuneration/man/cod/pdf",'51', '254', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/cod/pdf", name="seeRemunerationManCodpdf")
     */
    public function RemunerationManCodPdfAction()
    {
        return $this->listChampPdf("Mandatement / Codes URSSAF",'51', '254', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/typ", name="seeRemunerationManTyp")
     */
    public function RemunerationManTypAction()
    {
        return $this->listChamp("Mandatement / Types ventilation","referentiel/remuneration/man/typ/pdf",'51', '255', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/typ/pdf", name="seeRemunerationManTyppdf")
     */
    public function RemunerationManTypPdfAction()
    {
        return $this->listChampPdf("Mandatement / Types ventilation",'51', '255', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/venfin", name="seeRemunerationManVenfin")
     */
    public function RemunerationManVenfinAction()
    {
        return $this->listChamp("Mandatement / Ventilations Financières","referentiel/remuneration/man/venfin/pdf",'51', '256', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/venfin/pdf", name="seeRemunerationManVenfinpdf")
     */
    public function RemunerationManVenfinPdfAction()
    {
        return $this->listChampPdf("Mandatement / Ventilations Financières",'51', '256', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/ana", name="seeRemunerationManAna")
     */
    public function RemunerationManAnaAction()
    {
        return $this->listChamp("Mandatement / Analytique - contrats","referentiel/remuneration/man/ana/pdf",'51', '257', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/ana/pdf", name="seeRemunerationManAnapdf")
     */
    public function RemunerationManAnaPdfAction()
    {
        return $this->listChampPdf("Mandatement / Analytique - contrats",'51', '257', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/eng", name="seeRemunerationManEng")
     */
    public function RemunerationManEngAction()
    {
        return $this->listChamp("Mandatement / Engagements","referentiel/remuneration/man/eng/pdf",'51', '258', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/eng/pdf", name="seeRemunerationManEngpdf")
     */
    public function RemunerationManEngPdfAction()
    {
        return $this->listChampPdf("Mandatement / Engagements",'51', '258', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/lib", name="seeRemunerationManLib")
     */
    public function RemunerationManLibAction()
    {
        return $this->listChamp("Mandatement / Libellés mandats","referentiel/remuneration/man/lib/pdf",'51', '259', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/lib/pdf", name="seeRemunerationManLibpdf")
     */
    public function RemunerationManLibPdfAction()
    {
        return $this->listChampPdf("Mandatement / Libellés mandats",'51', '259', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/par", name="seeRemunerationManPar")
     */
    public function RemunerationManParAction()
    {
        return $this->listChamp("Mandatement / Paramétrage libellés mandats","referentiel/remuneration/man/par/pdf",'51', '260', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/par/pdf", name="seeRemunerationManParpdf")
     */
    public function RemunerationManParPdfAction()
    {
        return $this->listChampPdf("Mandatement / Paramétrage libellés mandats",'51', '260', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/tieman", name="seeRemunerationManTieman")
     */
    public function RemunerationManTiemanAction()
    {
        return $this->listChamp("Mandatement / Tiers mandatement","referentiel/remuneration/man/tieman/pdf",'51', '261', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/tieman/pdf", name="seeRemunerationManTiemanpdf")
     */
    public function RemunerationManTiemanPdfAction()
    {
        return $this->listChampPdf("Mandatement / Tiers mandatement",'51', '261', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/tiecom", name="seeRemunerationManTiecom")
     */
    public function RemunerationManTiecomAction()
    {
        return $this->listChamp("Mandatement / Tiers compta","referentiel/remuneration/man/tiecom/pdf",'51', '262', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/tiecom/pdf", name="seeRemunerationManTiecompdf")
     */
    public function RemunerationManTiecomPdfAction()
    {
        return $this->listChampPdf("Mandatement / Tiers compta",'51', '262', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/cor", name="seeRemunerationManCor")
     */
    public function RemunerationManCorAction()
    {
        return $this->listChamp("Mandatement / Correspondances Tiers","referentiel/remuneration/man/cor/pdf",'51', '263', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/cor/pdf", name="seeRemunerationManCorpdf")
     */
    public function RemunerationManCorPdfAction()
    {
        return $this->listChampPdf("Mandatement / Correspondances Tiers",'51', '263', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/mantie", name="seeRemunerationManMantie")
     */
    public function RemunerationManMantieAction()
    {
        return $this->listChamp("Mandatement / Mandatement / TiersGF","referentiel/remuneration/man/mantie/pdf",'51', '264', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/mantie/pdf", name="seeRemunerationManMantiepdf")
     */
    public function RemunerationManMantiePdfAction()
    {
        return $this->listChampPdf("Mandatement / Mandatement / TiersGF",'51', '264', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/man/libnat", name="seeRemunerationManLibnat")
     */
    public function RemunerationManLibnatAction()
    {
        return $this->listChamp("Mandatement / Libellés natures comptables","referentiel/remuneration/man/libnat/pdf",'51', '265', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/man/libnat/pdf", name="seeRemunerationManLibnatpdf")
     */
    public function RemunerationManLibnatPdfAction()
    {
        return $this->listChampPdf("Mandatement / Libellés natures comptables",'51', '265', "Référentiel");
    }
}