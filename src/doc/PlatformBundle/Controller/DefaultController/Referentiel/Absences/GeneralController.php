<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Absences;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GeneralController extends ListPage
{
    /**
     *
     * @Route("/referentiel/absences/gen/typ", name="seeAbsencesGenTyp")
     */
    public function AbsencesGenTypAction()
    {
        return $this->listChamp("Général arrêt / Types arrêts","referentiel/absences/gen/typ/pdf",'18', '110', "Référentiel", "18");
    }
    /**
     *
     * @Route("/referentiel/absences/gen/typ/pdf", name="seeAbsencesGenTyppdf")
     */
    public function GeneralDonPaysPdfAction()
    {
        return $this->listChampPdf("Général arrêt / Types arrêts",'18', '110', "Référentiel", "110", "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/absences/gen/cod", name="seeAbsencesGenCod")
     */
    public function AbsencesGenCodAction()
    {
        return $this->listChamp("Général arrêt / Codes arrêts","referentiel/absences/gen/cod/pdf",'18', '111', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/absences/gen/cod/pdf", name="seeAbsencesGenCodpdf")
     */
    public function AbsencesGenCodPdfAction()
    {
        return $this->listChampPdf("Général arrêt / Codes arrêts",'18', '111', "Référentiel");
    }
}