<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DemandeController extends ListPage
{
    /**
     *
     * @Route("/referentiel/recrutement/demande/for", name="seeRecrutementDemandeFor")
     */
    public function RecrutementDemandeForAction()
    {
        return $this->listChamp("Demande / Formes de demande d'emploi","referentiel/recrutement/demande/for/pdf",'62', '294', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/for/pdf", name="seeRecrutementDemandeForpdf")
     */
    public function RecrutementDemandeForPdfAction()
    {
        return $this->listChampPdf("Demande / Formes de demande d'emploi",'62', '294', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/demande/obj", name="seeRecrutementDemandeObj")
     */
    public function RecrutementDemandeObjAction()
    {
        return $this->listChamp("Demande / Objet de la demande","referentiel/recrutement/demande/obj/pdf",'62', '295', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/obj/pdf", name="seeRecrutementDemandeObjpdf")
     */
    public function RecrutementDemandeObjPdfAction()
    {
        return $this->listChampPdf("Demande / Objet de la demande",'62', '295', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/demande/nat", name="seeRecrutementDemandeNat")
     */
    public function RecrutementDemandeNatAction()
    {
        return $this->listChamp("Demande / Natures de recrutement","referentiel/recrutement/demande/nat/pdf",'62', '296', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/nat/pdf", name="seeRecrutementDemandeNatpdf")
     */
    public function RecrutementDemandeNatPdfAction()
    {
        return $this->listChampPdf("Demande / Natures de recrutement",'62', '296', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/typ", name="seeRecrutementDemandeTyp")
     */
    public function RecrutementDemandeTypAction()
    {
        return $this->listChamp("Demande / Types de recrutement","referentiel/recrutement/demande/typ/pdf",'62', '297', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/typ/pdf", name="seeRecrutementDemandeTyppdf")
     */
    public function RecrutementDemandeTypPdfAction()
    {
        return $this->listChampPdf("Demande / Types de recrutement",'62', '297', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/demande/voi", name="seeRecrutementDemandeVoi")
     */
    public function RecrutementDemandeVoiAction()
    {
        return $this->listChamp("Demande / Voies de recrutement","referentiel/recrutement/demande/voi/pdf",'62', '298', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/voi/pdf", name="seeRecrutementDemandeVoipdf")
     */
    public function RecrutementDemandeVoiPdfAction()
    {
        return $this->listChampPdf("Demande / Voies de recrutement",'62', '298', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/demande/all", name="seeRecrutementDemandeAll")
     */
    public function RecrutementDemandeAllAction()
    {
        return $this->listChamp("Demande / Allocations","referentiel/recrutement/demande/all/pdf",'62', '299', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/all/pdf", name="seeRecrutementDemandeAllpdf")
     */
    public function RecrutementDemandeAllPdfAction()
    {
        return $this->listChampPdf("Demande / Allocations",'62', '299', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/demande/dom", name="seeRecrutementDemandeDom")
     */
    public function RecrutementDemandeDomAction()
    {
        return $this->listChamp("Demande / Domaines d'activité","referentiel/recrutement/demande/dom/pdf",'62', '300', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/demande/dom/pdf", name="seeRecrutementDemandeDompdf")
     */
    public function RecrutementDemandeDomPdfAction()
    {
        return $this->listChampPdf("Demande / Domaines d'activité",'62', '300', "Référentiel");
    }
}