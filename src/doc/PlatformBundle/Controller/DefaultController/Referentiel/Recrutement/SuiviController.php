<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SuiviController extends ListPage
{
    /**
     *
     * @Route("/referentiel/recrutement/suivi/tit", name="seeRecrutementSuiviTit")
     */
    public function RecrutementSuiviTitAction()
    {
        return $this->listChamp("Suivi / Titres jury","referentiel/recrutement/suivi/tit/pdf",'63', '301', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/suivi/tit/pdf", name="seeRecrutementSuiviTitpdf")
     */
    public function RecrutementSuiviTitPdfAction()
    {
        return $this->listChampPdf("Suivi / Titres jury",'63', '301', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/suivi/jur", name="seeRecrutementSuiviJur")
     */
    public function RecrutementSuiviJurAction()
    {
        return $this->listChamp("Suivi / Jury - Membres","referentiel/recrutement/suivi/jur/pdf",'63', '302', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/suivi/jur/pdf", name="seeRecrutementSuiviJurpdf")
     */
    public function RecrutementSuiviJurPdfAction()
    {
        return $this->listChampPdf("Suivi / Jury - Membres",'63', '302', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/suivi/pro", name="seeRecrutementSuiviPro")
     */
    public function RecrutementSuiviProAction()
    {
        return $this->listChamp("Suivi / Propositions entretien","referentiel/recrutement/suivi/pro/pdf",'63', '303', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/suivi/pro/pdf", name="seeRecrutementSuiviPropdf")
     */
    public function RecrutementSuiviProPdfAction()
    {
        return $this->listChampPdf("Suivi / Propositions entretien",'63', '303', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/suivi/pre", name="seeRecrutementSuiviPre")
     */
    public function RecrutementSuiviPreAction()
    {
        return $this->listChamp("Suivi / Présences entretien","referentiel/recrutement/suivi/pre/pdf",'63', '304', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/suivi/pre/pdf", name="seeRecrutementSuiviPrepdf")
     */
    public function RecrutementSuiviPrePdfAction()
    {
        return $this->listChampPdf("Suivi / Présences entretien",'63', '304', "Référentiel");
    }
}