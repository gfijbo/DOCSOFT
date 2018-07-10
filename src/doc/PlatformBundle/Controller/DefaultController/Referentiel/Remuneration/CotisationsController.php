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
}