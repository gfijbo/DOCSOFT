<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class TransfertController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/tra/traete", name="seeRemunerationTraTraete")
     */
    public function RemunerationTraTraeteAction()
    {
        return $this->listChamp("Transferts/Interfaces / Trans. ETEBAC","traitement/remuneration/tra/traete/pdf",'148', '548', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/traete/pdf", name="seeRemunerationTraTraetepdf")
     */
    public function RemunerationTraTraetePdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Trans. ETEBAC",'148', '548', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/tra/trabdf", name="seeRemunerationTraTrabdf")
     */
    public function RemunerationTraTrabdfAction()
    {
        return $this->listChamp("Transferts/Interfaces / Trans. BDF","traitement/remuneration/tra/trabdf/pdf",'148', '549', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/trabdf/pdf", name="seeRemunerationTraTrabdfpdf")
     */
    public function RemunerationTraTrabdfPdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Trans. BDF",'148', '549', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/tra/virhop", name="seeRemunerationTraVirhop")
     */
    public function RemunerationTraVirhopAction()
    {
        return $this->listChamp("Transferts/Interfaces / Virements HOPAYRA","traitement/remuneration/tra/virhop/pdf",'148', '550', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/virhop/pdf", name="seeRemunerationTraVirhoppdf")
     */
    public function RemunerationTraVirhopPdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Virements HOPAYRA",'148', '550', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/tra/virsep", name="seeRemunerationTraVirsep")
     */
    public function RemunerationTraVirsepAction()
    {
        return $this->listChamp("Transferts/Interfaces / Virements SEPA","traitement/remuneration/tra/virsep/pdf",'148', '551', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/virsep/pdf", name="seeRemunerationTraVirseppdf")
     */
    public function RemunerationTraVirsepPdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Virements SEPA",'148', '551', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/tra/basast", name="seeRemunerationTraBasast")
     */
    public function RemunerationTraBasastAction()
    {
        return $this->listChamp("Transferts/Interfaces / Bascule Astre GF","traitement/remuneration/tra/basast/pdf",'148', '552', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/basast/pdf", name="seeRemunerationTraBasastpdf")
     */
    public function RemunerationTraBasastPdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Bascule Astre GF",'148', '552', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/tra/bascom", name="seeRemunerationTraBascom")
     */
    public function RemunerationTraBascomAction()
    {
        return $this->listChamp("Transferts/Interfaces / Bascule compta externe","traitement/remuneration/tra/bascom/pdf",'148', '553', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/bascom/pdf", name="seeRemunerationTraBascompdf")
     */
    public function RemunerationTraBascomPdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Bascule compta externe",'148', '553', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/tra/exp", name="seeRemunerationTraExp")
     */
    public function RemunerationTraExpAction()
    {
        return $this->listChamp("Transferts/Interfaces / Export données mandatement","traitement/remuneration/tra/exp/pdf",'148', '554', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/exp/pdf", name="seeRemunerationTraExppdf")
     */
    public function RemunerationTraExpPdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Export données mandatement",'148', '554', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/tra/imp", name="seeRemunerationTraImp")
     */
    public function RemunerationTraImpAction()
    {
        return $this->listChamp("Transferts/Interfaces / Import du fichier des guichets domiciliataires (BdF)","traitement/remuneration/tra/imp/pdf",'148', '555', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/tra/imp/pdf", name="seeRemunerationTraImppdf")
     */
    public function RemunerationTraImpPdfAction()
    {
        return $this->listChampPdf("Transferts/Interfaces / Import du fichier des guichets domiciliataires (BdF)",'148', '555', "Traitement");
    }
}