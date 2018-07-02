<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ValeursController extends ListPage
{
    /**
     *
     * @Route("/referentiel/evaluation/val", name="seeEvaluationVal")
     */
    public function EvaluationValAction()
    {
        return $this->listChamp("Valeurs échelles éval.","referentiel/evaluation/val/pdf",'113', '398', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/evaluation/val/pdf", name="EvaluationValpdf")
     */
    public function EvaluationValPdfAction()
    {
        return $this->listChampPdf("Valeurs échelles éval.",'113', '398',"Référentiel");
    }
}