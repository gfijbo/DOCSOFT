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
    
    /**
     *
     * @Route("/referentiel/editions/difpardif", name="seeEditionsDifpardif")
     */
    public function EditionsDifpardifAction()
    {
        return $this->listChamp("Différences de paie /  Paramètres différences paies","referentiel/editions/difpardif/pdf",'46', '210', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/difpardif/pdf", name="EditionsDifpardifpdf")
     */
    public function EditionsDifpardifPdfAction()
    {
        return $this->listChampPdf("Différences de paie /  Paramètres différences paies",'46', '210', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/diftit", name="seeEditionsDiftit")
     */
    public function EditionsDiftitAction()
    {
        return $this->listChamp("Différences de paie / Titres des éditions différences de paie","referentiel/editions/diftit/pdf",'46', '211', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/diftit/pdf", name="EditionsDiftitpdf")
     */
    public function EditionsDiftitPdfAction()
    {
        return $this->listChampPdf("Différences de paie / Titres des éditions différences de paie",'46', '211', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/difcom", name="seeEditionsDifcom")
     */
    public function EditionsDifcomAction()
    {
        return $this->listChamp("Différences de paie / Composition des éditions différences de paie","referentiel/editions/difcom/pdf",'46', '212', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/difcom/pdf", name="EditionsDifcompdf")
     */
    public function EditionsDifcomPdfAction()
    {
        return $this->listChampPdf("Différences de paie / Composition des éditions différences de paie",'46', '212', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/difpardon", name="seeEditionsDifpardon")
     */
    public function EditionsDifpardonAction()
    {
        return $this->listChamp("Différences de paie / Paramétrage des données de paie","referentiel/editions/difpardon/pdf",'46', '213', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/editions/difpardon/pdf", name="EditionsDifpardonpdf")
     */
    public function EditionsDifpardonPdfAction()
    {
        return $this->listChampPdf("Différences de paie / Paramétrage des données de paie",'46', '213', "Référentiel");
    }
}