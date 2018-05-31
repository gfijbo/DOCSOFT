<?php
// src\doc\PlatformBundle\Controller\MenuController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MenuController extends Controller{
    /**
     *
     * @Route("/allonglets", name="allOnglets")
     */
    public function allOngletsAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findAll();
        
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