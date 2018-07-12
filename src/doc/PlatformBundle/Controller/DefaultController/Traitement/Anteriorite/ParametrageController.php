<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Anteriorite;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class ParametrageController extends ListPage
{
    /**
     *
     * @Route("/traitement/anteriorite/par/par", name="seeAnterioriteParPar")
     */
    public function AnterioriteParParAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Paramètres Antériorité (ANT)","traitement/anteriorite/par/par/pdf",'240', '753', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/par/pdf", name="seeAnterioriteParParpdf")
     */
    public function AnterioriteParParPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Paramètres Antériorité (ANT)",'240', '753', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/eme", name="seeAnterioriteParEme")
     */
    public function AnterioriteParEmeAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Emetteurs","traitement/anteriorite/par/eme/pdf",'240', '754', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/eme/pdf", name="seeAnterioriteParEmepdf")
     */
    public function AnterioriteParEmePdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Emetteurs",'240', '754', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/for", name="seeAnterioriteParFor")
     */
    public function AnterioriteParForAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Formules de valorisation","traitement/anteriorite/par/for/pdf",'240', '755', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/for/pdf", name="seeAnterioriteParForpdf")
     */
    public function AnterioriteParForPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Formules de valorisation",'240', '755', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/ref", name="seeAnterioriteParRef")
     */
    public function AnterioriteParRefAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Référentiel des valeurs RA","traitement/anteriorite/par/ref/pdf",'240', '756', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/ref/pdf", name="seeAnterioriteParRefpdf")
     */
    public function AnterioriteParRefPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Référentiel des valeurs RA",'240', '756', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/typ", name="seeAnterioriteParSelTyp")
     */
    public function AnterioriteParSelTypAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Sélection d'agents / Types de sélection","traitement/anteriorite/par/sel/typ/pdf",'240', '757', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/typ/pdf", name="seeAnterioriteParSelTyppdf")
     */
    public function AnterioriteParSelTypPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Sélection d'agents / Types de sélection",'240', '757', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/pop", name="seeAnterioriteParSelPop")
     */
    public function AnterioriteParSelPopAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Sélection d'agents / Population d'agents","traitement/anteriorite/par/sel/pop/pdf",'240', '758', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/pop/pdf", name="seeAnterioriteParSelPoppdf")
     */
    public function AnterioriteParSelPopPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Sélection d'agents / Population d'agents",'240', '758', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/gen", name="seeAnterioriteParSelGen")
     */
    public function AnterioriteParSelGenAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Sélection d'agents / Génération des agents de sélection","traitement/anteriorite/par/sel/gen/pdf",'240', '759', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/gen/pdf", name="seeAnterioriteParSelGenpdf")
     */
    public function AnterioriteParSelGenPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Sélection d'agents / Génération des agents de sélection",'240', '759', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/lis", name="seeAnterioriteParSelLis")
     */
    public function AnterioriteParSelLisAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Sélection d'agents / Liste des agents générés","traitement/anteriorite/par/sel/lis/pdf",'240', '760', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/sel/lis/pdf", name="seeAnterioriteParSelLispdf")
     */
    public function AnterioriteParSelLisPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Sélection d'agents / Liste des agents générés",'240', '760', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/tra/gen", name="seeAnterioriteParTraGen")
     */
    public function AnterioriteParTraGenAction()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / Génération des périodes et structures","traitement/anteriorite/par/tra/gen/pdf",'240', '761', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/tra/gen/pdf", name="seeAnterioriteParTraGenpdf")
     */
    public function AnterioriteParTraGenPdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / Génération des périodes et structures",'240', '761', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s30", name="seeAnterioriteParTraiS30")
     */
    public function AnterioriteParTraiS30Action()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S30 : Salarié","traitement/anteriorite/par/trai/s30/pdf",'240', '762', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s30/pdf", name="seeAnterioriteParTraiS30pdf")
     */
    public function AnterioriteParTraiS30PdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S30 : Salarié",'240', '762', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s41", name="seeAnterioriteParTraiS41")
     */
    public function AnterioriteParTraiS41Action()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S41 : Périodes d'activité","traitement/anteriorite/par/trai/s41/pdf",'240', '763', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s41/pdf", name="seeAnterioriteParTraiS41pdf")
     */
    public function AnterioriteParTraiS41PdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S41 : Périodes d'activité",'240', '763', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s43", name="seeAnterioriteParTraiS43")
     */
    public function AnterioriteParTraiS43Action()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S43 : Complément CNRACL","/traitement/anteriorite/par/trai/s43/pdf",'240', '764', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s43/pdf", name="seeAnterioriteParTraiS43pdf")
     */
    public function AnterioriteParTraiS43PdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S43 : Complément CNRACL",'240', '764', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s46", name="seeAnterioriteParTraiS46")
     */
    public function AnterioriteParTraiS46Action()
    {
        return $this->listChamp("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S46 : Périodes d'inactivité / Situation particulières","traitement/anteriorite/par/trai/s46/pdf",'240', '765', "Traitement");
    }
    /**
     *
     * @Route("/traitement/anteriorite/par/trai/s46/pdf", name="seeAnterioriteParTraiS46pdf")
     */
    public function AnterioriteParTraiS46PdfAction()
    {
        return $this->listChampPdf("Paramètrage Reprise d'antériorité / Traitements et résultats RA / Données Antériorité / S46 : Périodes d'inactivité / Situation particulières",'240', '765', "Traitement");
    }
}