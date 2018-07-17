<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Identite;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ListesEnfantsController extends ListPage
{
    /**
     *
     * @Route("/traitement/identite/lisenf/dro", name="seeIdentiteLisenfDro")
     */
    public function IdentiteLisenfDroAction()
    {
        return $this->listChamp("Listes Enfants / Droit SFT","/traitement/identite/lisenf/dro/pdf",'119', '406', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisenf/dro/pdf", name="seeIdentiteLisenfDropdf")
     */
    public function IdentiteLisenfDroPdfAction()
    {
        return $this->listChampPdf("Listes Enfants / Droit SFT",'119', '406', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/identite/lisenf/parage", name="seeIdentiteLisenfPag")
     */
    public function IdentiteLisenfPagAction()
    {
        return $this->listChamp("Listes Enfants / Par âge","/traitement/identite/lisenf/pag/pdf",'119', '407', "Traitement");
    }
    /**
     *
     * @Route("/traitement/identite/lisenf/pag/pdf", name="seeIdentiteLisenfPagpdf")
     */
    public function IdentiteLisenfPagPdfAction()
    {
        return $this->listChampPdf("Listes Enfants / Par âge",'119', '407', "Traitement");
    }
}