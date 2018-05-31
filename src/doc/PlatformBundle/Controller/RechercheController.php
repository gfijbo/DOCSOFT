<?php
// src\doc\PlatformBundle\Controller\RechercheController.php
namespace doc\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class RechercheController extends Controller
{

    /**
     *
     * @Route("/searchmenu", name="searchMenu")
     */
    // pour afficher le menu de recherche avancée
    public function indexRecherche()
    {
        $menu = "Outils de recherche";
        $page = "Recherche Avancée";
        $urlPage = "searchmenu";

        $html = $this->render('docPlatformBundle:Recherche:searchMenu.html.twig', array(
            'page' => $page,
            'menu' => $menu,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     *
     * @Route("/searchtype", name="searchType")
     */
    // pour exécuter les différentes fonctions de recherche
    public function searchType()
    {
        // place les variable du formulaire dans des variables session
        if (isset($_POST['data'])) {
            $_SESSION['data'] = $_POST['data'];
            $_SESSION['search'] = $_POST['search'];
        }

        if ($_POST['search'] == "doc") {
            $html = $this->redirectToRoute('searchDoc');
        } elseif ($_POST['search'] == "champ" || $_POST['search'] == "champp") {
            $html = $this->redirectToRoute('searchChamp');
        } elseif ($_POST['search'] == "forma" || $_POST['search'] == "formap") {
            $html = $this->redirectToRoute('searchFormation');
        } elseif ($_POST['search'] == "tuto" || $_POST['search'] == "tutop") {
            $html = $this->redirectToRoute('searchTutoriel');
        } else {
            $html = $this->redirectToRoute('search');
        }
        return $html;
    }
    
    /**
     *
     * @Route("/searchtutoriel", name="searchTutoriel")
     */
    // pour la recherche sur une formation
    public function searchTutoriel(Request $request)
    {
        $menu = "Outils de recherche";
        $page = "Recherche par tutoriel";
        $urlPage = "searchmenu";
        // test l'existence de data dans le formulaire et le place en variable globale
        if (isset($_POST['data'])) {
            $_SESSION['data'] = $_POST['data'];
        }
        $data = $_SESSION['data'];
        $search = $_SESSION['search'];
        
        $sql = "SELECT t.id, t.nom_tuto, p.page, o.onglet "
            . "FROM tutoriel AS t, page AS p, onglet AS o "
                . "WHERE p.id = '9' "
                    . "AND o.id = '7' ";
                        
                // dans le cas d'une recherche approximative d'un champ
                if ($search == "tuto") {
                    $sql = $sql . "AND t.nom_tuto LIKE '%" . $data . "%'";
                } else {
                    // dans le cas d'une recherche précise sur un champ
                    $sql = $sql . "AND UPPER(t.nom_tuto) = UPPER('" . $data . "')";
                }
                $stmt = $this->getDoctrine()
                ->getConnection()
                ->prepare($sql);
                $stmt->execute([]);
                $results = $stmt->fetchAll();
                $resultats = $this->get('knp_paginator')->paginate($results, $request->query->get('page', 1), 6);
                $html = $this->render('docPlatformBundle:Recherche:searchTutoriel.html.twig', array(
                    'nb' => count($results),
                    'results' => $resultats,
                    'page' => $page,
                    'urlPage' => $urlPage,
                    'menu' => $menu,
                    'data' => $data,
                    'listOnglets' => $_SESSION['listOnglets'],
                    'compteur' => count($_SESSION['listAlerts']),
                    'listAlerts' => $_SESSION['listAlerts']
                ));
                return $html;
    }
    
    
    /**
     *
     * @Route("/searchformation", name="searchFormation")
     */
    // pour la recherche sur une formation
    public function searchFormation(Request $request)
    {
        $menu = "Outils de recherche";
        $page = "Recherche par formation";
        $urlPage = "searchmenu";
        // test l'existence de data dans le formulaire et le place en variable globale
        if (isset($_POST['data'])) {
            $_SESSION['data'] = $_POST['data'];
        }
        $data = $_SESSION['data'];
        $search = $_SESSION['search'];
        
        $sql = "SELECT f.id, f.nom_form, p.page, o.onglet "
            . "FROM formation AS f, page AS p, onglet AS o "
                . "WHERE p.id = '10' " . "AND o.id = '6'"; 
                    // dans le cas d'une recherche approximative d'un champ
                    if ($search == "forma") {
                        $sql = $sql . "AND f.nom_form LIKE '%" . $data . "%'";
                    } else {
                        // dans le cas d'une recherche précise sur un champ
                        $sql = $sql . "AND UPPER(f.nom_form) = UPPER('" . $data . "')";
                    }
                    $stmt = $this->getDoctrine()
                    ->getConnection()
                    ->prepare($sql);
                    $stmt->execute([]);
                    $results = $stmt->fetchAll();
                    $resultats = $this->get('knp_paginator')->paginate($results, $request->query->get('page', 1), 6);
                    $html = $this->render('docPlatformBundle:Recherche:searchFormation.html.twig', array(
                        'nb' => count($results),
                        'results' => $resultats,
                        'page' => $page,
                        'urlPage' => $urlPage,
                        'menu' => $menu,
                        'data' => $data,
                        'listOnglets' => $_SESSION['listOnglets'],
                        'compteur' => count($_SESSION['listAlerts']),
                        'listAlerts' => $_SESSION['listAlerts']
                    ));
                    return $html;
    }
    /**
     *
     * @Route("/searchchamp", name="searchChamp")
     */
    // pour la recherche sur un champ
    public function searchChamp(Request $request)
    {
        $menu = "Outils de recherche";
        $page = "Recherche par champ";
        $urlPage = "searchmenu";
        // test l'existence de data dans le formulaire et le place en variable globale
        if (isset($_POST['data'])) {
            $_SESSION['data'] = $_POST['data'];
        }
        $data = $_SESSION['data'];
        $search = $_SESSION['search'];

        $sql = "SELECT d.id, d.champ, p.page, o.onglet " 
        . "FROM dossier_agent AS d, page AS p, onglet AS o " 
        . "WHERE d.page_ref = p.id " 
        . "AND d.onglet_ref = o.id ";
        // dans le cas d'une recherche approximative d'un champ
        if ($search == "champ") {
            $sql = $sql . "AND d.champ LIKE '%" . $data . "%'";
        } else {
            // dans le cas d'une recherche précise sur un champ
            $sql = $sql . "AND UPPER(d.champ) = UPPER('" . $data . "')";
        }
        $stmt = $this->getDoctrine()
            ->getConnection()
            ->prepare($sql);
        $stmt->execute([]);
        $results = $stmt->fetchAll(); 
        $resultats = $this->get('knp_paginator')->paginate($results, $request->query->get('page', 1), 6);
        $html = $this->render('docPlatformBundle:Recherche:searchChamp.html.twig', array(
            'nb' => count($results),
            'results' => $resultats,
            'page' => $page,
            'urlPage' => $urlPage,
            'menu' => $menu,
            'data' => $data,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     *
     *@Route("/searchdoc", name="searchDoc")
     */
    // pour la recherche sur les documents
    public function searchDoc(Request $request)
    {
        $menu = "Outils de recherche";
        $page = "Recherche par document";
        $urlPage = "searchmenu";
        if (isset($_POST['data'])) {
            $_SESSION['data'] = $_POST['data'];
        }
        $data = $_SESSION['data'];
        $sql = "SELECT d.id, d.document_name, p.page, o.onglet " 
        . "FROM document AS d, page AS p, onglet AS o " 
        . "WHERE p.id = '3' " . "AND o.id = '5' " 
        . "AND d.document_name LIKE '%" . $data . "%'";

        $stmt = $this->getDoctrine()
            ->getConnection()
            ->prepare($sql);
        $stmt->execute([]);
        $results = $stmt->fetchAll();
        $resultats = $this->get('knp_paginator')->paginate($results, $request->query->get('page', 1), 6);
        $html = $this->render('docPlatformBundle:Recherche:searchDoc.html.twig', array(
            'nb' => count($results),
            'results' => $resultats,
            'page' => $page,
            'menu' => $menu,
            'data' => $data,
            'urlPage' => $urlPage,
            'listOnglets' => $_SESSION['listOnglets'],
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }

    /**
     *
     * @Route("/search", name="search")
     */
    // pour la recherche globale sur le site
    public function search(Request $request)
    {
        $menu = "Outils de recherche";
        $page = "Recherche Globale";
        $urlPage = "searchmenu";
        if (isset($_POST['data'])) {
            $_SESSION['data'] = $_POST['data'];
        }
        $data = $_SESSION['data'];
        // pour récupérer les champs correspondants à la recherche
        $sql = "SELECT d.id, d.champ , null as document_name, null as nom_form, null as nom_tuto, p.page, o.onglet " 
        . "FROM dossier_agent AS d, page AS p, onglet AS o " 
        . "WHERE d.page_ref = p.id " 
        . "AND d.onglet_ref = o.id " 
        . "AND d.champ LIKE '%" . $data . "%'" . 
        "UNION " . 
        // pour récupérer les documents correspondants à la recherche
        "SELECT d.id, null as champ, d.document_name, null as nom_form, null as nom_tuto, p.page, o.onglet " 
        . "FROM document AS d, page AS p, onglet AS o " 
        . "WHERE p.id = '3' " 
        . "AND o.id = '5' " 
        . "AND d.document_name LIKE '%" . $data . "%'".
        "UNION ".
        // pour récupérer les formations correspondants à la recherche
        "SELECT f.id, null as champ , null as document_name, f.nom_form,null as nom_tuto, p.page, o.onglet "
        . "FROM formation AS f, page AS p, onglet AS o "
        . "WHERE p.id = '10' " 
        . "AND o.id = '6' "
        . " AND f.nom_form LIKE '%" . $data . "%'".
        "UNION ".
        // pour récupérer les tutoriels correspondants à la recherche
        "SELECT t.id, null as champ , null as document_name, null as nom_form, t.nom_tuto, p.page, o.onglet "
        . "FROM tutoriel AS t, page AS p, onglet AS o "
        . "WHERE p.id = '9' "
        . "AND o.id = '7' "
        . "AND t.nom_tuto LIKE '%" . $data . "%'";

        $stmt = $this->getDoctrine()
            ->getConnection()
            ->prepare($sql);
        $stmt->execute([]);
        $results = $stmt->fetchAll();
        if(empty($results) || empty($data)){
            $occ = "";
        }else{
            for($i=0; $i<count($results);$i++){
                $occ[$i]= explode($data, $results[$i]["champ"]);
                $occ1[$i] = explode($data, $results[$i]["document_name"]);
                $occ2[$i] = explode($data, $results[$i]["nom_form"]);
                $occ3[$i] = explode($data, $results[$i]["nom_tuto"]);
                $occ[$i] = array_merge($occ[$i], $occ1[$i]);
                $occ[$i] = array_merge($occ[$i], $occ2[$i]);
                $occ[$i] = array_merge($occ[$i], $occ3[$i]);
            }
        }
        
        $resultats = $this->get('knp_paginator')->paginate($results, $request->query->get('page', 1), 6);
        $html = $this->render('docPlatformBundle:Recherche:search.html.twig', array(
            'nb' => count($results),
            'results' => $resultats,
            'page' => $page,
            'menu' => $menu,
            'data' => $data,
            'listOnglets' => $_SESSION['listOnglets'],
            'occ' => $occ,
            'nbocc' => count($occ),
            'urlPage' => $urlPage,
            'compteur' => count($_SESSION['listAlerts']),
            'listAlerts' => $_SESSION['listAlerts']
        ));
        return $html;
    }
}