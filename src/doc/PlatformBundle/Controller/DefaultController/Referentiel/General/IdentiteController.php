<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\General;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IdentiteController extends ListPage
{
    /**
     *
     * @Route("/referentiel/identite/qua", name="seeGeneralIdentiteQua")
     */
    public function GeneralIdentiteQuaAction()
    {
        return $this->listChamp("Identité/ Qualité","referentiel/identite/qua/pdf",'16', '105', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/identite/qua/pdf", name="seeGeneralIdentiteQuapdf")
     */
    public function GeneralIdentiteQuaPdfAction()
    {
        return $this->listChampPdf("Identité/ Qualité",'16', '105', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/identite/sit", name="seeGeneralIdentiteSit")
     */
    public function GeneralIdentiteSitAction()
    {
        return $this->listChamp("Identité/ Situation familiale","referentiel/identite/sit/pdf",'16', '106', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/identite/sit/pdf", name="seeGeneralIdentiteSitpdf")
     */
    public function GeneralIdentiteSitPdfAction()
    {
        return $this->listChampPdf("Identité/ Situation familiale",'16', '106', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/identite/tie", name="seeGeneralIdentiteTie")
     */
    public function GeneralIdentiteTieAction()
    {
        return $this->listChamp("Identité/ Tiers organisation","referentiel/identite/tie/pdf",'16', '107', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/identite/tie/pdf", name="seeGeneralIdentiteTiepdf")
     */
    public function GeneralIdentiteTiePdfAction()
    {
        return $this->listChampPdf("Identité/ Tiers organisation",'16', '107', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/identite/cat", name="seeGeneralIdentiteCat")
     */
    public function GeneralIdentiteCatAction()
    {
        return $this->listChamp("Identité / Catégories socio-professionnelles","referentiel/identite/cat/pdf",'16', '108', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/identite/cat/pdf", name="seeGeneralIdentiteCatpdf")
     */
    public function GeneralIdentiteCatPdfAction()
    {
        return $this->listChampPdf("Identité / Catégories socio-professionnelles",'16', '108', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/identite/nom", name="seeGeneralIdentiteNom")
     */
    public function GeneralIdentiteNomAction()
    {
        return $this->listChamp("Identité / Nomenclatures Metier-Compétences","referentiel/identite/nom/pdf",'16', '109', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/identite/nom/pdf", name="seeGeneralIdentiteNompdf")
     */
    public function GeneralIdentiteNomPdfAction()
    {
        return $this->listChampPdf("Identité / Nomenclatures Metier-Compétences",'16', '109', "Référentiel");
    }
}