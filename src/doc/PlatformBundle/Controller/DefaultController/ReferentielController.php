<?php
// src\doc\PlatformBundle\Controller\ReferentielController.php
namespace doc\PlatformBundle\Controller\DefaultController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ReferentielController extends ListPage{
    /**
     *
     * @Route("/referentiel/general", name="allOngletsReferentielGeneral")
     */
    public function allOngletsReferentielGeneralAction()
    {
        return $this->listOnglets('referentiel/general', 0);
    }
    
    /**
     *
     * @Route("/referentiel/absences", name="allOngletsReferentielAbscences")
     */
    public function allOngletsReferentielAbscencesAction()
    {
        return $this->listOnglets('referentiel/absences', 0);
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail", name="allOngletsReferentielAccidentDuTravail")
     */
    public function allOngletsReferentielAccidentDuTravailAction()
    {
        return $this->listOnglets('referentiel/accidentdutravail', 0);
    }
    
    /**
     *
     * @Route("/referentiel/carriere", name="allOngletsReferentielCarriere")
     */
    public function allOngletsReferentielCarriereAction()
    {
        return $this->listOnglets('referentiel/carriere', 0);
    }
    
    /**
     *
     * @Route("/referentiel/agent", name="allOngletsReferentielAgent")
     */
    public function allOngletsReferentielAgentAction()
    {
        return $this->listOnglets('referentiel/agent', 0);
    }
    
    /**
     *
     * @Route("/referentiel/gestionmodele", name="allOngletsReferentielGestionModele")
     */
    public function allOngletsReferentielGestionModeleAction()
    {
        return $this->listOnglets('referentiel/gestionmodele', 0);
    }
    
    /**
     *
     * @Route("/referentiel/editions", name="allOngletsReferentielEditions")
     */
    public function allOngletsReferentielEditionsAction()
    {
        return $this->listOnglets('referentiel/editions', 0);
    }
    
    /**
     *
     * @Route("/referentiel/remuneration", name="allOngletsReferentielRemuneration")
     */
    public function allOngletsReferentielRemuneration()
    {
        return $this->listOnglets('referentiel/remuneration', 0);
    }
    
    /**
     *
     * @Route("/referentiel/recrutement", name="allOngletsReferentielRecrutement")
     */
    public function allOngletsReferentielRecrutementAction()
    {
        return $this->listOnglets('referentiel/recrutement', 0);
    }
    
    /**
     *
     * @Route("/referentiel/effectif", name="allOngletsReferentielEffectif")
     */
    public function allOngletsReferentielEffectifAction()
    {
        return $this->listOnglets('referentiel/effectif', 0);
    }
    
    /**
     *
     * @Route("/referentiel/alertes", name="allOngletsReferentielAlertes")
     */
    public function allOngletsReferentielAlertesAction()
    {
        return $this->listOnglets('referentiel/alertes', 0);
    }
    
    /**
     *
     * @Route("/referentiel/interfaceharpege", name="allOngletsReferentielInterfaceHarpege")
     */
    public function allOngletsReferentielInterfaceHarpegeAction()
    {
        return $this->listOnglets('referentiel/interfaceharpege', 0);
    }
    
    /**
     *
     * @Route("/referentiel/interface", name="allOngletsReferentielInterface")
     */
    public function allOngletsReferentielInterfaceAction()
    {
        return $this->listOnglets('referentiel/interface', 0);
    }
    
    /**
     *
     * @Route("/referentiel/prestation", name="allOngletsReferentielPrestation")
     */
    public function allOngletsReferentielPrestationAction()
    {
        return $this->listOnglets('referentiel/prestation', 0);
    }
    
    /**
     *
     * @Route("/referentiel/simulation", name="allOngletsSimulation")
     */
    public function allOngletsReferentielSimulationAction()
    {
        return $this->listOnglets('referentiel/simulation', 0);
    }
    
    /**
     *
     * @Route("/referentiel/suppleance", name="allOngletsReferentielSuppleance")
     */
    public function allOngletsReferentielSuppleanceAction()
    {
        return $this->listOnglets('referentiel/suppleance', 0);
    }
    
    /**
     *
     * @Route("/referentiel/gestionfichier", name="allOngletsReferentielGestionFichier")
     */
    public function allOngletsReferentielGestionFichierAction()
    {
        return $this->listOnglets('referentiel/gestionfichier', 0);
    }
    
    /**
     *
     * @Route("/referentiel/coherence", name="allOngletsReferentielCoherence")
     */
    public function allOngletsReferentielCoherenceAction()
    {
        return $this->listOnglets('referentiel/coherence', 0);
    }
    
    /**
     *
     * @Route("/referentiel/declaration", name="allOngletsReferentielDeclaration")
     */
    public function allOngletsReferentielDeclarationAction()
    {
        return $this->listOnglets('referentiel/declaration', 0);
    }
    
    /**
     *
     * @Route("/referentiel/evaluation", name="allOngletsReferentielEvaluation")
     */
    public function allOngletsReferentielEvaluationAction()
    {
        return $this->listOnglets('referentiel/evaluation', 0);
    }
}