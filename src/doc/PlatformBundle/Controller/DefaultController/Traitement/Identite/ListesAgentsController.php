<?php
// src\doc\PlatformBundle\Controller\DefaultController\Traitement\ListesAgentsController.php
namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Identite;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListesAgentsController extends ListPage
{
    /**
     *
     * @Route("/traitement/identite/lisage/etr", name="seeIdentiteLisageEtr")
     */
    public function IdentiteLisageEtrAction()
    {
        return $this->listChamp("Listes Agents / Etrangers","/traitement/identite/lisage/etr/pdf",'118', '402', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/etr/pdf", name="seeIdentiteLisageEtrpdf")
     */
    public function IdentiteLisageEtrPdfAction()
    {
        return $this->listChampPdf("Listes Agents / Etrangers",'118', '402', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/parins", name="seeIdentiteLisagePar")
     */
    public function IdentiteLisageParAction()
    {
        return $this->listChamp("Listes Agents / Par N° Insee","/traitement/identite/lisage/parins/pdf",'118', '403', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/parins/pdf", name="seeIdentiteLisageParpdf")
     */
    public function IdentiteLisageParPdfAction()
    {
        return $this->listChampPdf("Listes Agents / Par N° Insee",'118', '403', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/parage", name="seeIdentiteLisagePag")
     */
    public function IdentiteLisagePagAction()
    {
        return $this->listChamp("Listes Agents / Par âge","/traitement/identite/lisage/parage/pdf",'118', '404', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/parage/pdf", name="seeIdentiteLisagePagpdf")
     */
    public function IdentiteLisagePagPdfAction()
    {
        return $this->listChampPdf("Listes Agents / Par âge",'118', '404', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/org", name="seeIdentiteLisageOrg")
     */
    public function IdentiteLisageOrgAction()
    {
        return $this->listChamp("Listes Agents / Organisation","/traitement/identite/lisage/org/pdf",'118', '405', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/org/pdf", name="seeIdentiteLisageOrgpdf")
     */
    public function IdentiteLisageOrgPdfAction()
    {
        return $this->listChampPdf("Listes Agents / Organisation",'118', '405', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisenf/dro", name="seeIdentiteLisenfDro")
     */
    public function IdentiteLisenfDroAction()
    {
        return $this->listChamp("Listes Enfants / Droit SFT","/traitement/identite/lisenf/dro/pdf",'118', '406', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisenf/dro/pdf", name="seeIdentiteLisenfDropdf")
     */
    public function IdentiteLisenfDroPdfAction()
    {
        return $this->listChampPdf("Listes Enfants / Droit SFT",'118', '406', "Traitement");
    }
}