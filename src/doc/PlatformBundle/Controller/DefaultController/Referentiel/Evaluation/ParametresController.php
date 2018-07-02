<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametresController extends ListPage
{
    /**
     *
     * @Route("/referentiel/evaluation/par", name="seeEvaluationPar")
     */
    public function EvaluationParAction()
    {
        return $this->listChamp("Paramètres évaluation (EVA)","referentiel/evaluation/par/pdf",'110', '395', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/evaluation/par/pdf", name="EvaluationParpdf")
     */
    public function EvaluationParPdfAction()
    {
        return $this->listChampPdf("Paramètres évaluation (EVA)",'110', '395',"Référentiel");
    }
}