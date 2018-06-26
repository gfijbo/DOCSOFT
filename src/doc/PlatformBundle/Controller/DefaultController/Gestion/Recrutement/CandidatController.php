<?php
// src\doc\PlatformBundle\Controller\DefaultController\Gestion\Effectif\MetiersController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CandidatController extends ListPage
{
    /**
     *
     * @Route("/gestion/candidat/candidat", name="seeCandidatCandidat")
     */
    public function CandidatCandidatAction()
    {
        return $this->listChamp("Candidat / Candidat","/gestion/candidat/candidat/pdf",'263', '72', "Gestion", "263");
    }
    /**
     *
     * @Route("/gestion/candidat/candidat/pdf", name="seeCandidatCandidatpdf")
     */
    public function CandidatCandidatPdfAction()
    {
        return $this->listChampPdf("Candidat / Candidat",'263', '72', "Gestion", "263");
    }
}