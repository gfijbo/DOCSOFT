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
        $_SESSION['listOnglets'] = $listOnglets;
        
        $html = $this->redirectToRoute('alloperation');
        return $html;
    }
}