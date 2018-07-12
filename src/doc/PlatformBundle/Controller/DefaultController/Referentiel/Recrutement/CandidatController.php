<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CandidatController extends ListPage
{
    /**
     *
     * @Route("/referentiel/recrutement/candidat/dom", name="seeRecrutementCandidatDom")
     */
    public function RecrutementCandidatDomAction()
    {
        return $this->listChamp("Candidat / Domaines d'activité","/referentiel/recrutement/candidat/dom/pdf",'61', '288', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/candidat/dom/pdf", name="seeRecrutementCandidatDompdf")
     */
    public function RecrutementCandidatDomPdfAction()
    {
        return $this->listChampPdf("Candidat / Domaines d'activité",'61', '288', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/candidat/lie", name="seeRecrutementCandidatLie")
     */
    public function RecrutementCandidatLieAction()
    {
        return $this->listChamp("Candidat / Liens de recrutement","referentiel/recrutement/candidat/lie/pdf",'61', '289', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/candidat/lie/pdf", name="seeRecrutementCandidatLiepdf")
     */
    public function RecrutementCandidatLiePdfAction()
    {
        return $this->listChampPdf("Candidat / Liens de recrutement",'61', '289', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/candidat/tie", name="seeRecrutementCandidatTie")
     */
    public function RecrutementCandidatTieAction()
    {
        return $this->listChamp("Candidat / Tiers et Prestataires","referentiel/recrutement/candidat/tie/pdf",'61', '290', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/candidat/tie/pdf", name="seeRecrutementCandidatTiepdf")
     */
    public function RecrutementCandidatTiePdfAction()
    {
        return $this->listChampPdf("Candidat / Tiers et Prestataires",'61', '290', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/candidat/sit", name="seeRecrutementCandidatSit")
     */
    public function RecrutementCandidatSitAction()
    {
        return $this->listChamp("Candidat / Situation de Recrutement","referentiel/recrutement/candidat/sit/pdf",'61', '291', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/candidat/sit/pdf", name="seeRecrutementCandidatSitpdf")
     */
    public function RecrutementCandidatSitPdfAction()
    {
        return $this->listChampPdf("Candidat / Situation de Recrutement",'61', '291', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/candidat/nom", name="seeRecrutementCandidatNom")
     */
    public function RecrutementCandidatNomAction()
    {
        return $this->listChamp("Candidat / Nomenclatures","referentiel/recrutement/candidat/nom/pdf",'61', '292', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/candidat/nom/pdf", name="seeRecrutementCandidatNompdf")
     */
    public function RecrutementCandidatNomPdfAction()
    {
        return $this->listChampPdf("Candidat / Nomenclatures",'61', '292', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/candidat/avi", name="seeRecrutementCandidatAvi")
     */
    public function RecrutementCandidatAviAction()
    {
        return $this->listChamp("Candidat / Avis sur la candidature","referentiel/recrutement/candidat/avi/pdf",'61', '292', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/candidat/avi/pdf", name="seeRecrutementCandidatAvipdf")
     */
    public function RecrutementCandidatAviPdfAction()
    {
        return $this->listChampPdf("Candidat / Avis sur la candidature",'61', '292', "Référentiel");
    }
}