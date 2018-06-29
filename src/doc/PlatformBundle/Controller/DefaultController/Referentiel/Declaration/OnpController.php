<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Declaration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OnpController extends ListPage
{
    /**
     *
     * @Route("/referentiel/declaration/onp/1", name="seeDeclarationOnp1")
     */
    public function DeclarationOnp1Action()
    {
        return $this->listChamp("ONP (SIRH) / 1 - Catégories Services","/referentiel/declaration/onp/1/pdf",'107', '377', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/1/pdf", name="DeclarationOnp1pdf")
     */
    public function DeclarationOnp1PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 1 - Catégories Services",'107', '377', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/2", name="seeDeclarationOnp2")
     */
    public function DeclarationOnp2Action()
    {
        return $this->listChamp("ONP (SIRH) / 2 - Congés et Absences","/referentiel/declaration/onp/2/pdf",'107', '378', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/2/pdf", name="DeclarationOnp2pdf")
     */
    public function DeclarationOnp2PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 2 - Congés et Absences",'107', '378', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/3", name="seeDeclarationOnp3")
     */
    public function DeclarationOnp3Action()
    {
        return $this->listChamp("ONP (SIRH) / 3 - Service National","/referentiel/declaration/onp/3/pdf",'107', '379', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/3/pdf", name="DeclarationOnp3pdf")
     */
    public function DeclarationOnp3PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 3 - Service National",'107', '379', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/4", name="seeDeclarationOnp4")
     */
    public function DeclarationOnp4Action()
    {
        return $this->listChamp("ONP (SIRH) / 4 - Lien Filiation Enfant","/referentiel/declaration/onp/4/pdf",'107', '380', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/4/pdf", name="DeclarationOnp4pdf")
     */
    public function DeclarationOnp4PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 4 - Lien Filiation Enfant",'107', '380', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/5", name="seeDeclarationOnp5")
     */
    public function DeclarationOnp5Action()
    {
        return $this->listChamp("ONP (SIRH) / 5 - Modalité Service","/referentiel/declaration/onp/5/pdf",'107', '381', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/5/pdf", name="DeclarationOnp5pdf")
     */
    public function DeclarationOnp5PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 5 - Modalité Service",'107', '381', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/6", name="seeDeclarationOnp6")
     */
    public function DeclarationOnp6Action()
    {
        return $this->listChamp("ONP (SIRH) / 6 - Motifs Cessation Fonction","/referentiel/declaration/onp/6/pdf",'107', '382', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/6/pdf", name="DeclarationOnp6pdf")
     */
    public function DeclarationOnp6PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 6 - Motifs Cessation Fonction",'107', '382', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/7", name="seeDeclarationOnp7")
     */
    public function DeclarationOnp7Action()
    {
        return $this->listChamp("ONP (SIRH) / 7 - Motifs Prolongation Activité","/referentiel/declaration/onp/7/pdf",'107', '383', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/7/pdf", name="DeclarationOnp7pdf")
     */
    public function DeclarationOnp7PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 7 - Motifs Prolongation Activité",'107', '383', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/8", name="seeDeclarationOnp8")
     */
    public function DeclarationOnp8Action()
    {
        return $this->listChamp("ONP (SIRH) / 8 - Positions Statutaires","/referentiel/declaration/onp/8/pdf",'107', '384', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/8/pdf", name="DeclarationOnp8pdf")
     */
    public function DeclarationOnp8PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 8 - Positions Statutaires",'107', '384', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/10", name="seeDeclarationOnp10")
     */
    public function DeclarationOnp10Action()
    {
        return $this->listChamp("ONP (SIRH) / 10 - Statut Agent","/referentiel/declaration/onp/10/pdf",'107', '385', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/10/pdf", name="DeclarationOnp10pdf")
     */
    public function DeclarationOnp10PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 10 - Statut Agent",'107', '385', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/11", name="seeDeclarationOnp11")
     */
    public function DeclarationOnp11Action()
    {
        return $this->listChamp("ONP (SIRH) / 11 - Titre Civilité","/referentiel/declaration/onp/11/pdf",'107', '386', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/11/pdf", name="DeclarationOnp11pdf")
     */
    public function DeclarationOnp11PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 11 - Titre Civilité",'107', '386', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/12", name="seeDeclarationOnp12")
     */
    public function DeclarationOnp12Action()
    {
        return $this->listChamp("ONP (SIRH) / 12 - Type Service","/referentiel/declaration/onp/12/pdf",'107', '387', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/12/pdf", name="DeclarationOnp12pdf")
     */
    public function DeclarationOnp12PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 12 - Type Service",'107', '387', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/13", name="seeDeclarationOnp13")
     */
    public function DeclarationOnp13Action()
    {
        return $this->listChamp("ONP (SIRH) / 13 - Nature Bonification","/referentiel/declaration/onp/13/pdf",'107', '388', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/declaration/onp/13/pdf", name="DeclarationOnp13pdf")
     */
    public function DeclarationOnp13PdfAction()
    {
        return $this->listChampPdf("ONP (SIRH) / 13 - Nature Bonification",'107', '388', "Référentiel");
    }
}