<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Declaration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ParametrageController extends ListPage
{
    /**
     *
     * @Route("/traitement/declaration/par/pardef", name="seeDeclarationParPardef")
     */
    public function DeclarationParPardefAction()
    {
        return $this->listChamp("Paramètrage Déclaration CIR / Param. Défaut Correspondance","traitement/declaration/par/pardef/pdf",'261', '784', "Traitement");
    }
    /**
     *
     * @Route("/traitement/declaration/par/pardef/pdf", name="seeDeclarationParPardefpdf")
     */
    public function DeclarationParPardefPdfAction()
    {
        return $this->listChampPdf("Paramètrage Déclaration CIR / Param. Défaut Correspondance",'261', '784', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/declaration/par/parcor", name="seeDeclarationParParcor")
     */
    public function DeclarationParParcorAction()
    {
        return $this->listChamp("Paramètrage Déclaration CIR / Paramétrage Correspondance","traitement/declaration/par/parcor/pdf",'261', '785', "Traitement");
    }
    /**
     *
     * @Route("/traitement/declaration/par/parcor/pdf", name="seeDeclarationParParcorpdf")
     */
    public function DeclarationParParcorPdfAction()
    {
        return $this->listChampPdf("Paramètrage Déclaration CIR / Paramétrage Correspondance",'261', '785', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/declaration/par/selageide", name="seeDeclarationParSelageide")
     */
    public function DeclarationParSelageideAction()
    {
        return $this->listChamp("Paramètrage Déclaration CIR / Sélection agents IDE","traitement/declaration/par/selageide/pdf",'261', '786', "Traitement");
    }
    /**
     *
     * @Route("/traitement/declaration/par/selageide/pdf", name="seeDeclarationParSelageidepdf")
     */
    public function DeclarationParSelageidePdfAction()
    {
        return $this->listChampPdf("Paramètrage Déclaration CIR / Sélection agents IDE",'261', '786', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/declaration/par/selagecar", name="seeDeclarationParSelagecar")
     */
    public function DeclarationParSelagecarAction()
    {
        return $this->listChamp("Paramètrage Déclaration CIR / Sélection agents CAR","traitement/declaration/par/selagecar/pdf",'261', '787', "Traitement");
    }
    /**
     *
     * @Route("/traitement/declaration/par/selagecar/pdf", name="seeDeclarationParSelagecarpdf")
     */
    public function DeclarationParSelagecarPdfAction()
    {
        return $this->listChampPdf("Paramètrage Déclaration CIR / Sélection agents CAR",'261', '787', "Traitement");
    }
}