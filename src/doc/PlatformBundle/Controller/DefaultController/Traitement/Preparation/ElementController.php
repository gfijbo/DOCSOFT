<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Preparation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ElementController extends ListPage
{
    /**
     *
     * @Route("/traitement/preparation/ele/mod", name="seePreparationEleMod")
     */
    public function PreparationEleModAction()
    {
        return $this->listChamp("Eléments Variables / Modification","traitement/preparation/ele/mod/pdf",'248', '772', "Traitement");
    }
    /**
     *
     * @Route("/traitement/preparation/ele/mod/pdf", name="seePreparationEleModpdf")
     */
    public function PreparationEleModPdfAction()
    {
        return $this->listChampPdf("Eléments Variables / Modification",'248', '772', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/preparation/ele/sai", name="seePreparationEleSai")
     */
    public function PreparationEleSaiAction()
    {
        return $this->listChamp("Eléments Variables / Saisie de Masse","traitement/preparation/ele/sai/pdf",'248', '773', "Traitement");
    }
    /**
     *
     * @Route("/traitement/preparation/ele/sai/pdf", name="seePreparationEleSaipdf")
     */
    public function PreparationEleSaiPdfAction()
    {
        return $this->listChampPdf("Eléments Variables / Saisie de Masse",'248', '773', "Traitement");
    }
}