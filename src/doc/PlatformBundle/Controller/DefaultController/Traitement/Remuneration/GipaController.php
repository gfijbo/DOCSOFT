<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class GipaController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/gipa/par", name="seeRemunerationGipaPar")
     */
    public function RemunerationGipaParAction()
    {
        return $this->listChamp("GIPA / Paramérage GIP","traitement/remuneration/gipa/par/pdf",'156', '587', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/par/pdf", name="seeRemunerationGipaParpdf")
     */
    public function RemunerationGipaParPdfAction()
    {
        return $this->listChampPdf("GIPA / Paramérage GIP",'156', '587', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/gipa/sel", name="seeRemunerationGipaSel")
     */
    public function RemunerationGipaSelAction()
    {
        return $this->listChamp("GIPA / Sélection des agents éligibles","traitement/remuneration/gipa/sel/pdf",'156', '588', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/sel/pdf", name="seeRemunerationGipaSelpdf")
     */
    public function RemunerationGipaSelPdfAction()
    {
        return $this->listChampPdf("GIPA / Sélection des agents éligibles",'156', '588', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/gipa/edi", name="seeRemunerationGipaEdi")
     */
    public function RemunerationGipaEdiAction()
    {
        return $this->listChamp("GIPA / Edition des agents éligibles","traitement/remuneration/gipa/edi/pdf",'156', '589', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/edi/pdf", name="seeRemunerationGipaEdipdf")
     */
    public function RemunerationGipaEdiPdfAction()
    {
        return $this->listChampPdf("GIPA / Edition des agents éligibles",'156', '589', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/gipa/ediact", name="seeRemunerationGipaEdiact")
     */
    public function RemunerationGipaEdiactAction()
    {
        return $this->listChamp("GIPA / Edition des agents éligibles (Actuate)","traitement/remuneration/gipa/ediact/pdf",'156', '590', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/ediact/pdf", name="seeRemunerationGipaEdiactpdf")
     */
    public function RemunerationGipaEdiactPdfAction()
    {
        return $this->listChampPdf("GIPA / Edition des agents éligibles (Actuate)",'156', '590', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/gipa/inj", name="seeRemunerationGipaInj")
     */
    public function RemunerationGipaInjAction()
    {
        return $this->listChamp("GIPA / Injection éléments variables","traitement/remuneration/gipa/inj/pdf",'156', '591', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/inj/pdf", name="seeRemunerationGipaInjpdf")
     */
    public function RemunerationGipaInjPdfAction()
    {
        return $this->listChampPdf("GIPA / Injection éléments variables",'156', '591', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/gipa/edijus", name="seeRemunerationGipaEdijus")
     */
    public function RemunerationGipaEdijusAction()
    {
        return $this->listChamp("GIPA / Edition justificative de la GIPA","traitement/remuneration/gipa/edijus/pdf",'156', '592', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/edijus/pdf", name="seeRemunerationGipaEdijuspdf")
     */
    public function RemunerationGipaEdijusPdfAction()
    {
        return $this->listChampPdf("GIPA / Edition justificative de la GIPA",'156', '592', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/gipa/edijusact", name="seeRemunerationGipaEdijusact")
     */
    public function RemunerationGipaEdijusactAction()
    {
        return $this->listChamp("GIPA / Edition justificative de la GIPA (Actuate)","traitement/remuneration/gipa/edijusact/pdf",'156', '593', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/edijusact/pdf", name="seeRemunerationGipaEdijusactpdf")
     */
    public function RemunerationGipaEdijusactPdfAction()
    {
        return $this->listChampPdf("GIPA / Edition justificative de la GIPA (Actuate)",'156', '593', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/gipa/ges", name="seeRemunerationGipaGes")
     */
    public function RemunerationGipaGesAction()
    {
        return $this->listChamp("GIPA / Gestion des agents éligibles","traitement/remuneration/gipa/ges/pdf",'156', '593', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/gipa/ges/pdf", name="seeRemunerationGipaGespdf")
     */
    public function RemunerationGipaGesPdfAction()
    {
        return $this->listChampPdf("GIPA / Gestion des agents éligibles",'156', '593', "Traitement");
    }
}