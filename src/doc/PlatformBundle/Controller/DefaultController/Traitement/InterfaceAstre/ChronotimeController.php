<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\InterfaceAstre;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ChronotimeController extends ListPage
{
    /**
     *
     * @Route("/traitement/interface/chr/ini", name="seeInterfaceChrIni")
     */
    public function InterfaceChrIniAction()
    {
        return $this->listChamp("Chronotime / Initialisation","traitement/interface/chr/ini/pdf",'189', '654', "Traitement");
    }
    /**
     *
     * @Route("/traitement/interface/chr/ini/pdf", name="seeInterfaceChrInipdf")
     */
    public function InterfaceChrIniPdfAction()
    {
        return $this->listChampPdf("Chronotime / Initialisation",'189', '654', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/interface/chr/age", name="seeInterfaceChrAge")
     */
    public function InterfaceChrAgeAction()
    {
        return $this->listChamp("Chronotime / Agents en erreur","traitement/interface/chr/age/pdf",'189', '655', "Traitement");
    }
    /**
     *
     * @Route("/traitement/interface/chr/age/pdf", name="seeInterfaceChrAgepdf")
     */
    public function InterfaceChrAgePdfAction()
    {
        return $this->listChampPdf("Chronotime / Agents en erreur",'189', '655', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/interface/chr/tra", name="seeInterfaceChrTra")
     */
    public function InterfaceChrTraAction()
    {
        return $this->listChamp("Chronotime / Transfert des Droits","traitement/interface/chr/tra/pdf",'189', '656', "Traitement");
    }
    /**
     *
     * @Route("/traitement/interface/chr/tra/pdf", name="seeInterfaceChrTrapdf")
     */
    public function InterfaceChrTraPdfAction()
    {
        return $this->listChampPdf("Chronotime / Transfert des Droits",'189', '656', "Traitement");
    }
}