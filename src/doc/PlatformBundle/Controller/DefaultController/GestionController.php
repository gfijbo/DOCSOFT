<?php
// src\doc\PlatformBundle\Controller\GestionController.php
namespace doc\PlatformBundle\Controller\DefaultController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class GestionController extends ListPage{
    /**
     *
     * @Route("/gestion/agent", name="allOngletsGestion")
     */
    public function allOngletsGestionAgentAction()
    {
        return $this->listOnglets('gestion/agent', -1);
    }
    
    /**
     *
     * @Route("/gestion/recrutement", name="allOngletsGestionRecrutement")
     */
    public function allOngletsGestionRecrutementAction()
    {
        return $this->listOnglets('gestion/recrutement', 0);
    }
    
    /**
     *
     * @Route("/gestion/effectif", name="allOngletsGestionEffectif")
     */
    public function allOngletsGestionEffectifAction()
    {
        return $this->listOnglets('gestion/effectif', 0);
    }
    
    /**
     *
     * @Route("/gestion/metier", name="allOngletsMetier")
     */
    public function allOngletsGestionMetierAction()
    {
        return $this->listOnglets('gestion/metier', 0);
    }
    
    /**
     *
     * @Route("/gestion/simulation", name="allOngletsGestionSimulation")
     */
    public function allOngletsGestionSimulationAction()
    {
        return $this->listOnglets('gestion/simulation', 0);
    }
    
    /**
     *
     * @Route("/gestion/suppleance", name="allOngletsGestionSuppleance")
     */
    public function allOngletsGestionSuppleanceAction()
    {
        return $this->listOnglets('gestion/suppleance', 0);
    }
    
    /**
     *
     * @Route("/gestion/evaluation", name="allOngletsGestionEvaluation")
     */
    public function allOngletsGestionEvaluationAction()
    {
        return $this->listOnglets('gestion/evaluation', 0);
    }
}