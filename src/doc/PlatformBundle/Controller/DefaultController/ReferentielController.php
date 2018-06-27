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
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/interfaceharpege');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/interface", name="allOngletsReferentielInterface")
     */
    public function allOngletsReferentielInterfaceAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/interface');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/prestation", name="allOngletsReferentielPrestation")
     */
    public function allOngletsReferentielPrestationAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/prestation');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/simulation", name="allOngletsSimulation")
     */
    public function allOngletsReferentielSimulationAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/simulation');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/suppleance", name="allOngletsReferentielSuppleance")
     */
    public function allOngletsReferentielSuppleanceAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/suppleance');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/gestionfichier", name="allOngletsReferentielGestionFichier")
     */
    public function allOngletsReferentielGestionFichierAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/gestionfichier');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/coherence", name="allOngletsReferentielCoherence")
     */
    public function allOngletsReferentielCoherenceAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/coherence');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/declaration", name="allOngletsReferentielDeclaration")
     */
    public function allOngletsReferentielDeclarationAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/declaration');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
    
    /**
     *
     * @Route("/referentiel/evaluation", name="allOngletsReferentielEvaluation")
     */
    public function allOngletsReferentielEvaluationAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/evaluation');
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()
                ));
            $listOnglets[$i]->setPages($listPages);
        }
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
}