<?php
// src\doc\PlatformBundle\Controller\TraitementController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TraitementController extends Controller{
    /**
     *
     * @Route("/allonglets/traitement", name="allOngletsTraitement")
     */
    public function allOngletsTraitementAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType('traitement');
        
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