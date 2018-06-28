<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Absences;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MaladieController extends ListPage
{
    /**
     *
     * @Route("/referentiel/absences/mal/reg", name="seeAbsencesMalReg")
     */
    public function AbsencesMalRegAction()
    {
        return $this->listChamp("Maladie / Règlementation médicale","referentiel/absences/mal/reg/pdf",'20', '118', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/mal/reg/pdf", name="seeAbsencesMalRegpdf")
     */
    public function AbsencesMalRegPdfAction()
    {
        return $this->listChampPdf("Maladie / Règlementation médicale",'20', '118', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/mal/acc", name="seeAbsencesMalAcc")
     */
    public function AbsencesMalAccAction()
    {
        return $this->listChamp("Maladie / Accès régl. Médicale","referentiel/absences/mal/acc/pdf",'20', '119', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/mal/acc/pdf", name="seeAbsencesMalAccpdf")
     */
    public function AbsencesMalAccPdfAction()
    {
        return $this->listChampPdf("Maladie / Accès régl. Médicale",'20', '119', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/mal/dromal", name="seeAbsencesMalDromal")
     */
    public function AbsencesMalDromalAction()
    {
        return $this->listChamp("Maladie / Droits maladie","referentiel/absences/mal/dromal/pdf",'20', '120', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/mal/dromal/pdf", name="seeAbsencesMalDromalpdf")
     */
    public function AbsencesMalDromalPdfAction()
    {
        return $this->listChampPdf("Maladie / Droits maladie",'20', '120', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/mal/dromat", name="seeAbsencesMalDromat")
     */
    public function AbsencesMalDromatAction()
    {
        return $this->listChamp("Maladie / Droits maternité","referentiel/absences/mal/dromat/pdf",'20', '121', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/mal/dromat/pdf", name="seeAbsencesMalDromalpdf")
     */
    public function AbsencesMalDromatPdfAction()
    {
        return $this->listChampPdf("Maladie / Droits maternité",'20', '121', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/mal/droado", name="seeAbsencesMalDroado")
     */
    public function AbsencesMalDroadoAction()
    {
        return $this->listChamp("Maladie / Droits adoption","referentiel/absences/mal/droado/pdf",'20', '122', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/mal/droado/pdf", name="seeAbsencesMalDromalpdf")
     */
    public function AbsencesMalDroadoPdfAction()
    {
        return $this->listChampPdf("Maladie / Droits adoption",'20', '122', "Référentiel");
    }
}