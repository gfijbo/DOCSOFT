<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CotisationsController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/cot/def/typcot", name="seeRemunerationCotDefTypcot")
     */
    public function RemunerationCotDefTypcotAction()
    {
        return $this->listChamp("Définitions / Types de cotisations","referentiel/remuneration/cot/def/typcot/pdf",'50', '244', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/def/typcot/pdf", name="seeRemunerationCotDefTypcotpdf")
     */
    public function RemunerationCotDefTypcotPdfAction()
    {
        return $this->listChampPdf("Définitions / Types de cotisations",'50', '244', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/def/rub", name="seeRemunerationCotDefRub")
     */
    public function RemunerationCotDefRubAction()
    {
        return $this->listChamp("Définitions / Rubriques des types de cotisations","referentiel/remuneration/cot/def/rub/pdf",'50', '245', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/def/rub/pdf", name="seeRemunerationCotDefRubpdf")
     */
    public function RemunerationCotDefRubPdfAction()
    {
        return $this->listChampPdf("Définitions / Rubriques des types de cotisations",'50', '245', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/def/typcum", name="seeRemunerationCotDefTypcum")
     */
    public function RemunerationCotDefTypcumAction()
    {
        return $this->listChamp("Définitions / Types cumuls divers archivés","referentiel/remuneration/cot/def/typcum/pdf",'50', '246', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/def/typcum/pdf", name="seeRemunerationCotDefTypcumpdf")
     */
    public function RemunerationCotDefTypcumPdfAction()
    {
        return $this->listChampPdf("Définitions / Types cumuls divers archivés",'50', '246', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/val/tau", name="seeRemunerationCotValTau")
     */
    public function RemunerationCotValTauAction()
    {
        return $this->listChamp("Valeurs / Taux des types de cotisations","referentiel/remuneration/cot/val/tau/pdf",'50', '247', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/val/tau/pdf", name="seeRemunerationCotValTaupdf")
     */
    public function RemunerationCotValTauPdfAction()
    {
        return $this->listChampPdf("Valeurs / Taux des types de cotisations",'50', '247', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/val/val", name="seeRemunerationCotValVal")
     */
    public function RemunerationCotValValAction()
    {
        return $this->listChamp("Valeurs / Valeurs des plafonds","referentiel/remuneration/cot/val/val/pdf",'50', '248', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/val/val/pdf", name="seeRemunerationCotValValpdf")
     */
    public function RemunerationCotValValPdfAction()
    {
        return $this->listChampPdf("Valeurs / Valeurs des plafonds",'50', '248', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/reg/regcot", name="seeRemunerationCotRegRegcot")
     */
    public function RemunerationCotRegRegcotAction()
    {
        return $this->listChamp("Régimes / Régimes de cotisations","/referentiel/remuneration/cot/reg/regcot/pdf",'50', '249', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/reg/regcot/pdf", name="seeRemunerationCotRegRegcotpdf")
     */
    public function RemunerationCotRegRegcotPdfAction()
    {
        return $this->listChampPdf("Régimes / Régimes de cotisations",'50', '249', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/reg/asscot", name="seeRemunerationCotRegAsscot")
     */
    public function RemunerationCotRegAsscotAction()
    {
        return $this->listChamp("Régimes / Association Régimes / Cotisation","referentiel/remuneration/cot/reg/asscot/pdf",'50', '250', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/reg/asscot/pdf", name="seeRemunerationCotRegAsscotpdf")
     */
    public function RemunerationCotRegAsscotPdfAction()
    {
        return $this->listChampPdf("Régimes / Association Régimes / Cotisation",'50', '250', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/reg/assrub", name="seeRemunerationCotRegAssrub")
     */
    public function RemunerationCotRegAssrubAction()
    {
        return $this->listChamp("Régimes / Association AOT / Rubriques","referentiel/remuneration/cot/reg/assrub/pdf",'50', '251', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/reg/assrub/pdf", name="seeRemunerationCotRegAssrubpdf")
     */
    public function RemunerationCotRegAssrubPdfAction()
    {
        return $this->listChampPdf("Régimes / Association AOT / Rubriques",'50', '251', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/pro/cri", name="seeRemunerationCotProCri")
     */
    public function RemunerationCotProCriAction()
    {
        return $this->listChamp("Profils / Critères des profils","referentiel/remuneration/cot/pro/cri/pdf",'50', '252', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/pro/cri/pdf", name="seeRemunerationCotProCripdf")
     */
    public function RemunerationCotProCriPdfAction()
    {
        return $this->listChampPdf("Profils / Critères des profils",'50', '252', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/cot/pro/com", name="seeRemunerationCotProCom")
     */
    public function RemunerationCotProComAction()
    {
        return $this->listChamp("Profils / Composition des profils","referentiel/remuneration/cot/pro/com/pdf",'50', '253', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/cot/pro/com/pdf", name="seeRemunerationCotProCompdf")
     */
    public function RemunerationCotProComPdfAction()
    {
        return $this->listChampPdf("Profils / Composition des profils",'50', '253', "Référentiel");
    }
}