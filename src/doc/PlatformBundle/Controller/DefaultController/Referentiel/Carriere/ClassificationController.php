<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Carriere;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ClassificationController extends ListPage
{
    /**
     *
     * @Route("/referentiel/carriere/cla/gra", name="seeCarriereClaGra")
     */
    public function CarriereClaGraAction()
    {
        return $this->listChamp("Classification / Grades","referentiel/carriere/cla/gra/pdf",'29', '151', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/gra/pdf", name="seeCarriereClaCatgrapdf")
     */
    public function CarriereClaGraPdfAction()
    {
        return $this->listChampPdf("Classification / Grades",'29', '151', "Référentiel");
    }
    
    /**
     *
     * @Route("referentiel/carriere/cla/catgra", name="seeCarriereClaCatgra")
     */
    public function CarriereClaCatgraAction()
    {
        return $this->listChamp("Classification / Catégories grades","referentiel/carriere/cla/catgra/pdf",'29', '152', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/catgra/pdf", name="seeCarriereClaCatgrapdf")
     */
    public function CarriereClaCatgraPdfAction()
    {
        return $this->listChampPdf("Classification / Catégories grades",'29', '152', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/carriere/cla/cor", name="seeCarriereClaCor")
     */
    public function CarriereClaCorAction()
    {
        return $this->listChamp("Classification / Corps et cadres d'emplois","referentiel/carriere/cla/cor/pdf",'29', '153', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/cor/pdf", name="seeCarriereClaCorpdf")
     */
    public function CarriereClaCorPdfAction()
    {
        return $this->listChampPdf("Classification / Corps et cadres d'emplois",'29', '153', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/fil", name="seeCarriereClaFil")
     */
    public function CarriereClaFilAction()
    {
        return $this->listChamp("Classification / Filière","referentiel/carriere/cla/fil/pdf",'29', '154', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/fil/pdf", name="seeCarriereClaFilpdf")
     */
    public function CarriereClaFilPdfAction()
    {
        return $this->listChampPdf("Classification / Filière",'29', '154', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/gronot", name="seeCarriereClaGronot")
     */
    public function CarriereClaGronotAction()
    {
        return $this->listChamp("Classification / Groupes notation","referentiel/carriere/cla/gronot/pdf",'29', '155', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/gronot/pdf", name="seeCarriereClaGronotpdf")
     */
    public function CarriereClaGronotPdfAction()
    {
        return $this->listChampPdf("Classification / Groupes notation",'29', '155', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/sec", name="seeCarriereClaSec")
     */
    public function CarriereClaSecAction()
    {
        return $this->listChamp("Classification / Secteurs d'activité","referentiel/carriere/cla/sec/pdf",'29', '156', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/sec/pdf", name="seeCarriereClaSecpdf")
     */
    public function CarriereClaSecPdfAction()
    {
        return $this->listChampPdf("Classification / Secteurs d'activité",'29', '156', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/echelle", name="seeCarriereClaEchelle")
     */
    public function CarriereClaEchelleAction()
    {
        return $this->listChamp("Classification / Echelle","referentiel/carriere/cla/echelle/pdf",'29', '157', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/echelle/pdf", name="seeCarriereClaEchellepdf")
     */
    public function CarriereClaEchellePdfAction()
    {
        return $this->listChampPdf("Classification / Echelle",'29', '157', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/echelon", name="seeCarriereClaEchelon")
     */
    public function CarriereClaEchelonAction()
    {
        return $this->listChamp("Classification / Echelon","referentiel/carriere/cla/echelon/pdf",'29', '158', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/echelon/pdf", name="seeCarriereClaEchelonpdf")
     */
    public function CarriereClaEchelonPdfAction()
    {
        return $this->listChampPdf("Classification / Echelon",'29', '158', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/typ", name="seeCarriereClaTyp")
     */
    public function CarriereClaTypAction()
    {
        return $this->listChamp("Classification / Type echelon","referentiel/carriere/cla/typ/pdf",'29', '159', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/typ/pdf", name="seeCarriereClaTyppdf")
     */
    public function CarriereClaTypPdfAction()
    {
        return $this->listChampPdf("Classification / Type echelon",'29', '159', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/con", name="seeCarriereClaCon")
     */
    public function CarriereClaConAction()
    {
        return $this->listChamp("Classification / Condition élémentaires avancement","referentiel/carriere/cla/con/pdf",'29', '160', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/con/pdf", name="seeCarriereClaConpdf")
     */
    public function CarriereClaConPdfAction()
    {
        return $this->listChampPdf("Classification / Condition élémentaires avancement",'29', '160', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/regava", name="seeCarriereClaRegava")
     */
    public function CarriereClaRegavaAction()
    {
        return $this->listChamp("Classification / Règles avancement grade","referentiel/carriere/cla/regava/pdf",'29', '161', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/regava/pdf", name="seeCarriereClaRegavapdf")
     */
    public function CarriereClaRegavaPdfAction()
    {
        return $this->listChampPdf("Classification / Règles avancement grade",'29', '161', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/val", name="seeCarriereClaVal")
     */
    public function CarriereClaValAction()
    {
        return $this->listChamp("Classification / Valorisation règles avancement","referentiel/carriere/cla/val/pdf",'29', '162', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/val/pdf", name="seeCarriereClaValpdf")
     */
    public function CarriereClaValPdfAction()
    {
        return $this->listChampPdf("Classification / Valorisation règles avancement",'29', '162', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/ava", name="seeCarriereClaAva")
     */
    public function CarriereClaAvaAction()
    {
        return $this->listChamp("Classification / Avancement de grade","referentiel/carriere/cla/ava/pdf",'29', '163', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/ava/pdf", name="seeCarriereClaAvapdf")
     */
    public function CarriereClaAvaPdfAction()
    {
        return $this->listChampPdf("Classification / Avancement de grade",'29', '163', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/regcalquo", name="seeCarriereClaRecalquo")
     */
    public function CarriereClaRecalquoAction()
    {
        return $this->listChamp("Classification / Règles calcul quotas","referentiel/carriere/cla/regcalquo/pdf",'29', '164', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/regcalquo/pdf", name="seeCarriereClaRecalquopdf")
     */
    public function CarriereClaRecalquoPdfAction()
    {
        return $this->listChampPdf("Classification / Règles calcul quotas",'29', '164', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/lib", name="seeCarriereClaLib")
     */
    public function CarriereClaLibAction()
    {
        return $this->listChamp("Classification / Libellés reclassements","referentiel/carriere/cla/lib/pdf",'29', '165', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/lib/pdf", name="seeCarriereClaLibpdf")
     */
    public function CarriereClaLibPdfAction()
    {
        return $this->listChampPdf("Classification / Libellés reclassements",'29', '165', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/regcalanc", name="seeCarriereClaRegcalanc")
     */
    public function CarriereClaRegcalancAction()
    {
        return $this->listChamp("Classification / Règles calcul ancienneté","referentiel/carriere/cla/regcalanc/pdf",'29', '166', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/regcalanc/pdf", name="seeCarriereClaRegcalancpdf")
     */
    public function CarriereClaRegcalancPdfAction()
    {
        return $this->listChampPdf("Classification / Règles calcul ancienneté",'29', '166', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/def", name="seeCarriereClaDef")
     */
    public function CarriereClaDefAction()
    {
        return $this->listChamp("Classification / Définition reclassement","referentiel/carriere/cla/def/pdf",'29', '167', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/def/pdf", name="seeCarriereClaDefpdf")
     */
    public function CarriereClaDefPdfAction()
    {
        return $this->listChampPdf("Classification / Définition reclassement",'29', '167', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/catemp", name="seeCarriereClaCatemp")
     */
    public function CarriereClaCatempAction()
    {
        return $this->listChamp("Classification / Catégories emploi","referentiel/carriere/cla/catemp/pdf",'29', '168', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/catemp/pdf", name="seeCarriereClaCatemppdf")
     */
    public function CarriereClaCatempPdfAction()
    {
        return $this->listChampPdf("Classification / Catégories emploi",'29', '168', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/bon", name="seeCarriereClaBon")
     */
    public function CarriereClaBonAction()
    {
        return $this->listChamp("Classification / Bonification hospitalière","referentiel/carriere/cla/bon/pdf",'29', '169', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/bon/pdf", name="seeCarriereClaBonpdf")
     */
    public function CarriereClaBonPdfAction()
    {
        return $this->listChampPdf("Classification / Bonification hospitalière",'29', '169', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/codarr", name="seeCarriereClaCodarr")
     */
    public function CarriereClaCodarrAction()
    {
        return $this->listChamp("Classification / Codes arrêtés d'avancement","referentiel/carriere/cla/codarr/pdf",'29', '170', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/codarr/pdf", name="seeCarriereClaCodarrpdf")
     */
    public function CarriereClaCodarrPdfAction()
    {
        return $this->listChampPdf("Classification / Codes arrêtés d'avancement",'29', '170', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/carriere/cla/indbru", name="seeCarriereClaIndbru")
     */
    public function CarriereClaIndbruAction()
    {
        return $this->listChamp("Classification / Indices bruts et majorés","referentiel/carriere/cla/indbru/pdf",'29', '171', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/indbru/pdf", name="seeCarriereClaIndbrupdf")
     */
    public function CarriereClaIndbruPdfAction()
    {
        return $this->listChampPdf("Classification / Indices bruts et majorés",'29', '171', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/catcom", name="seeCarriereClaCatcom")
     */
    public function CarriereClaCatcomAction()
    {
        return $this->listChamp("Classification / Catégorie commission","referentiel/carriere/cla/catcom/pdf",'29', '172', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/catcom/pdf", name="seeCarriereClaCatcompdf")
     */
    public function CarriereClaCatcomPdfAction()
    {
        return $this->listChampPdf("Classification / Catégorie commission",'29', '172', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/bar", name="seeCarriereClaBar")
     */
    public function CarriereClaBarAction()
    {
        return $this->listChamp("Classification / Barème départemental","referentiel/carriere/cla/bar/pdf",'29', '173', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/bar/pdf", name="seeCarriereClaBarpdf")
     */
    public function CarriereClaBarPdfAction()
    {
        return $this->listChampPdf("Classification / Barème départemental",'29', '173', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/reg", name="seeCarriereClaReg")
     */
    public function CarriereClaRegAction()
    {
        return $this->listChamp("Classification / Regroupement RIFSEEP","referentiel/carriere/cla/reg/pdf",'29', '174', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/reg/pdf", name="seeCarriereClaRegpdf")
     */
    public function CarriereClaRegPdfAction()
    {
        return $this->listChampPdf("Classification / Regroupement RIFSEEP",'29', '174', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/grofon", name="seeCarriereClaGrofon")
     */
    public function CarriereClaGrofonAction()
    {
        return $this->listChamp("Classification / Groupes de fonction","referentiel/carriere/cla/grofon/pdf",'29', '175', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/grofon/pdf", name="seeCarriereClaGrofonpdf")
     */
    public function CarriereClaGrofonPdfAction()
    {
        return $this->listChampPdf("Classification / Groupes de fonction",'29', '175', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/ges", name="seeCarriereClaGes")
     */
    public function CarriereClaGesAction()
    {
        return $this->listChamp("Classification / Gestion des regroupements","referentiel/carriere/cla/ges/pdf",'29', '176', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/carriere/cla/ges/pdf", name="seeCarriereClaGespdf")
     */
    public function CarriereClaGesPdfAction()
    {
        return $this->listChampPdf("Classification / Gestion des regroupements",'29', '176', "Référentiel");
    }
    
}