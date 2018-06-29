<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Declaration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SreController extends ListPage
{
    /**
     *
     * @Route("/referentiel/declaration/sre/typbon", name="seeDeclarationSreTypbon")
     */
    public function DeclarationSreTypbonAction()
    {
        return $this->listChamp("SRE / Types Bonification","referentiel/declaration/sre/typbon/pdf",'108', '389', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/typbon/pdf", name="DeclarationSreTypbonpdf")
     */
    public function DeclarationSreTypbonPdfAction()
    {
        return $this->listChampPdf("SRE / Types Bonification",'108', '389', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/ter", name="seeDeclarationSreTer")
     */
    public function DeclarationSreTerAction()
    {
        return $this->listChamp("SRE / Territoires Campagne","referentiel/declaration/sre/ter/pdf",'108', '390', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/ter/pdf", name="DeclarationSreTerpdf")
     */
    public function DeclarationSreTerPdfAction()
    {
        return $this->listChampPdf("SRE / Territoires Campagne",'108', '390', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/eco", name="seeDeclarationSreEco")
     */
    public function DeclarationSreEcoAction()
    {
        return $this->listChamp("SRE / Ecoles","referentiel/declaration/sre/eco/pdf",'108', '391', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/eco/pdf", name="DeclarationSreEcopdf")
     */
    public function DeclarationSreEcoPdfAction()
    {
        return $this->listChampPdf("SRE / Ecoles",'108', '391', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/lim", name="seeDeclarationSreLim")
     */
    public function DeclarationSreLimAction()
    {
        return $this->listChamp("SRE / Limites Age","referentiel/declaration/sre/lim/pdf",'108', '392', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/lim/pdf", name="DeclarationSreLimpdf")
     */
    public function DeclarationSreLimPdfAction()
    {
        return $this->listChampPdf("SRE / Limites Age",'108', '392', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/cod", name="seeDeclarationSreCod")
     */
    public function DeclarationSreCodAction()
    {
        return $this->listChamp("SRE / Code Article","referentiel/declaration/sre/cod/pdf",'108', '393', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/cod/pdf", name="DeclarationSreCodpdf")
     */
    public function DeclarationSreCodPdfAction()
    {
        return $this->listChampPdf("SRE / Code Article",'108', '393', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/typmou", name="seeDeclarationSreTypmou")
     */
    public function DeclarationSreTypmouAction()
    {
        return $this->listChamp("SRE / Type Mouvement","referentiel/declaration/sre/typmou/pdf",'108', '394', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/sre/typmou/pdf", name="DeclarationSreTypmoupdf")
     */
    public function DeclarationSreTypmouPdfAction()
    {
        return $this->listChampPdf("SRE / Type Mouvement",'108', '394', "Référentiel");
    }
}