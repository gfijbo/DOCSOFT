<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RubriquesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/rub/com", name="seeRemunerationRubCom")
     */
    public function RemunerationRubComAction()
    {
        return $this->listChamp("Rubriques / Complement de Commandes","referentiel/remuneration/rub/com/pdf",'53', '270', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rub/com/pdf", name="seeRemunerationRubCompdf")
     */
    public function RemunerationRubComPdfAction()
    {
        return $this->listChampPdf("Rubriques / Complement de Commandes",'53', '270', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/rub/cum", name="seeRemunerationRubCum")
     */
    public function RemunerationRubCumAction()
    {
        return $this->listChamp("Rubriques / Cumuls intermédiares","referentiel/remuneration/rub/cum/pdf",'53', '271', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rub/cum/pdf", name="seeRemunerationRubCumpdf")
     */
    public function RemunerationRubCumPdfAction()
    {
        return $this->listChampPdf("Rubriques / Cumuls intermédiares",'53', '271', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/rub/rubabs", name="seeRemunerationRubabs")
     */
    public function RemunerationRubabsAction()
    {
        return $this->listChamp("Rubriques / Rubriques absences","referentiel/remuneration/rub/rubabs/pdf",'53', '272', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rub/rubabs/pdf", name="seeRemunerationRubabspdf")
     */
    public function RemunerationRubabsPdfAction()
    {
        return $this->listChampPdf("Rubriques / Rubriques absences",'53', '272', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/rub/rubpai", name="seeRemunerationRubRubpai")
     */
    public function RemunerationRubRubpaiAction()
    {
        return $this->listChamp("Rubriques / Rubriques paie","referentiel/remuneration/rub/rubpai/pdf",'53', '273', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rub/rubpai/pdf", name="seeRemunerationRubRubpaipdf")
     */
    public function RemunerationRubRubpaiPdfAction()
    {
        return $this->listChampPdf("Rubriques / Rubriques paie",'53', '273', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/rub/rubaot", name="seeRemunerationRubRubaot")
     */
    public function RemunerationRubRubaotAction()
    {
        return $this->listChamp("Rubriques / Rubriques AOT","referentiel/remuneration/rub/rubaot/pdf",'53', '274', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rub/rubaot/pdf", name="seeRemunerationRubRubaotpdf")
     */
    public function RemunerationRubRubaotPdfAction()
    {
        return $this->listChampPdf("Rubriques / Rubriques AOT",'53', '274', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/rub/ass", name="seeRemunerationRubRubass")
     */
    public function RemunerationRubRubassAction()
    {
        return $this->listChamp("Rubriques / Association Rubrique paie et Primes N4DS","referentiel/remuneration/rub/ass/pdf",'53', '275', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rub/ass/pdf", name="seeRemunerationRubRubasspdf")
     */
    public function RemunerationRubRubassPdfAction()
    {
        return $this->listChampPdf("Rubriques / Association Rubrique paie et Primes N4DS",'53', '275', "Référentiel");
    }
}