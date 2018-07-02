<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EnchainementController extends ListPage
{
    /**
     *
     * @Route("/referentiel/evaluation/enc", name="seeEvaluationEnc")
     */
    public function EvaluationEncAction()
    {
        return $this->listChamp("Enchaînement Evaluation","referentiel/evaluation/enc/pdf",'115', '400', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/evaluation/enc/pdf", name="EvaluationEncpdf")
     */
    public function EvaluationEncPdfAction()
    {
        return $this->listChampPdf("Association échelle compétence",'115', '400',"Référentiel");
    }
}