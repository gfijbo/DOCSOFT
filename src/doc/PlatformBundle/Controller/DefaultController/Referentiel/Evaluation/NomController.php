<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Evaluation;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NomController extends ListPage
{
    /**
     *
     * @Route("/referentiel/evaluation/nom", name="seeEvaluationNom")
     */
    public function EvaluationNomAction()
    {
        return $this->listChamp("Nom des fiches d'entretien","/referentiel/evaluation/nom/pdf",'116', '401', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/evaluation/nom/pdf", name="EvaluationNompdf")
     */
    public function EvaluationNomPdfAction()
    {
        return $this->listChampPdf("Nom des fiches d'entretien",'116', '401',"Référentiel");
    }
}