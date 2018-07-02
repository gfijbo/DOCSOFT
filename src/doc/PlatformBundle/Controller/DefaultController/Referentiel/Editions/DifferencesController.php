<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Editions;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DifferencesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/editions/difjou", name="seeEditionsDifjou")
     */
    public function EditionsDifjouAction()
    {
        return $this->listChamp("Différences de paie / Codes différences paies","referentiel/editions/difjou/pdf",'46', '209', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/difjou/pdf", name="EditionsDifjoupdf")
     */
    public function EditionsDifjouPdfAction()
    {
        return $this->listChampPdf("Différences de paie / Codes différences paies",'46', '209', "Référentiel");
    }
}