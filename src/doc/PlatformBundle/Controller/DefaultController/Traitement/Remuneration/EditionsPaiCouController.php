<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class EditionsPaiCouController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/edipai/dif", name="seeRemunerationEdipaiDif")
     */
    public function RemunerationEdipaiDifAction()
    {
        return $this->listChamp("Editions paie en cours / Différences de paie","traitement/remuneration/edipai/dif/pdf",'145', '516', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/dif/pdf", name="seeRemunerationEdipaiDifpdf")
     */
    public function RemunerationEdipaiDifPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Différences de paie",'145', '516', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/painegact", name="seeRemunerationEdipaiPainegact")
     */
    public function RemunerationEdipaiPainegactAction()
    {
        return $this->listChamp("Editions paie en cours / Paies négatives ou nulles (Actuate)","traitement/remuneration/edipai/painegact/pdf",'145', '517', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/painegact/pdf", name="seeRemunerationEdipaiPainegactpdf")
     */
    public function RemunerationEdipaiPainegactPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Paies négatives ou nulles (Actuate)",'145', '517', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/paineg", name="seeRemunerationEdipaiPaineg")
     */
    public function RemunerationEdipaiPainegAction()
    {
        return $this->listChamp("Editions paie en cours / Paies négatives ou nulles","traitement/remuneration/edipai/paineg/pdf",'145', '518', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/paineg/pdf", name="seeRemunerationEdipaiPainegpdf")
     */
    public function RemunerationEdipaiPainegPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Paies négatives ou nulles",'145', '518', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/paineg", name="seeRemunerationEdipaiPainegnull")
     */
    public function RemunerationEdipaiPainegnullAction()
    {
        return $this->listChamp("Editions paie en cours / Paies négatives ou nulles","traitement/remuneration/edipai/paineg/pdf",'145', '518', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/paineg/pdf", name="seeRemunerationEdipaiPainegnullpdf")
     */
    public function RemunerationEdipaiPainegnullPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Paies négatives ou nulles",'145', '518', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/bul", name="seeRemunerationEdipaiBul")
     */
    public function RemunerationEdipaiBulAction()
    {
        return $this->listChamp("Editions paie en cours / Bulletins mois","traitement/remuneration/edipai/bul/pdf",'145', '519', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/bul/pdf", name="seeRemunerationEdipaiBulpdf")
     */
    public function RemunerationEdipaiBulPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Bulletins mois",'145', '519', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/bor", name="seeRemunerationEdipaiBor")
     */
    public function RemunerationEdipaiBorAction()
    {
        return $this->listChamp("Editions paie en cours / Bord. Règlement","traitement/remuneration/edipai/bor/pdf",'145', '520', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/bor/pdf", name="seeRemunerationEdipaiBorpdf")
     */
    public function RemunerationEdipaiBorPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Bord. Règlement",'145', '520', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/ed", name="seeRemunerationEdipaiEd")
     */
    public function RemunerationEdipaiEdAction()
    {
        return $this->listChamp("Editions paie en cours / Ed. param. mois (Actuate)","traitement/remuneration/edipai/ed/pdf",'145', '521', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/ed/pdf", name="seeRemunerationEdipaiEdpdf")
     */
    public function RemunerationEdipaiEdPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Ed. param. mois (Actuate)",'145', '521', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/jou", name="seeRemunerationEdipaiJou")
     */
    public function RemunerationEdipaiJouAction()
    {
        return $this->listChamp("Editions paie en cours / Journal mois","traitement/remuneration/edipai/jou/pdf",'145', '522', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/jou/pdf", name="seeRemunerationEdipaiJoupdf")
     */
    public function RemunerationEdipaiJouPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Journal mois",'145', '522', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/eta", name="seeRemunerationEdipaiEta")
     */
    public function RemunerationEdipaiEtaAction()
    {
        return $this->listChamp("Editions paie en cours / Etat des cotisations URSSAF","traitement/remuneration/edipai/eta/pdf",'145', '523', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/eta/pdf", name="seeRemunerationEdipaiEtapdf")
     */
    public function RemunerationEdipaiEtaPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Etat des cotisations URSSAF",'145', '523', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/cotact", name="seeRemunerationEdipaiCotact")
     */
    public function RemunerationEdipaiCotactAction()
    {
        return $this->listChamp("Editions paie en cours / Cotisations (Actuate)","traitement/remuneration/edipai/cotact/pdf",'145', '524', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/cotact/pdf", name="seeRemunerationEdipaiCotactpdf")
     */
    public function RemunerationEdipaiCotactPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Cotisations (Actuate)",'145', '524', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/cot", name="seeRemunerationEdipaiCot")
     */
    public function RemunerationEdipaiCotAction()
    {
        return $this->listChamp("Editions paie en cours / Cotisations","traitement/remuneration/edipai/cot/pdf",'145', '525', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/cot/pdf", name="seeRemunerationEdipaiCotpdf")
     */
    public function RemunerationEdipaiCotPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Cotisations",'145', '525', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/cotmanact", name="seeRemunerationEdipaiCotmanact")
     */
    public function RemunerationEdipaiCotmanactAction()
    {
        return $this->listChamp("Editions paie en cours / Cotisations mandement (Actuate)","traitement/remuneration/edipai/cotmanact/pdf",'145', '526', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/cotmanact/pdf", name="seeRemunerationEdipaiCotmanactpdf")
     */
    public function RemunerationEdipaiCotmanactPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Cotisations mandement (Actuate)",'145', '526', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/cotman", name="seeRemunerationEdipaiCotman")
     */
    public function RemunerationEdipaiCotmanAction()
    {
        return $this->listChamp("Editions paie en cours / Cotisations mandement","traitement/remuneration/edipai/cotman/pdf",'145', '527', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/cotman/pdf", name="seeRemunerationEdipaiCotmanpdf")
     */
    public function RemunerationEdipaiCotmanPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Cotisations mandement",'145', '527', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/lissft", name="seeRemunerationEdipaiLissft")
     */
    public function RemunerationEdipaiLissftAction()
    {
        return $this->listChamp("Editions paie en cours / Liste SFT","traitement/remuneration/edipai/lissft/pdf",'145', '528', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/lissft/pdf", name="seeRemunerationEdipaiLissftpdf")
     */
    public function RemunerationEdipaiLissftPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Liste SFT",'145', '528', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/lisnom", name="seeRemunerationEdipaiLisnom")
     */
    public function RemunerationEdipaiLisnomAction()
    {
        return $this->listChamp("Editions paie en cours / Liste nominative par mode de paiement","traitement/remuneration/edipai/lisnom/pdf",'145', '529', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/lisnom/pdf", name="seeRemunerationEdipaiLisnompdf")
     */
    public function RemunerationEdipaiLisnomPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / Liste nominative par mode de paiement",'145', '529', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/res", name="seeRemunerationEdipaiRes")
     */
    public function RemunerationEdipaiResAction()
    {
        return $this->listChamp("Editions paie en cours / == Résultats des éditions actuate ==","traitement/remuneration/edipai/res/pdf",'145', '530', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/res/pdf", name="seeRemunerationEdipaiRespdf")
     */
    public function RemunerationEdipaiResPdfAction()
    {
        return $this->listChampPdf("Editions paie en cours / == Résultats des éditions actuate ==",'145', '530', "Traitement");
    }
}