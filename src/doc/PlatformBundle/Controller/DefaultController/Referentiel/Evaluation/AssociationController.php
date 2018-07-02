<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AssociationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/evaluation/ass", name="seeEvaluationAss")
     */
    public function EvaluationAssAction()
    {
        return $this->listChamp("Association échelle compétence","referentiel/evaluation/ass/pdf",'114', '399', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/evaluation/ass/pdf", name="EvaluationAsspdf")
     */
    public function EvaluationAssPdfAction()
    {
        return $this->listChampPdf("Association échelle compétence",'114', '399',"Référentiel");
    }
}