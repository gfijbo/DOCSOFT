<?php
// src\doc\PlatformBundle\Controller\TraitementController.php
namespace doc\PlatformBundle\Controller\DefaultController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TraitementController extends ListPage{
    /**
     *
     * @Route("/traitement/identite", name="allOngletsTraitementIdentite")
     */
    public function allOngletsTraitementIdentiteAction()
    {
        return $this->listOnglets('traitement/identite', 0);
    }
    
    /**
     *
     * @Route("/traitement/agent", name="allOngletsTraitementAgent")
     */
    public function allOngletsTraitementAgentAction()
    {
        return $this->listOnglets('traitement/agent', 0);
    }
    /**
     *
     * @Route("/traitement/carriere", name="allOngletsTraitementCarriere")
     */
    public function allOngletsTraitementCarriereAction()
    {
        return $this->listOnglets('traitement/carriere', 0);
    }
    
    /**
     *
     * @Route("/traitement/absences", name="allOngletsTraitementAbsences")
     */
    public function allOngletsTraitementAbsencesAction()
    {
        return $this->listOnglets('traitement/absences', 0);
    }
    
    /**
     *
     * @Route("/traitement/droit", name="allOngletsTraitementDroit")
     */
    public function allOngletsTraitementDroitAction()
    {
        return $this->listOnglets('traitement/droit', 0);
    }
    
    /**
     *
     * @Route("/traitement/remuneration", name="allOngletsTraitementRemuneration")
     */
    public function allOngletsTraitementRemunerationAction()
    {
        return $this->listOnglets('traitement/remuneration', 0);
    }
    
    /**
     *
     * @Route("/traitement/listes", name="allOngletsTraitementListes")
     */
    public function allOngletsTraitementListesAction()
    {
        return $this->listOnglets('traitement/listes', 0);
    }
    
    /**
     *
     * @Route("/traitement/editions", name="allOngletsTraitementEditions")
     */
    public function allOngletsTraitementEditionsAction()
    {
        return $this->listOnglets('traitement/editions', 0);
    }
    
    /**
     *
     * @Route("/traitement/exploitation", name="allOngletsTraitementExploitation")
     */
    public function allOngletsTraitementExploitationAction()
    {
        return $this->listOnglets('traitement/exploitation', 0);
    }
    
    /**
     *
     * @Route("/traitement/groupes", name="allOngletsTraitementsGroupes")
     */
    public function allOngletsTraitementGroupesAction()
    {
        return $this->listOnglets('traitement/groupes', 0);
    }
    /**
     *
     * @Route("/traitement/epurations", name="allOngletsTraitementEpurations")
     */
    public function allOngletsTraitementEpurationsAction()
    {
        return $this->listOnglets('traitement/epurations', 0);
    }
    
    /**
     *
     * @Route("/traitement/interface", name="allOngletsTraitementInterface")
     */
    public function allOngletsTraitementInterfaceAction()
    {
        return $this->listOnglets('traitement/interface', 0);
    }
    
    /**
     *
     * @Route("/traitement/liaison", name="allOngletsTraitementLiaison")
     */
    public function allOngletsTraitementLiaisonAction()
    {
        return $this->listOnglets('traitement/liaison', 0);
    }
    
    /**
     *
     * @Route("/traitement/astrator", name="allOngletsTraitementAstrator")
     */
    public function allOngletsTraitementAstratorAction()
    {
        return $this->listOnglets('traitement/astrator', 0);
    }
    
    /**
     *
     * @Route("/traitement/effectif", name="allOngletsTraitementEffectif")
     */
    public function allOngletsTraitementEffectifAction()
    {
        return $this->listOnglets('traitement/effectif', 0);
    }
    
    /**
     *
     * @Route("/traitement/suppleance", name="allOngletsTraitementSuppleance")
     */
    public function allOngletsTraitementSuppleanceAction()
    {
        return $this->listOnglets('traitement/suppleance', 0);
    }
    
    /**
     *
     * @Route("/traitement/dsn", name="allOngletsTraitementDsn")
     */
    public function allOngletsTraitementDsnAction()
    {
        return $this->listOnglets('traitement/dsn', 0);
    }
    
    /**
     *
     * @Route("/traitement/n4ds", name="allOngletsTraitementN4ds")
     */
    public function allOngletsTraitementN4dsAction()
    {
        return $this->listOnglets('traitement/n4ds', 0);
    }
    
    /**
     *
     * @Route("/traitement/dads", name="allOngletsTraitementDads")
     */
    public function allOngletsTraitementDadsAction()
    {
        return $this->listOnglets('traitement/dads', 0);
    }
    
    /**
     *
     * @Route("/traitement/dn", name="allOngletsTraitementDn")
     */
    public function allOngletsTraitementDnAction()
    {
        return $this->listOnglets('traitement/dn', 0);
    }
    
    /**
     *
     * @Route("/traitement/prestation", name="allOngletsTraitementPrestation")
     */
    public function allOngletsTraitementPrestationAction()
    {
        return $this->listOnglets('traitement/prestation', 0);
    }
    
    /**
     *
     * @Route("/traitement/alerte", name="allOngletsTraitementAlerte")
     */
    public function allOngletsTraitementAlerteAction()
    {
        return $this->listOnglets('traitement/alerte', 0);
    }
    
    /**
     *
     * @Route("/traitement/simulation", name="allOngletsTraitementSimulation")
     */
    public function allOngletsTraitementSimulationAction()
    {
        return $this->listOnglets('traitement/simulation', 0);
    }
    
    /**
     *
     * @Route("/traitement/rapport", name="allOngletsTraitementRapport")
     */
    public function allOngletsTraitementRapportAction()
    {
        return $this->listOnglets('traitement/rapport', 0);
    }
    
    /**
     *
     * @Route("/traitement/due", name="allOngletsTraitementDue")
     */
    public function allOngletsTraitementDueAction()
    {
        return $this->listOnglets('traitement/due', 0);
    }
    
    /**
     *
     * @Route("/traitement/anteriorite", name="allOngletsTraitementAnteriorite")
     */
    public function allOngletsTraitementAnterioriteAction()
    {
        return $this->listOnglets('traitement/anteriorite', 0);
    }
    
    /**
     *
     * @Route("/traitement/export", name="allOngletsTraitementExport")
     */
    public function allOngletsTraitementExportAction()
    {
        return $this->listOnglets('traitement/export', 0);
    }
    
    /**
     *
     * @Route("/traitement/modules", name="allOngletsTraitementModules")
     */
    public function allOngletsTraitementModulesAction()
    {
        return $this->listOnglets('traitement/modules', 0);
    }
    
    /**
     *
     * @Route("/traitement/preparation", name="allOngletsTraitementPreparation")
     */
    public function allOngletsTraitementPreparationAction()
    {
        return $this->listOnglets('traitement/preparation', 0);
    }
    
    /**
     *
     * @Route("/traitement/pilotage", name="allOngletsTraitementPilotage")
     */
    public function allOngletsTraitementPilotageAction()
    {
        return $this->listOnglets('traitement/pilotage', 0);
    }
    
    /**
     *
     * @Route("/traitement/declaration", name="allOngletsTraitementDeclaration")
     */
    public function allOngletsTraitementDeclarationAction()
    {
        return $this->listOnglets('traitement/declaration', 0);
    }
}