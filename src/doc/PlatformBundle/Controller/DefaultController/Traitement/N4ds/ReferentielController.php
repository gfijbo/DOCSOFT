<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\N4ds;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ReferentielController extends ListPage
{
    /**
     *
     * @Route("/traitement/n4ds/ref/eme", name="seeN4dsRefEme")
     */
    public function N4dsRefEmeAction()
    {
        return $this->listChamp("Référentiel / Emetteur N4DS","traitement/n4ds/ref/eme/pdf",'211', '684', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/eme/pdf", name="seeN4dsRefEmepdf")
     */
    public function N4dsRefEmePdfAction()
    {
        return $this->listChampPdf("Référentiel / Emetteur N4DS",'211', '684', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/ref/dec", name="seeN4dsRefDec")
     */
    public function N4dsRefDecAction()
    {
        return $this->listChamp("Référentiel / Déclarant N4DS","traitement/n4ds/ref/dec/pdf",'211', '685', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/dec/pdf", name="seeN4dsRefDecpdf")
     */
    public function N4dsRefDecPdfAction()
    {
        return $this->listChampPdf("Référentiel / Déclarant N4DS",'211', '685', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/ref/par", name="seeN4dsRefPar")
     */
    public function N4dsRefParAction()
    {
        return $this->listChamp("Référentiel / Paramètres N4DS","traitement/n4ds/ref/par/pdf",'211', '686', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/par/pdf", name="seeN4dsRefParpdf")
     */
    public function N4dsRefParPdfAction()
    {
        return $this->listChampPdf("Référentiel / Paramètres N4DS",'211', '686', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/ref/for", name="seeN4dsRefFor")
     */
    public function N4dsRefForAction()
    {
        return $this->listChamp("Référentiel / Formules de valorisation","traitement/n4ds/ref/for/pdf",'211', '687', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/for/pdf", name="seeN4dsRefForpdf")
     */
    public function N4dsRefForPdfAction()
    {
        return $this->listChampPdf("Référentiel / Formules de valorisation",'211', '687', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/ref/col", name="seeN4dsRefCol")
     */
    public function N4dsRefColAction()
    {
        return $this->listChamp("Référentiel / Colonnes d'audit pour le fichier CSV des montants","traitement/n4ds/ref/col/pdf",'211', '688', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/col/pdf", name="seeN4dsRefColpdf")
     */
    public function N4dsRefColPdfAction()
    {
        return $this->listChampPdf("Référentiel / Colonnes d'audit pour le fichier CSV des montants",'211', '688', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/ref/tau", name="seeN4dsRefTau")
     */
    public function N4dsRefTauAction()
    {
        return $this->listChamp("Référentiel / Taux accidents de travail","traitement/n4ds/ref/tau/pdf",'211', '689', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/tau/pdf", name="seeN4dsRefTaupdf")
     */
    public function N4dsRefTauPdfAction()
    {
        return $this->listChampPdf("Référentiel / Taux accidents de travail",'211', '689', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/ref/conins", name="seeN4dsRefConins")
     */
    public function N4dsRefConinsAction()
    {
        return $this->listChamp("Référentiel / Contrats des institutions (Complémentaire)","traitement/n4ds/ref/conins/pdf",'211', '690', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/conins/pdf", name="seeN4dsRefConinspdf")
     */
    public function N4dsRefConinsPdfAction()
    {
        return $this->listChampPdf("Référentiel / Contrats des institutions (Complémentaire)",'211', '690', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/n4ds/ref/conpre", name="seeN4dsRefConpre")
     */
    public function N4dsRefConpreAction()
    {
        return $this->listChamp("Référentiel / Contrats Prévoyance-Mutuelle-Assurance","traitement/n4ds/ref/conpre/pdf",'211', '691', "Traitement");
    }
    /**
     *
     * @Route("/traitement/n4ds/ref/conpre/pdf", name="seeN4dsRefConprepdf")
     */
    public function N4dsRefConprePdfAction()
    {
        return $this->listChampPdf("Référentiel / Contrats Prévoyance-Mutuelle-Assurance",'211', '691', "Traitement");
    }
}