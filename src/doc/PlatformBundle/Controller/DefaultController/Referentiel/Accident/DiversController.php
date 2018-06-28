<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Accident;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DiversController extends ListPage
{
    /**
     *
     * @Route("/referentiel/accidentdutravail/div/pie", name="seeAccidentdutravailDivPie")
     */
    public function AccidentdutravailDivPieAction()
    {
        return $this->listChamp("Divers accident / Pièces dossier","/referentiel/accidentdutravail/div/pie/pdf",'23', '130', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/accidentdutravail/div/pie/pdf", name="seeAccidentdutravailDivPiepdf")
     */
    public function AccidentdutravailDivPiePdfAction()
    {
        return $this->listChampPdf("Divers accident / Pièces dossier",'23', '130', "Référentiel");
    }
}