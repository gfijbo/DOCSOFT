<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class CalculPaieController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/calpai/sel", name="seeRemunerationCalpaiSel")
     */
    public function RemunerationCalpaiSelAction()
    {
        return $this->listChamp("Calcul paie / Sélection agents","traitement/remuneration/calpai/sel/pdf",'144', '510', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calpai/sel/pdf", name="seeRemunerationCalpaiSelpdf")
     */
    public function RemunerationCalpaiSelPdfAction()
    {
        return $this->listChampPdf("Calcul paie / Sélection agents",'144', '510', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calpai/edi", name="seeRemunerationCalpaiEdi")
     */
    public function RemunerationCalpaiEdiAction()
    {
        return $this->listChamp("Calcul paie / Edition agents sélectionnés","traitement/remuneration/calpai/edi/pdf",'144', '511', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calpai/edi/pdf", name="seeRemunerationCalpaiEdipdf")
     */
    public function RemunerationCalpaiEdiPdfAction()
    {
        return $this->listChampPdf("Calcul paie / Edition agents sélectionnés",'144', '511', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calpai/cal", name="seeRemunerationCalpaiCal")
     */
    public function RemunerationCalpaiCalAction()
    {
        return $this->listChamp("Calcul paie / Calcul de paie","traitement/remuneration/calpai/cal/pdf",'144', '512', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calpai/cal/pdf", name="seeRemunerationCalpaiCalpdf")
     */
    public function RemunerationCalpaiCalPdfAction()
    {
        return $this->listChampPdf("Calcul paie / Calcul de paie",'144', '512', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calpai/edibul", name="seeRemunerationCalpaiEdibul")
     */
    public function RemunerationCalpaiEdibulAction()
    {
        return $this->listChamp("Calcul paie / Edition bulletins","traitement/remuneration/calpai/edibul/pdf",'144', '513', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calpai/edibul/pdf", name="seeRemunerationCalpaiEdibulpdf")
     */
    public function RemunerationCalpaiEdibulPdfAction()
    {
        return $this->listChampPdf("Calcul paie / Edition bulletins",'144', '513', "Traitement");
    }
    
    
    /**
     *
     * @Route("/traitement/remuneration/calpai/gen", name="seeRemunerationCalpaiGen")
     */
    public function RemunerationCalpaiGenAction()
    {
        return $this->listChamp("Calcul paie / Génération des répartitions","traitement/remuneration/calpai/gen/pdf",'144', '514', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calpai/gen/pdf", name="seeRemunerationCalpaiGenpdf")
     */
    public function RemunerationCalpaiGenPdfAction()
    {
        return $this->listChampPdf("Calcul paie / Génération des répartitions",'144', '514', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/calpai/dem", name="seeRemunerationCalpaiDem")
     */
    public function RemunerationCalpaiDemAction()
    {
        return $this->listChamp("Calcul paie / Dématérialisation des bulletins pdf","traitement/remuneration/calpai/dem/pdf",'144', '515', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/calpai/dem/pdf", name="seeRemunerationCalpaiDempdf")
     */
    public function RemunerationCalpaiDemPdfAction()
    {
        return $this->listChampPdf("Calcul paie / Dématérialisation des bulletins pdf",'144', '515', "Traitement");
    }
}