<?php
// src\doc\PlatformBundle\Controller\ReferentielController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReferentielController extends Controller{
    /**
     *
     * @Route("/referentiel/general", name="allOngletsReferentielGeneral")
     */
    public function allOngletsReferentielGeneralAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/general');
        
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
     * @Route("/referentiel/abscences", name="allOngletsReferentielAbscences")
     */
    public function allOngletsReferentielAbscencesAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/abscences');
        
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
     * @Route("/referentiel/accidentdutravail", name="allOngletsReferentielAccidentDuTravail")
     */
    public function allOngletsReferentielAccidentDuTravailAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/accidentdutravail');
        
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
     * @Route("/referentiel/carriere", name="allOngletsReferentielCarriere")
     */
    public function allOngletsReferentielCarriereAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/carriere');
        
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
     * @Route("/referentiel/agent", name="allOngletsReferentielAgent")
     */
    public function allOngletsReferentielAgentAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/agent');
        
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
     * @Route("/referentiel/gestionmodele", name="allOngletsReferentielGestionModele")
     */
    public function allOngletsReferentielGestionModeleAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/gestionmodele');
        
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
     * @Route("/referentiel/editions", name="allOngletsReferentielEditions")
     */
    public function allOngletsReferentielEditionsAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/editions');
        
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
     * @Route("/referentiel/remuneration", name="allOngletsReferentielRemuneration")
     */
    public function allOngletsReferentielRemuneration()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/remuneration');
        
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
     * @Route("/referentiel/recrutement", name="allOngletsReferentielRecrutement")
     */
    public function allOngletsReferentielRecrutementAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/recrutement');
        
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
     * @Route("/referentiel/effectif", name="allOngletsReferentielEffectif")
     */
    public function allOngletsReferentielEffectifAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/effectif');
        
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
     * @Route("/referentiel/alertes", name="allOngletsReferentielAlertes")
     */
    public function allOngletsReferentielAlertesAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('referentiel/alertes');
        
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