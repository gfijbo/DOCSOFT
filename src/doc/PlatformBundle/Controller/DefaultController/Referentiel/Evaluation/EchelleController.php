<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EchelleController extends ListPage
{
    /**
     *
     * @Route("/referentiel/evaluation/ech", name="seeEvaluationEch")
     */
    public function EvaluationEchAction()
    {
        return $this->listChamp("Echelle évaluation","referentiel/evaluation/ech/pdf",'112', '397', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/evaluation/ech/pdf", name="EvaluationEchpdf")
     */
    public function EvaluationEchPdfAction()
    {
        return $this->listChampPdf("Echelle évaluation",'112', '397',"Référentiel");
    }
}