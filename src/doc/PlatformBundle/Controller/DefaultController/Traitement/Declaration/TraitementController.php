<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Declaration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class TraitementController extends ListPage
{
    /**
     *
     * @Route("/traitement/declaration/trai/dongen", name="seeDeclarationTraiDongen")
     */
    public function DeclarationTraiDongenAction()
    {
        return $this->listChamp("Traitements et résultats / Données Identité / Génération Fichier FIP-IDE","traitement/declaration/trai/dongen/pdf",'262', '788', "Traitement");
    }
    /**
     *
     * @Route("/traitement/declaration/trai/dongen/pdf", name="seeDeclarationTraiDongenpdf")
     */
    public function DeclarationTraiDongenPdfAction()
    {
        return $this->listChampPdf("Traitements et résultats / Données Identité / Génération Fichier FIP-IDE",'262', '788', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/declaration/trai/doninj", name="seeDeclarationTraiDoninj")
     */
    public function DeclarationTraiDoninjAction()
    {
        return $this->listChamp("Traitements et résultats / Données Identité / Injection Retour SRE","traitement/declaration/trai/doninj/pdf",'262', '789', "Traitement");
    }
    /**
     *
     * @Route("/traitement/declaration/trai/doninj/pdf", name="seeDeclarationTraiDoninjpdf")
     */
    public function DeclarationTraiDoninjPdfAction()
    {
        return $this->listChampPdf("Traitements et résultats / Données Identité / Injection Retour SRE",'262', '789', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/declaration/trai/doncar", name="seeDeclarationTraiDoncar")
     */
    public function DeclarationTraiDoncarAction()
    {
        return $this->listChamp("Traitements et résultats / Données Carrière","traitement/declaration/trai/doncar/pdf",'262', '790', "Traitement");
    }
    /**
     *
     * @Route("/traitement/declaration/trai/doncar/pdf", name="seeDeclarationTraiDoncarpdf")
     */
    public function DeclarationTraiDoncarPdfAction()
    {
        return $this->listChampPdf("Traitements et résultats / Données Carrière",'262', '790', "Traitement");
    }
}