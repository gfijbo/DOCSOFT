<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class CalculRapController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/calrap/rap", name="seeRemunerationCalrapRap")
     */
    public function RemunerationCalrapRapAction()
    {
        return $this->listChamp("Calcul rappels / Rappels automatiques","traitement/remuneration/calrap/rap/pdf",'143', '504', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calrap/rap/pdf", name="seeRemunerationCalrapRappdf")
     */
    public function RemunerationCalrapRapPdfAction()
    {
        return $this->listChampPdf("Calcul rappels / Rappels automatiques",'143', '504', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calrap/dec", name="seeRemunerationCalrapDec")
     */
    public function RemunerationCalrapDecAction()
    {
        return $this->listChamp("Calcul rappels / Déclenchement rappels","traitement/remuneration/calrap/dec/pdf",'143', '505', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calrap/dec/pdf", name="seeRemunerationCalrapDecpdf")
     */
    public function RemunerationCalrapDecPdfAction()
    {
        return $this->listChampPdf("Calcul rappels / Déclenchement rappels",'143', '505', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calrap/sel", name="seeRemunerationCalrapSel")
     */
    public function RemunerationCalrapSelAction()
    {
        return $this->listChamp("Calcul rappels / Sélection agents","traitement/remuneration/calrap/sel/pdf",'143', '506', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calrap/sel/pdf", name="seeRemunerationCalrapSelpdf")
     */
    public function RemunerationCalrapSelPdfAction()
    {
        return $this->listChampPdf("Calcul rappels / Sélection agents",'143', '506', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calrap/cal", name="seeRemunerationCalrapCal")
     */
    public function RemunerationCalrapCalAction()
    {
        return $this->listChamp("Calcul rappels / Calcul rappels","traitement/remuneration/calrap/cal/pdf",'143', '507', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calrap/cal/pdf", name="seeRemunerationCalrapCalpdf")
     */
    public function RemunerationCalrapCalPdfAction()
    {
        return $this->listChampPdf("Calcul rappels / Calcul rappels",'143', '507', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calrap/edi", name="seeRemunerationCalrapEdi")
     */
    public function RemunerationCalrapEdiAction()
    {
        return $this->listChamp("Calcul rappels / Edition rappels (Actuate)","traitement/remuneration/calrap/edi/pdf",'143', '508', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calrap/edi/pdf", name="seeRemunerationCalrapEdipdf")
     */
    public function RemunerationCalrapEdiPdfAction()
    {
        return $this->listChampPdf("Calcul rappels / Edition rappels (Actuate)",'143', '508', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calrap/val", name="seeRemunerationCalrapVal")
     */
    public function RemunerationCalrapValAction()
    {
        return $this->listChamp("Calcul rappels / Validation rappels","traitement/remuneration/calrap/val/pdf",'143', '509', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calrap/val/pdf", name="seeRemunerationCalrapValpdf")
     */
    public function RemunerationCalrapValPdfAction()
    {
        return $this->listChampPdf("Calcul rappels / Validation rappels",'143', '509', "Traitement");
    }
}