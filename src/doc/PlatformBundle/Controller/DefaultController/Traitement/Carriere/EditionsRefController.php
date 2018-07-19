<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 18/07/2018
 * Time: 17:23
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;
use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EditionsRefController extends ListPage
{
    /**
     *
     * @Route("/traitement/carriere/edi/gra", name="seeCarriereEdiGra")
     */
    public function CarriereEdiGraAction()
    {
        return $this->listChamp("Editions référentiel / Grades","/traitement/carriere/edi/gra/pdf",'133', '471', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/gra/pdf", name="seeCarriereEdiGrapdf")
     */
    public function CarriereEdiGraPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Grades",'133', '471', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/graechcar", name="seeCarriereGraEch")
     */
    public function CarriereEdiGraEchAction()
    {
        return $this->listChamp("Editions référentiel / Grades - échelles de carrière","/traitement/carriere/edi/graechcar/pdf",'133', '472', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/graechcar/pdf", name="seeCarriereEdiGraEchpdf")
     */
    public function CarriereEdiGraEchPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Grades - échelles de carrière",'133', '472', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/graechind", name="seeCarriereGraEchInd")
     */
    public function CarriereEdiGraEchIndAction()
    {
        return $this->listChamp("Editions référentiel / Grades - échelles indiciaires","/traitement/carriere/edi/graechind/pdf",'133', '473', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/graechind/pdf", name="seeCarriereEdiGraEchIndpdf")
     */
    public function CarriereEdiGraEchIndPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Grades - échelles indiciairess",'133', '473', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/ind", name="seeCarriereEdiInd")
     */
    public function CarriereEdiIndAction()
    {
        return $this->listChamp("Editions référentiel / Indices bruts majorés","/traitement/carriere/edi/ind/pdf",'133', '474', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/ind/pdf", name="seeCarriereEdiIndpdf")
     */
    public function CarriereEdiIndPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Indices bruts majorés",'133', '474', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/con", name="seeCarriereEdiCon")
     */
    public function CarriereEdiConAction()
    {
        return $this->listChamp("Editions référentiel / Conditions avancement grade","/traitement/carriere/edi/con/pdf",'133', '475', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/con/pdf", name="seeCarriereEdiConpdf")
     */
    public function CarriereEdiConPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Conditions avancement grade",'133', '475', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/dup", name="seeCarriereEdiDup")
     */
    public function CarriereEdiDupAction()
    {
        return $this->listChamp("Editions référentiel / Duplication de dossiers","/traitement/carriere/edi/dup/pdf",'133', '476', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/edi/dup/pdf", name="seeCarriereEdiDuppdf")
     */
    public function CarriereEdiDupPdfAction()
    {
        return $this->listChampPdf("Editions référentiel / Duplication de dossiers",'133', '476', "Traitement");
    }
}