<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EmploiController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/emp/eta", name="seeRemunerationEmpEta")
     */
    public function RemunerationEmpEtaAction()
    {
        return $this->listChamp("Emploi / Etablissement","referentiel/remuneration/emp/eta/pdf",'49', '236', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/eta/pdf", name="seeRemunerationEmpEtapdf")
     */
    public function RemunerationEmpEtaPdfAction()
    {
        return $this->listChampPdf("Emploi / Etablissement",'49', '236', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/emp/val", name="seeRemunerationEmpVal")
     */
    public function RemunerationEmpValAction()
    {
        return $this->listChamp("Emploi / Valeur du point","referentiel/remuneration/emp/val/pdf",'49', '237', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/val/pdf", name="seeRemunerationEmpValpdf")
     */
    public function RemunerationEmpValPdfAction()
    {
        return $this->listChampPdf("Emploi / Valeur du point",'49', '237', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/emp/equ", name="seeRemunerationEmpEqu")
     */
    public function RemunerationEmpEquAction()
    {
        return $this->listChamp("Emploi / Equivalence rémunération","referentiel/remuneration/emp/equ/pdf",'49', '238', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/equ/pdf", name="seeRemunerationEmpEqupdf")
     */
    public function RemunerationEmpEquPdfAction()
    {
        return $this->listChampPdf("Emploi / Equivalence rémunération",'49', '238', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/emp/cla", name="seeRemunerationEmpCla")
     */
    public function RemunerationEmpClaAction()
    {
        return $this->listChamp("Emploi / Classes rémunération","referentiel/remuneration/emp/cla/pdf",'49', '239', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/cla/pdf", name="seeRemunerationEmpClapdf")
     */
    public function RemunerationEmpClaPdfAction()
    {
        return $this->listChampPdf("Emploi / Classes rémunération",'49', '239', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/emp/tau", name="seeRemunerationEmpTau")
     */
    public function RemunerationEmpTauAction()
    {
        return $this->listChamp("Emploi / Taux emploi","referentiel/remuneration/emp/tau/pdf",'49', '240', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/tau/pdf", name="seeRemunerationEmpTaupdf")
     */
    public function RemunerationEmpTauPdfAction()
    {
        return $this->listChampPdf("Emploi / Taux emploi",'49', '240', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/emp/ind", name="seeRemunerationEmpInd")
     */
    public function RemunerationEmpIndAction()
    {
        return $this->listChamp("Emploi / Indices bruts et majorés","referentiel/remuneration/emp/ind/pdf",'49', '241', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/ind/pdf", name="seeRemunerationEmpIndpdf")
     */
    public function RemunerationEmpIndPdfAction()
    {
        return $this->listChampPdf("Emploi / Indices bruts et majorés",'49', '241', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/emp/cod", name="seeRemunerationEmpCod")
     */
    public function RemunerationEmpCodAction()
    {
        return $this->listChamp("Emploi / Codes permanents","referentiel/remuneration/emp/cod/pdf",'49', '242', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/cod/pdf", name="seeRemunerationEmpCodpdf")
     */
    public function RemunerationEmpCodPdfAction()
    {
        return $this->listChampPdf("Emploi / Codes permanents",'49', '242', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/emp/mot", name="seeRemunerationEmpMot")
     */
    public function RemunerationEmpMotAction()
    {
        return $this->listChamp("Emploi / Motifs d'affectation","referentiel/remuneration/emp/mot/pdf",'49', '243', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/emp/mot/pdf", name="seeRemunerationEmpMotpdf")
     */
    public function RemunerationEmpMotPdfAction()
    {
        return $this->listChampPdf("Emploi / Motifs d'affectation",'49', '243', "Référentiel");
    }
}