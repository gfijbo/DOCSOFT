<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\N4ds;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TraitementController extends ListPage
{
    /**
     *
     * @Route("/traitement/n4ds/tra/seldef", name="seeN4dsTraSeldef")
     */
    public function N4dsTraSeldefAction()
    {
        return $this->listChamp("Traitement / Sélection des agents N4DS / Définition d'une sélection","traitement/n4ds/tra/seldef/pdf",'212', '692', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/seldef/pdf", name="seeN4dsTraSeldefpdf")
     */
    public function N4dsTraSeldefPdfAction()
    {
        return $this->listChampPdf("Traitement / Sélection des agents N4DS / Définition d'une sélection",'212', '692', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/selpop", name="seeN4dsTraSelpop")
     */
    public function N4dsTraSelpopAction()
    {
        return $this->listChamp("Traitement / Sélection des agents N4DS / Population d'agents","/traitement/n4ds/tra/selpop/pdf",'212', '693', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/selpop/pdf", name="seeN4dsTraSelpoppdf")
     */
    public function N4dsTraSelpopPdfAction()
    {
        return $this->listChampPdf("Traitement / Sélection des agents N4DS / Population d'agents",'212', '693', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/selgen", name="seeN4dsTraSelgen")
     */
    public function N4dsTraSelgenAction()
    {
        return $this->listChamp("Traitement / Sélection des agents N4DS / Génération des agents de sélection","traitement/n4ds/tra/selgen/pdf",'212', '694', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/selgen/pdf", name="seeN4dsTraSelgenpdf")
     */
    public function N4dsTraSelgenPdfAction()
    {
        return $this->listChampPdf("Traitement / Sélection des agents N4DS / Génération des agents de sélection",'212', '694', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/sellis", name="seeN4dsTraSellis")
     */
    public function N4dsTraSellisAction()
    {
        return $this->listChamp("Traitement / Sélection des agents N4DS / Liste des agents générés","traitement/n4ds/tra/sellis/pdf",'212', '695', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/sellis/pdf", name="seeN4dsTraSellispdf")
     */
    public function N4dsTraSellisPdfAction()
    {
        return $this->listChampPdf("Traitement / Sélection des agents N4DS / Liste des agents générés",'212', '695', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/gendon", name="seeN4dsTraGendon")
     */
    public function N4dsTraGendonAction()
    {
        return $this->listChamp("Traitement / Génération des données N4DS","traitement/n4ds/tra/gendon/pdf",'212', '696', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/gendon/pdf", name="seeN4dsTraGendonpdf")
     */
    public function N4dsTraGendonPdfAction()
    {
        return $this->listChampPdf("Traitement / Génération des données N4DS",'212', '696', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/genfic", name="seeN4dsTraGenfic")
     */
    public function N4dsTraGenficAction()
    {
        return $this->listChamp("Traitement / Génération du fichier N4DS","traitement/n4ds/tra/genfic/pdf",'212', '697', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/genfic/pdf", name="seeN4dsTraGenficpdf")
     */
    public function N4dsTraGenficPdfAction()
    {
        return $this->listChampPdf("Traitement / Génération du fichier N4DS",'212', '697', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/mod", name="seeN4dsTraMod")
     */
    public function N4dsTraModAction()
    {
        return $this->listChamp("Traitement / Modification des données N4DS extraites","traitement/n4ds/tra/mod/pdf",'212', '698', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/mod/pdf", name="seeN4dsTraModpdf")
     */
    public function N4dsTraModPdfAction()
    {
        return $this->listChampPdf("Traitement / Modification des données N4DS extraites",'212', '698', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/lis", name="seeN4dsTraLis")
     */
    public function N4dsTraLisAction()
    {
        return $this->listChamp("Traitement / Liste des fichiers N4DS","traitement/n4ds/tra/lis/pdf",'212', '699', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/lis/pdf", name="seeN4dsTraLispdf")
     */
    public function N4dsTraLisPdfAction()
    {
        return $this->listChampPdf("Traitement / Liste des fichiers N4DS",'212', '699', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/sup", name="seeN4dsTraSup")
     */
    public function N4dsTraSupAction()
    {
        return $this->listChamp("Traitement / Suppression des extractions N4DS","traitement/n4ds/tra/sup/pdf",'212', '700', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/sup/pdf", name="seeN4dsTraSuppdf")
     */
    public function N4dsTraSupPdfAction()
    {
        return $this->listChampPdf("Traitement / Suppression des extractions N4DS",'212', '700', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/tra/con", name="seeN4dsTraCon")
     */
    public function N4dsTraConAction()
    {
        return $this->listChamp("Traitement / Contrôles des montants N4DS","traitement/n4ds/tra/con/pdf",'212', '701', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/tra/con/pdf", name="seeN4dsTraConpdf")
     */
    public function N4dsTraConPdfAction()
    {
        return $this->listChampPdf("Traitement / Contrôles des montants N4DS",'212', '701', "Traitement");
    }
}