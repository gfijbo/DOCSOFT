<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Dads;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class TraitementController extends ListPage
{
    /**
     *
     * @Route("/traitement/dads/dons30", name="seeDadsDons30")
     */
    public function DadsDons30Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S30 : Salarié","traitement/dads/dons30/pdf",'215', '703', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons30/pdf", name="seeDadsDons30pdf")
     */
    public function DadsDons30PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S30 : Salarié",'215', '703', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons41g", name="seeDadsDons41g")
     */
    public function DadsDons41gAction()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S41.G(01/02) : Périodes d'activité (codifications)","traitement/dads/dons41g/pdf",'215', '704', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons41g/pdf", name="seeDadsDons41gpdf")
     */
    public function DadsDons41gPdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S41.G(01/02) : Périodes d'activité (codifications)",'215', '704', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons41g01mon", name="seeDadsDons41g01mon")
     */
    public function DadsDons41g01monAction()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S41.G01 : Période d'activité (montants génériques)","traitement/dads/dons41g01mon/pdf",'215', '705', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons41g01mon/pdf", name="seeDadsDons41g01monpdf")
     */
    public function DadsDons41g01monPdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S41.G01 : Période d'activité (montants génériques)",'215', '705', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons41g01com", name="seeDadsDons41g01com")
     */
    public function DadsDons41g01comAction()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S41.G01 : Période d'activité (complément)","traitement/dads/dons41g01com/pdf",'215', '706', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons41g01com/pdf", name="seeDadsDons41g01compdf")
     */
    public function DadsDons41g01comPdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S41.G01 : Période d'activité (complément)",'215', '706', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons41g1015", name="seeDadsDons41g1015")
     */
    public function DadsDons41g1015Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S41.G10.15 : Emploi de l'agent sous statut de droit public","traitement/dads/dons41g1015/pdf",'215', '707', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons41g1015/pdf", name="seeDadsDons41g1015pdf")
     */
    public function DadsDons41g1015PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S41.G10.15 : Emploi de l'agent sous statut de droit public",'215', '707', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons41g1025", name="seeDadsDons41g1025")
     */
    public function DadsDons41g1025Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S41.G10.25 : Situation d'origine de l'agent détaché (réservé SPE)","traitement/dads/dons41g1025/pdf",'215', '708', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons41g1025/pdf", name="seeDadsDons41g1025pdf")
     */
    public function DadsDons41g1025PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S41.G10.25 : Situation d'origine de l'agent détaché (réservé SPE)",'215', '708', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons41g30", name="seeDadsDons41g30")
     */
    public function DadsDons41g30Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S41.G30 : Suivi de réductions ou exonérations de cotis.","traitement/dads/dons41g30/pdf",'215', '709', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons41g30/pdf", name="seeDadsDons41g30pdf")
     */
    public function DadsDons41g30PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S41.G30 : Suivi de réductions ou exonérations de cotis.",'215', '709', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons42g01", name="seeDadsDons42g01")
     */
    public function DadsDons42g01Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S42.G01 : IRCANTEC","traitement/dads/dons42g01/pdf",'215', '710', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons42g01/pdf", name="seeDadsDons42g01pdf")
     */
    public function DadsDons42g01PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S42.G01 : IRCANTEC",'215', '710', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons42g02", name="seeDadsDons42g02")
     */
    public function DadsDons42g02Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S42.G02 : FNC","traitement/dads/dons42g02/pdf",'215', '711', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons42g02/pdf", name="seeDadsDons42g02pdf")
     */
    public function DadsDons42g02PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S42.G02 : FNC",'215', '711', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons43", name="seeDadsDons43")
     */
    public function DadsDons43Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S43 : CNRACL","traitement/dads/dons43/pdf",'215', '712', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons43/pdf", name="seeDadsDons43pdf")
     */
    public function DadsDons43PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S43 : CNRACL",'215', '712', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons44", name="seeDadsDons44")
     */
    public function DadsDons44Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S44 : Retraite complémentaire","traitement/dads/dons44/pdf",'215', '713', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons44/pdf", name="seeDadsDons44pdf")
     */
    public function DadsDons44PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S44 : Retraite complémentaire",'215', '713', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons45mut", name="seeDadsDons45mut")
     */
    public function DadsDons45mutAction()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S45 : Prévoyance Mutuelles","traitement/dads/dons45mut/pdf",'215', '714', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons45mut/pdf", name="seeDadsDons45mutpdf")
     */
    public function DadsDons45mutPdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S45 : Prévoyance Mutuelles",'215', '714', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons45v08", name="seeDadsDons45v08")
     */
    public function DadsDons45v08Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S45 : Prévoyance (V08R08)","traitement/dads/dons45v08/pdf",'215', '715', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons45v08/pdf", name="seeDadsDons45v08pdf")
     */
    public function DadsDons45v08PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S45 : Prévoyance (V08R08)",'215', '715', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons46", name="seeDadsDons46")
     */
    public function DadsDons46Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S46 : Périodes d'inactivité/Situation particulières","traitement/dads/dons46/pdf",'215', '716', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons46/pdf", name="seeDadsDons46pdf")
     */
    public function DadsDons46PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S46 : Périodes d'inactivité/Situation particulières",'215', '716', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons47", name="seeDadsDons47")
     */
    public function DadsDons47Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S47 : Cotisations et contributions SPE","traitement/dads/dons47/pdf",'215', '717', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons47/pdf", name="seeDadsDons47pdf")
     */
    public function DadsDons47PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S47 : Cotisations et contributions SPE",'215', '717', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons53", name="seeDadsDons53")
     */
    public function DadsDons53Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S53 : Retraite additionnelle de la fonction publique","traitement/dads/dons53/pdf",'215', '718', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons53/pdf", name="seeDadsDons53pdf")
     */
    public function DadsDons53PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S53 : Retraite additionnelle de la fonction publique",'215', '718', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons80g01", name="seeDadsDons80g01")
     */
    public function DadsDons80g01Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S80.G01.(01/02) : Les institutions sans salarié concerné","traitement/dads/dons80g01/pdf",'215', '719', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons80g01/pdf", name="seeDadsDons80g01pdf")
     */
    public function DadsDons80g01PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S80.G01.(01/02) : Les institutions sans salarié concerné",'215', '719', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons80g62", name="seeDadsDons80g62")
     */
    public function DadsDons80g62Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S80.G62.(05/10) : Taxes établissements","traitement/dads/dons80g62/pdf",'215', '720', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons80g62/pdf", name="seeDadsDons80g62pdf")
     */
    public function DadsDons80g62PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S80.G62.(05/10) : Taxes établissements",'215', '720', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/dads/dons90", name="seeDadsDons90")
     */
    public function DadsDons90Action()
    {
        return $this->listChamp("Traitements et résultats DADS-U / Données DADS-U / S90 : Total de l'envoi","traitement/dads/dons90/pdf",'215', '721', "Traitement");
    }
    /**
     *
     * @Route("/traitement/dads/dons90/pdf", name="seeDadsDons90pdf")
     */
    public function DadsDons90PdfAction()
    {
        return $this->listChampPdf("Traitements et résultats DADS-U / Données DADS-U / S90 : Total de l'envoi",'215', '721', "Traitement");
    }
}