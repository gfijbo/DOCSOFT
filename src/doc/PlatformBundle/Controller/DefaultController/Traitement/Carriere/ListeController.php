<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 18/07/2018
 * Time: 14:21
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;
use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeController extends ListPage
{
    /**
     *
     * @Route("/traitement/carriere/lis/fic", name="seeCarriereLisFic")
     */
    public function CarriereLisFicAction()
    {
        return $this->listChamp("Listes agents / Fiches situation","/traitement/carriere/lis/fic/pdf",'132', '461', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/fic/pdf", name="seeCarriereLisFicpdf")
     */
    public function CarriereLisFicPdfAction()
    {
        return $this->listChampPdf("Listes agents / Fiches situation",'132', '461', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parcad", name="seeCarriereParCad")
     */
    public function CarriereParCadAction()
    {
        return $this->listChamp("Listes agents / Par cadre d'emploi","/traitement/carriere/lis/parcad/pdf",'132', '462', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parcad/pdf", name="seeCarriereParCadpdf")
     */
    public function CarriereParCadPdfAction()
    {
        return $this->listChampPdf("Listes agents / Par cadre d'emploi",'132', '462', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parcat", name="seeCarriereParCat")
     */
    public function CarriereParCatAction()
    {
        return $this->listChamp("Listes agents / Par catégorie","/traitement/carriere/lis/parcat/pdf",'132', '463', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parcat/pdf", name="seeCarriereParCatpdf")
     */
    public function CarriereParCatPdfAction()
    {
        return $this->listChampPdf("Listes agents / Par catégorie",'132', '463', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parfon", name="seeCarriereParFon")
     */
    public function CarriereParFonAction()
    {
        return $this->listChamp("Listes agents / Par fonction","/traitement/carriere/lis/parfon/pdf",'132', '464', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parfon/pdf", name="seeCarriereParFonpdf")
     */
    public function CarriereParFonPdfAction()
    {
        return $this->listChampPdf("Listes agents / Par fonction",'132', '464', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/pargra", name="seeCarriereParGra")
     */
    public function CarriereParGraAction()
    {
        return $this->listChamp("Listes agents / Par  grade","/traitement/carriere/lis/pargra/pdf",'132', '465', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/pargra/pdf", name="seeCarriereParGrapdf")
     */
    public function CarriereParGraPdfAction()
    {
        return $this->listChampPdf("Listes agents / Par grade",'132', '465', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parpos", name="seeCarriereParPos")
     */
    public function CarriereParPosAction()
    {
        return $this->listChamp("Listes agents / Par position administrative","/traitement/carriere/lis/pargra/pdf",'132', '466', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/parpos/pdf", name="seeCarriereParPospdf")
     */
    public function CarriereParPosPdfAction()
    {
        return $this->listChampPdf("Listes agents / Par position administrative",'132', '466', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/dem", name="seeCarriereDem")
     */
    public function CarriereDemAction()
    {
        return $this->listChamp("Listes agents / Demandes de casier judiciaire","/traitement/carriere/lis/dem/pdf",'132', '467', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/dem/pdf", name="seeCarriereDempdf")
     */
    public function CarriereDemPdfAction()
    {
        return $this->listChampPdf("Listes agents / Demandes de casier judiciaire",'132', '467', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/pro", name="seeCarrierePro")
     */
    public function CarriereProAction()
    {
        return $this->listChamp("Listes agents / Proposition de décoration","/traitement/carriere/lis/pro/pdf",'132', '468', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/pro/pdf", name="seeCarrierePropdf")
     */
    public function CarriereProPdfAction()
    {
        return $this->listChampPdf("Listes agents / Proposition de décoration",'132', '468', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/age", name="seeCarriereAge")
     */
    public function CarriereAgeAction()
    {
        return $this->listChamp("Listes agents / Agents sanctionnés","/traitement/carriere/lis/age/pdf",'132', '469', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/age/pdf", name="seeCarriereAgepdf")
     */
    public function CarriereAgePdfAction()
    {
        return $this->listChampPdf("Listes agents / Agents sanctionnés",'132', '469', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/ava", name="seeCarriereAva")
     */
    public function CarriereAvaAction()
    {
        return $this->listChamp("Listes agents / Avantages en nature logement","/traitement/carriere/lis/ava/pdf",'132', '470', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/lis/ava/pdf", name="seeCarriereAvapdf")
     */
    public function CarriereAvaPdfAction()
    {
        return $this->listChampPdf("Listes agents / Avantages en nature logement",'132', '470', "Traitement");
    }
}