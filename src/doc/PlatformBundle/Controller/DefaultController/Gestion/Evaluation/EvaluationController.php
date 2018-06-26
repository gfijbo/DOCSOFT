<?php
// src\doc\PlatformBundle\Controller\DefaultController\Gestion\Effectif\MetiersController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EvaluationController extends ListPage
{
    /**
     *
     * @Route("/gestion/evaluation/evaluation", name="seeEvaluationEvaluation")
     */
    public function EvaluationEvaluationAction()
    {
        return $this->listChamp("Evaluation / Evaluation","/gestion/evaluation/evaluation/pdf",'268', '77', "Gestion", "268");
    }
    /**
     *
     * @Route("/gestion/evaluation/evaluation/pdf", name="seeEvaluationEvaluationpdf")
     */
    public function EvaluationEvaluationPdfAction()
    {
        return $this->listChampPdf("Evaluation / Evaluation",'268', '77', "Gestion", "268");
    }
}