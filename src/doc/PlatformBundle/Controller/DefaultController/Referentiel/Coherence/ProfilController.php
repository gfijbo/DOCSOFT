<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Coherence;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfilController extends ListPage
{
    /**
     *
     * @Route("/referentiel/coherence/pro", name="seeCoherencePro")
     */
    public function CoherenceProAction()
    {
        return $this->listChamp("Profil agent et détail de profil","referentiel/coherence/pro/pdf",'104', '375', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/coherence/pro/pdf", name="CoherencePropdf")
     */
    public function CoherenceProPdfAction()
    {
        return $this->listChampPdf("Profil agent et détail de profil",'104', '375', "Référentiel");
    }
}