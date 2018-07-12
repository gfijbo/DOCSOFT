<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RepartitionController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/rep/cat", name="seeRemunerationRepCat")
     */
    public function RemunerationRepCatAction()
    {
        return $this->listChamp("Répartition Affectation / Catégorie EHPAD","referentiel/remuneration/rep/cat/pdf",'57', '281', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rep/cat/pdf", name="seeRemunerationRepCatpdf")
     */
    public function RemunerationRepCatPdfAction()
    {
        return $this->listChampPdf("Répartition Affectation / Catégorie EHPAD",'57', '281', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/rep/cor", name="seeRemunerationRepCor")
     */
    public function RemunerationRepCorAction()
    {
        return $this->listChamp("Répartition Affectation / Correspondance EHPAD","referentiel/remuneration/rep/cor/pdf",'57', '282', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/rep/cor/pdf", name="seeRemunerationRepCorpdf")
     */
    public function RemunerationRepCorPdfAction()
    {
        return $this->listChampPdf("Répartition Affectation / Correspondance EHPAD",'57', '282', "Référentiel");
    }
}