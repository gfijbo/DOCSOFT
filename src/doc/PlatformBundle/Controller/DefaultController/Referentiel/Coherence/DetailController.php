<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Coherence;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DetailController extends ListPage
{
    /**
     *
     * @Route("/referentiel/coherence/det", name="seeCoherenceDet")
     */
    public function CoherenceDetAction()
    {
        return $this->listChamp("Détail profil","referentiel/coherence/det/pdf",'103', '374', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/coherence/det/pdf", name="seeCoherenceDetpdf")
     */
    public function CoherenceDetPdfAction()
    {
        return $this->listChampPdf("Détail profil",'103', '374', "Référentiel");
    }
}