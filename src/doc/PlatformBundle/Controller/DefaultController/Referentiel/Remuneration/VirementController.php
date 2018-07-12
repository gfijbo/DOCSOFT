<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class VirementController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/vir/traban", name="seeRemunerationVirTraban")
     */
    public function RemunerationVirTrabanAction()
    {
        return $this->listChamp("Virement / Transfert banque de France","referentiel/remuneration/vir/traban/pdf",'56', '278', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/vir/traban/pdf", name="seeRemunerationVirTrabanpdf")
     */
    public function RemunerationVirTrabanPdfAction()
    {
        return $this->listChampPdf("Virement / Transfert banque de France",'56', '278', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/vir/tratg", name="seeRemunerationVirTratg")
     */
    public function RemunerationVirTratgAction()
    {
        return $this->listChamp("Virement / Transfert T.G","referentiel/remuneration/vir/tratg/pdf",'56', '279', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/vir/tratg/pdf", name="seeRemunerationVirTratgpdf")
     */
    public function RemunerationVirTratgPdfAction()
    {
        return $this->listChampPdf("Virement / Transfert T.G",'56', '279', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/vir/trasep", name="seeRemunerationVirTrasep")
     */
    public function RemunerationVirTrasepAction()
    {
        return $this->listChamp("Virement / Transfert SEPA","referentiel/remuneration/vir/trasep/pdf",'56', '280', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/vir/trasep/pdf", name="seeRemunerationVirTraseppdf")
     */
    public function RemunerationVirTrasepPdfAction()
    {
        return $this->listChampPdf("Virement / Transfert SEPA",'56', '280', "Référentiel");
    }
}