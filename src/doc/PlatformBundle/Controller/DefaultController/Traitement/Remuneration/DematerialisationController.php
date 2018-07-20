<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class DematerialisationController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/dem/dem", name="seeRemunerationDemDem")
     */
    public function RemunerationDemDemAction()
    {
        return $this->listChamp("Dématerialisation des états de paye / Dématerialisation","traitement/remuneration/dem/dem/pdf",'147', '543', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/dem/dem/pdf", name="seeRemunerationDemDempdf")
     */
    public function RemunerationDemDemPdfAction()
    {
        return $this->listChampPdf("Dématerialisation des états de paye / Dématerialisation",'147', '543', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/dem/ges", name="seeRemunerationDemGes")
     */
    public function RemunerationDemGesAction()
    {
        return $this->listChamp("Dématerialisation des états de paye / Gestion des traitements PJ","traitement/remuneration/dem/ges/pdf",'147', '544', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/dem/ges/pdf", name="seeRemunerationDemGespdf")
     */
    public function RemunerationDemGesPdfAction()
    {
        return $this->listChampPdf("Dématerialisation des états de paye / Gestion des traitements PJ",'147', '544', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/dem/demarc", name="seeRemunerationDemDemarc")
     */
    public function RemunerationDemDemarcAction()
    {
        return $this->listChamp("Dématerialisation des états de paye / Dématerialisation archivée","traitement/remuneration/dem/demarc/pdf",'147', '545', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/dem/demarc/pdf", name="seeRemunerationDemDemarcpdf")
     */
    public function RemunerationDemDemarcPdfAction()
    {
        return $this->listChampPdf("Dématerialisation des états de paye / Dématerialisation archivée",'147', '545', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/dem/gesfic", name="seeRemunerationDemGesfic")
     */
    public function RemunerationDemGesficAction()
    {
        return $this->listChamp("Dématerialisation des états de paye / Gestion des fichiers","traitement/remuneration/dem/gesfic/pdf",'147', '546', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/dem/gesfic/pdf", name="seeRemunerationDemGesficpdf")
     */
    public function RemunerationDemGesficPdfAction()
    {
        return $this->listChampPdf("Dématerialisation des états de paye / Gestion des fichiers",'147', '546', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/remuneration/dem/bul", name="seeRemunerationDemBul")
     */
    public function RemunerationDemBulAction()
    {
        return $this->listChamp("Dématerialisation des états de paye / Dématerialisation bulletins intervenants CNFPT","traitement/remuneration/dem/bul/pdf",'147', '546', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/dem/bul/pdf", name="seeRemunerationDemBulpdf")
     */
    public function RemunerationDemBulPdfAction()
    {
        return $this->listChampPdf("Dématerialisation des états de paye / Dématerialisation bulletins intervenants CNFPT",'147', '546', "Traitement");
    }
    
}