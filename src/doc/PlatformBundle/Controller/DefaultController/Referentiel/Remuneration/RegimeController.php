<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RegimeController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/reg/ele", name="seeRemunerationRegEle")
     */
    public function RemunerationRegEleAction()
    {
        return $this->listChamp("Régime indemnitaire / Eléments de régime indemnitaire","referentiel/remuneration/reg/ele/pdf",'52', '266', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/reg/ele/pdf", name="seeRemunerationRegElepdf")
     */
    public function RemunerationRegElePdfAction()
    {
        return $this->listChampPdf("Régime indemnitaire / Eléments de régime indemnitaire",'52', '266', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/reg/pro", name="seeRemunerationRegPro")
     */
    public function RemunerationRegProAction()
    {
        return $this->listChamp("Régime indemnitaire / Profils d'attribution","referentiel/remuneration/reg/pro/pdf",'52', '267', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/reg/pro/pdf", name="seeRemunerationRegPropdf")
     */
    public function RemunerationRegProPdfAction()
    {
        return $this->listChampPdf("Régime indemnitaire / Profils d'attribution",'52', '267', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/reg/rub", name="seeRemunerationRegRub")
     */
    public function RemunerationRegRubAction()
    {
        return $this->listChamp("Régime indemnitaire / Rubriques du régime indemnitaire","referentiel/remuneration/reg/rub/pdf",'52', '268', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/reg/rub/pdf", name="seeRemunerationRegRubpdf")
     */
    public function RemunerationRegRubPdfAction()
    {
        return $this->listChampPdf("Régime indemnitaire / Rubriques du régime indemnitaire",'52', '268', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/reg/par", name="seeRemunerationRegPar")
     */
    public function RemunerationRegParAction()
    {
        return $this->listChamp("Régime indemnitaire / Paramètres de régime","referentiel/remuneration/reg/par/pdf",'52', '269', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/reg/par/pdf", name="seeRemunerationRegParpdf")
     */
    public function RemunerationRegParPdfAction()
    {
        return $this->listChampPdf("Régime indemnitaire / Paramètres de régime",'52', '269', "Référentiel");
    }
}