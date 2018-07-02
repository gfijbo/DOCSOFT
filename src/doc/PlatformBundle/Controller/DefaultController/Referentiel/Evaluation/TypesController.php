<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TypesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/evaluation/typ", name="seeEvaluationTyp")
     */
    public function EvaluationTypAction()
    {
        return $this->listChamp("Types procédure","referentiel/evaluation/typ/pdf",'111', '396', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/evaluation/typ/pdf", name="EvaluationTyppdf")
     */
    public function EvaluationTypPdfAction()
    {
        return $this->listChampPdf("Types procédure",'111', '396',"Référentiel");
    }
}