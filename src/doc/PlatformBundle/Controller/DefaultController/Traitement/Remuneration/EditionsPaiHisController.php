<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class EditionsPaiHisController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/edipai/heu", name="seeRemunerationEdipaiHeu")
     */
    public function RemunerationEdipaiHeuAction()
    {
        return $this->listChamp("Editions paies historisées / Heures supplémentaires effectuées","traitement/remuneration/edipai/heu/pdf",'150', '560', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/heu/pdf", name="seeRemunerationEdipaiHeupdf")
     */
    public function RemunerationEdipaiHeuPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Heures supplémentaires effectuées",'150', '560', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/bul", name="seeRemunerationEdipaiBul")
     */
    public function RemunerationEdipaiBulAction()
    {
        return $this->listChamp("Editions paies historisées / Bulletins historique","traitement/remuneration/edipai/bul/pdf",'150', '561', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/bul/pdf", name="seeRemunerationEdipaiBulpdf")
     */
    public function RemunerationEdipaiBulPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Bulletins historique",'150', '561', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/cum", name="seeRemunerationEdipaiCum")
     */
    public function RemunerationEdipaiCumAction()
    {
        return $this->listChamp("Editions paies historisées / Cumuls de rémunération","traitement/remuneration/edipai/cum/pdf",'150', '562', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/cum/pdf", name="seeRemunerationEdipaiCumpdf")
     */
    public function RemunerationEdipaiCumPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Cumuls de rémunération",'150', '562', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/edparact", name="seeRemunerationEdipaiEdparact")
     */
    public function RemunerationEdipaiEdparactAction()
    {
        return $this->listChamp("Editions paies historisées / Ed. param. période (Actuate)","traitement/remuneration/edipai/edparact/pdf",'150', '563', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/edparact/pdf", name="seeRemunerationEdipaiEdparactpdf")
     */
    public function RemunerationEdipaiEdparactPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Ed. param. période (Actuate)",'150', '563', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/edpar", name="seeRemunerationEdipaiEdpar")
     */
    public function RemunerationEdipaiEdparAction()
    {
        return $this->listChamp("Editions paies historisées / Ed. param. période","traitement/remuneration/edipai/edpar/pdf",'150', '564', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/edpar/pdf", name="seeRemunerationEdipaiEdparpdf")
     */
    public function RemunerationEdipaiEdparPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Ed. param. période",'150', '564', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/jou", name="seeRemunerationEdipaiJou")
     */
    public function RemunerationEdipaiJouAction()
    {
        return $this->listChamp("Editions paies historisées / Journal historique","traitement/remuneration/edipai/jou/pdf",'150', '565', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/jou/pdf", name="seeRemunerationEdipaiJoupdf")
     */
    public function RemunerationEdipaiJouPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Journal historique",'150', '565', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/etacotass", name="seeRemunerationEdipaiEtacotass")
     */
    public function RemunerationEdipaiEtacotassAction()
    {
        return $this->listChamp("Editions paies historisées / Etat des cotisations ASSEDIC","traitement/remuneration/edipai/etacotass/pdf",'150', '566', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/etacotass/pdf", name="seeRemunerationEdipaiEtacotasspdf")
     */
    public function RemunerationEdipaiEtacotassPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Etat des cotisations ASSEDIC",'150', '566', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/etacotirc", name="seeRemunerationEdipaiEtacotirc")
     */
    public function RemunerationEdipaiEtacotircAction()
    {
        return $this->listChamp("Editions paies historisées / Etat des cotisations IRCANTEC","traitement/remuneration/edipai/etacotirc/pdf",'150', '567', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/etacotirc/pdf", name="seeRemunerationEdipaiEtacotircpdf")
     */
    public function RemunerationEdipaiEtacotircPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Etat des cotisations IRCANTEC",'150', '567', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/etacotfon", name="seeRemunerationEdipaiEtacotfon")
     */
    public function RemunerationEdipaiEtacotfonAction()
    {
        return $this->listChamp("Editions paies historisées / Etat des cotisations fonds de solidarité","traitement/remuneration/edipai/etacotfon/pdf",'150', '568', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/etacotfon/pdf", name="seeRemunerationEdipaiEtacotfonpdf")
     */
    public function RemunerationEdipaiEtacotfonPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Etat des cotisations fonds de solidarité",'150', '568', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/etadec", name="seeRemunerationEdipaiEtadec")
     */
    public function RemunerationEdipaiEtadecAction()
    {
        return $this->listChamp("Editions paies historisées / Etats déclaration IRPP","traitement/remuneration/edipai/etadec/pdf",'150', '569', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/etadec/pdf", name="seeRemunerationEdipaiEtadecpdf")
     */
    public function RemunerationEdipaiEtadecPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Etats déclaration IRPP",'150', '569', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/etatax", name="seeRemunerationEdipaiEtatax")
     */
    public function RemunerationEdipaiEtataxAction()
    {
        return $this->listChamp("Editions paies historisées / Etats taxes sur salaire","traitement/remuneration/edipai/etatax/pdf",'150', '570', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/etatax/pdf", name="seeRemunerationEdipaiEtataxpdf")
     */
    public function RemunerationEdipaiEtataxPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Etats taxes sur salaire",'150', '570', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/rec", name="seeRemunerationEdipaiRec")
     */
    public function RemunerationEdipaiRecAction()
    {
        return $this->listChamp("Editions paies historisées / Récapitulatif annuel","traitement/remuneration/edipai/rec/pdf",'150', '571', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/rec/pdf", name="seeRemunerationEdipaiRecpdf")
     */
    public function RemunerationEdipaiRecPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Récapitulatif annuel",'150', '571', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/att", name="seeRemunerationEdipaiAtt")
     */
    public function RemunerationEdipaiAttAction()
    {
        return $this->listChamp("Editions paies historisées / Attestation Assedic","traitement/remuneration/edipai/att/pdf",'150', '572', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/att/pdf", name="seeRemunerationEdipaiAttpdf")
     */
    public function RemunerationEdipaiAttPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / Attestation Assedic",'150', '572', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/edipai/resact", name="seeRemunerationEdipaiResact")
     */
    public function RemunerationEdipaiResactAction()
    {
        return $this->listChamp("Editions paies historisées / == Résultats des éditions actuate ==","traitement/remuneration/edipai/resact/pdf",'150', '573', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/edipai/resact/pdf", name="seeRemunerationEdipaiResactpdf")
     */
    public function RemunerationEdipaiResactPdfAction()
    {
        return $this->listChampPdf("Editions paies historisées / == Résultats des éditions actuate ==",'150', '573', "Traitement");
    }
}