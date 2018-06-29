<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Coherence;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RubriquesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/coherence/rub", name="seeCoherenceRub")
     */
    public function CoherenceRubAction()
    {
        return $this->listChamp("Rubriques par PA-DP","referentiel/coherence/rub/pdf",'103', '376', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/coherence/rub/pdf", name="seeCoherenceRubpdf")
     */
    public function CoherenceRubPdfAction()
    {
        return $this->listChampPdf("Rubriques par PA-DP",'103', '376', "Référentiel");
    }
}