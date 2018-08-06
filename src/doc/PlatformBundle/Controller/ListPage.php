<?php
// src\doc\PlatformBundle\Controller\ListPage.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use doc\PlatformBundle\Entity\DossierAgent;



class ListPage extends Controller
{
    public function listChamp(string $v1, string $v2, int $v3, int $v4, string $v5)
    {
        $menu = $v5;
        $page = $v1;
        $urlPage = "menudoc/".$v5."/".$v3;
        $urlPdf = $v2;
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => $v3, 'page_ref' => $v4), array('id' => 'asc')
        );
        $html = $this->render('docPlatformBundle:DossierAgent:indexAgent.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'urlPdf' => $urlPdf,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    public function listChampPdf(string $v1, int $v3, int $v4, string $v5)
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $menu = $v5;
        $page = $v1;
        $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:DossierAgent');

        $listDoss = $repository->findBy(
            array('onglet_ref' => $v3, 'page_ref' => $v4), array('num_ordre' => 'asc')
        );
        $snappy = $this->get("knp_snappy.pdf");

        $html = $this->renderView('docPlatformBundle:DossierAgent:pdf.html.twig', array(
            'listDoss' => $listDoss,
            'page' => $page,
            'menu' => $menu
        ));

        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    //pour afficher un champ
    /**
     *
     * @Route("/seechamp/{id}", name="seechamp")
     */
    public function seeChampAction($id)
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $doss = $repository->find($id);
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Page');
        $page = $repository->find($doss->getPage_ref())->getUrl();
        $menu = "Documentation";
        $urlPage = "/localhost:8000".$page;
        
        return $this->render('docPlatformBundle:DossierAgent:seeChamp.html.twig', array(
            'doss' => $doss,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }
    //pour ajouter un champ
    /**
     *
     * @Route("/addchamp", name="addChamp")
     */
    public function addChampAction()
    {           
        if(isset($_POST["page_ref"])){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            $page = $repository->findByPage($_POST['page_ref']);
        }
        $doss = new DossierAgent();
        
        if(isset($_POST["champ"])){
            $doss->setChamp($_POST["champ"]);
        }
        if(isset($_POST["ordre"])){
            $doss->setNum_ordre($_POST["ordre"]);
        }
        if(isset($_POST["origine"])){
            $doss->setOrigine($_POST["origine"]);
        }
        if(isset($_POST["format"])){
            $doss->setFormat($_POST["format"]);
        }
        if(isset($_POST["libelle"])){
            $doss->setLibelle($_POST["libelle"]);
        }
        
        $doss->setOnglet_ref($page[0]->getOnglet_ref());
        $doss->setPage_ref($page[0]->getId());
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($doss);
        
        $em->flush();
        
        return $this->redirectToRoute("seechamp", array(
            'doss' => $doss,
            'id'=>$doss->getId(),
            'listOnglets' => $_SESSION['listOnglets'],
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }
    
    //pour modifier le champ
    /**
     *
     * @Route("/modchamp", name="modchamp")
     */
    public function modChampAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        if(isset($_POST["idchamps"])){
            $doss = $repository->find($_POST["idchamps"]);
        }
        if(isset($_POST["champ"])){
            $doss->setChamp($_POST["champ"]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($doss);
            $em->flush();
        }
        
        return $this->redirectToRoute("seechamp", array(
            'doss' => $doss,
            'id'=>$_POST["idchamps"],
            'listOnglets' => $_SESSION['listOnglets'],
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }
    
    //pour supprimer le champ
    /**
     *
     * @Route("/dropchamp/{id}", name="dropChamp")
     */
    public function dropChampAction($id)
    {
        
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        $doss = $repository->find($id);
        $page_id = $doss->getPage_ref();
            
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Page');
        $page = $repository->find($page_id);
        $urlPage = "http://localhost:8000".$page->getUrl();
            
        $em = $this->getDoctrine()->getManager();
        $em->remove($doss);
        $em->flush();
           
        
            $html = $this->redirect($urlPage);
            return $html;
    }
    
    //pour modifier l'ordre
    /**
     *
     * @Route("/modordre", name="modOrdre")
     */
    public function modOrdreAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        if(isset($_POST["idchamps"])){
            $doss = $repository->find($_POST["idchamps"]);
        }
        if(isset($_POST["ordre"])){
            $doss->setNum_ordre($_POST["ordre"]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($doss);
            $em->flush();
        }
        
        return $this->redirectToRoute("seechamp", array(
            'doss' => $doss,
            'id'=>$_POST["idchamps"],
            'listOnglets' => $_SESSION['listOnglets'],
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }
    
    //pour modifier l'origine
    /**
     *
     * @Route("/modorigine", name="modOrigine")
     */
    public function modOrigineAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        if(isset($_POST["idchamps"])){
            $doss = $repository->find($_POST["idchamps"]);
        }
        if(isset($_POST["origine"])){
            $doss->setOrigine($_POST["origine"]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($doss);
            $em->flush();
        }
        
        return $this->redirectToRoute("seechamp", array(
            'doss' => $doss,
            'id'=>$_POST["idchamps"],
            'listOnglets' => $_SESSION['listOnglets'],
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }
    
    //pour modifier le format
    /**
     *
     * @Route("/modformat", name="modFormat")
     */
    public function modFormatAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        if(isset($_POST["idchamps"])){
            $doss = $repository->find($_POST["idchamps"]);
        }
        if(isset($_POST["format"])){
            $doss->setFormat($_POST["format"]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($doss);
            $em->flush();
        }
        
        return $this->redirectToRoute("seechamp", array(
            'doss' => $doss,
            'id'=>$_POST["idchamps"],
            'listOnglets' => $_SESSION['listOnglets'],
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }
    
    //pour modifier le libellé
    /**
     *
     * @Route("/modlibelle", name="modLibelle")
     */
    public function modLibelleAction()
    {
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        if(isset($_POST["idchamps"])){
            $doss = $repository->find($_POST["idchamps"]);
        }
        if(isset($_POST["libelle"])){
            $doss->setLibelle($_POST["libelle"]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($doss);
            $em->flush();
        }
        
        return $this->redirectToRoute("seechamp", array(
            'doss' => $doss,
            'id'=>$_POST["idchamps"],
            'listOnglets' => $_SESSION['listOnglets'],
            'listAlerts' => $_SESSION['listAlerts']
        ));
    }
    
    //pour afficher le champ au format pdf
    /**
     *
     * @Route("/pdfchamp/{id}", name="seechamppdf")
     */
    public function pdfChampAction($id)
    {
        $filename = 'Etat_Civil';
        $menu = "Dossier Agent";
        $page = "Etat Civil";
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:DossierAgent');
        
        $doss = $repository->find($id);
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView('docPlatformBundle:DossierAgent:pdfChamp.html.twig', array(
            'doss' => $doss,
            'page' => $page,
            'menu' => $menu
        ));
        
        return new Response($snappy->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
        ));
    }
    
    public function listOnglets(string $type, int $v1){
        $repository = $this->getdoctrine()
        ->getManager()
        ->getRepository('docPlatformBundle:Onglet');
        $listOnglets = $repository->findByType($type);
        
        for($i=0;$i<sizeof($listOnglets);$i++){
            $repository = $this->getdoctrine()
            ->getManager()
            ->getRepository('docPlatformBundle:Page');
            
            $listPages = $repository->findBy(
                array('onglet_ref'=> $listOnglets[$i]->getId()+$v1
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