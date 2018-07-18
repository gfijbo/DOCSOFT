<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;
use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MedaillesController extends ListPage
{
    /**
     *
     * @Route("/traitement/carriere/med/cal", name="seeCarriereMedCal")
     */
    public function CarriereMedCalAction()
    {
        return $this->listChamp("Médailles / Calcul des médilles","/traitement/carriere/med/cal/pdf",'129', '439', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/med/cal/pdf", name="seeCarriereMedCalpdf")
     */
    public function CarriereMedCalPdfAction()
    {
        return $this->listChampPdf("Médailles / Calcul des médilles",'129', '439', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/med/bas", name="seeCarriereMedBas")
     */
    public function CarriereMedBasAction()
    {
        return $this->listChamp("Médailles / Bascule des propositions de médailles","/traitement/carriere/med/bas/pdf",'129', '440', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/med/bas/pdf", name="seeCarriereMedBaspdf")
     */
    public function CarriereMedBasPdfAction()
    {
        return $this->listChampPdf("Médailles / Bascule des propositions de médailles",'129', '440', "Traitement");
    }
}