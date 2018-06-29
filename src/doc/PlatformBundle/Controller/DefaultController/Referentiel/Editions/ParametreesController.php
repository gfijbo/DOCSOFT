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
    
    /**
     *
     * @Route("/referentiel/editions/parparedipar", name="seeEditionsParparedipar")
     */
    public function EditionsParparediparAction()
    {
        return $this->listChamp("Paramétrées / Paramètres éditions paramétrées","referentiel/editions/parparedipar/pdf",'45', '205', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/parparedipar/pdf", name="EditionsParparediparpdf")
     */
    public function EditionsParparediparPdfAction()
    {
        return $this->listChampPdf("Paramétrées / Paramètres éditions paramétrées",'45', '205', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/rub", name="seeEditionsRub")
     */
    public function EditionsRubAction()
    {
        return $this->listChamp("Paramétrées / Rubriques éditions","referentiel/editions/rub/pdf",'45', '206', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/rub/pdf", name="EditionsRubpdf")
     */
    public function EditionsRubPdfAction()
    {
        return $this->listChampPdf("Paramétrées / Rubriques éditions",'45', '206', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/titcoljou", name="seeEditionsTilcoljou")
     */
    public function EditionsTilcoljouAction()
    {
        return $this->listChamp("Paramétrées / Titres Colonnes Journal","referentiel/editions/titcoljou/pdf",'45', '207', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/titcoljou/pdf", name="EditionsTilcoljoupdf")
     */
    public function EditionsTilcoljouPdfAction()
    {
        return $this->listChampPdf("Paramétrées / Titres Colonnes Journal",'45', '207', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/jou", name="seeEditionsJou")
     */
    public function EditionsJouAction()
    {
        return $this->listChamp("Paramétrées / Journal Pages par Lignes","referentiel/editions/jou/pdf",'45', '208', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/jou/pdf", name="EditionsJoupdf")
     */
    public function EditionsJouPdfAction()
    {
        return $this->listChampPdf("Paramétrées / Journal Pages par Lignes",'45', '208', "Référentiel");
    }
}