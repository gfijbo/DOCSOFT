<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Editions;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametreesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/editions/partitedi", name="seeEditionsPartitedi")
     */
    public function EditionsPartitediAction()
    {
        return $this->listChamp("Paramétrées / Titres éditions paramétrées","referentiel/editions/partitedi/pdf",'45', '204', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/partitedi/pdf", name="EditionsPartitedipdf")
     */
    public function EditionsPartitediPdfAction()
    {
        return $this->listChampPdf("Paramétrées / Titres éditions paramétrées",'45', '204', "Référentiel");
    }
}