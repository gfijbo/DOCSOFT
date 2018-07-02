<?php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Effectif;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ParametresController extends ListPage
{
    /**
     *
     * @Route("/referentiel/effectif/pareff", name="seeEffectifPareff")
     */
    public function EffectifPareffAction()
    {
        return $this->listChamp("Paramètres effectif (GE)","referentiel/effectif/pareff/pdf",'68', '310', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/pareff/pdf", name="EffectifPareffpdf")
     */
    public function EffectifPareffPdfAction()
    {
        return $this->listChampPdf("Paramètres effectif (GE)",'68', '310',"Référentiel");
    }
    /**
     *
     * @Route("/referentiel/effectif/motnbi", name="seeEffectifMotnbi")
     */
    public function EffectifMotnbiAction()
    {
        return $this->listChamp("Motif nbi","referentiel/effectif/motnbi/pdf",'68', '311', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/motnbi/pdf", name="EffectifMotnbipdf")
     */
    public function EffectifMotnbiPdfAction()
    {
        return $this->listChampPdf("Motif nbi",'68', '311',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/resext", name="seeEffectifResext")
     */
    public function EffectifResextAction()
    {
        return $this->listChamp("Ressources externes de financement","referentiel/effectif/resext/pdf",'68', '312', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/resext/pdf", name="EffectifResextpdf")
     */
    public function EffectifResextPdfAction()
    {
        return $this->listChampPdf("Ressources externes de financement",'68', '312',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/modtra", name="seeEffectifModtra")
     */
    public function EffectifModtraAction()
    {
        return $this->listChamp("Mode Travail","referentiel/effectif/modtra/pdf",'68', '313', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/modtra/pdf", name="EffectifModtrapdf")
     */
    public function EffectifModtraPdfAction()
    {
        return $this->listChampPdf("Mode Travail",'68', '313',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/decevo", name="seeEffectifDecevo")
     */
    public function EffectifDecevoAction()
    {
        return $this->listChamp("Décisions d'évolution du poste","referentiel/effectif/decevo/pdf",'68', '314', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/decevo/pdf", name="EffectifDecevopdf")
     */
    public function EffectifDecevoPdfAction()
    {
        return $this->listChampPdf("Décisions d'évolution du poste",'68', '314',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/etapos", name="seeEffectifEtapos")
     */
    public function EffectifEtaposAction()
    {
        return $this->listChamp("Etat poste","referentiel/effectif/decevo/pdf",'68', '315', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/etapos/pdf", name="EffectifEtapospdf")
     */
    public function EffectifEtaposPdfAction()
    {
        return $this->listChampPdf("Etat poste",'68', '315',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/decvac", name="seeEffectifDecvac")
     */
    public function EffectifDecvacAction()
    {
        return $this->listChamp("Décisions de vacance de poste","referentiel/effectif/decvac/pdf",'68', '316', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/decvac/pdf", name="EffectifDecvacpdf")
     */
    public function EffectifDecvacPdfAction()
    {
        return $this->listChampPdf("Décisions de vacance de poste",'68', '316',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/motvac", name="seeEffectifMotvac")
     */
    public function EffectifMotvacAction()
    {
        return $this->listChamp("Motifs de vacance de poste","referentiel/effectif/motvac/pdf",'68', '317', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/motvac/pdf", name="EffectifMotvacpdf")
     */
    public function EffectifMotvacPdfAction()
    {
        return $this->listChampPdf("Motifs de vacance de poste",'68', '317',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/ris", name="seeEffectifRis")
     */
    public function EffectifRisAction()
    {
        return $this->listChamp("Risques","referentiel/effectif/ris/pdf",'68', '318', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/ris/pdf", name="EffectifRispdf")
     */
    public function EffectifRisPdfAction()
    {
        return $this->listChampPdf("Risques",'68', '318',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/sec", name="seeEffectifSec")
     */
    public function EffectifSecAction()
    {
        return $this->listChamp("Sécurité","referentiel/effectif/sec/pdf",'68', '319', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/sec/pdf", name="EffectifSecpdf")
     */
    public function EffectifSecPdfAction()
    {
        return $this->listChampPdf("Sécurité",'68', '319',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/quaaff", name="seeEffectifQuaaff")
     */
    public function EffectifQuaaffAction()
    {
        return $this->listChamp("Qualité Affectation Poste","referentiel/effectif/quaaff/pdf",'68', '320', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/quaaff/pdf", name="EffectifQuaaffpdf")
     */
    public function EffectifQuaaffPdfAction()
    {
        return $this->listChampPdf("Qualité Affectation Poste",'68', '320',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/preeff", name="seeEffectifPreeff")
     */
    public function EffectifPreeffAction()
    {
        return $this->listChamp("Prév. Effectif","referentiel/effectif/preeff/pdf",'68', '321', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/preeff/pdf", name="EffectifPreeffpdf")
     */
    public function EffectifPreeffPdfAction()
    {
        return $this->listChampPdf("Prév. Effectif",'68', '321',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/nom", name="seeEffectifNom")
     */
    public function EffectifNomAction()
    {
        return $this->listChamp("Nomenclatures","referentiel/effectif/nom/pdf",'68', '322', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/nom/pdf", name="EffectifNompdf")
     */
    public function EffectifNomPdfAction()
    {
        return $this->listChampPdf("Nomenclatures",'68', '322',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/domact", name="seeEffectifDomact")
     */
    public function EffectifDomactAction()
    {
        return $this->listChamp("Domaines d'activité","referentiel/effectif/domact/pdf",'68', '323', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/domact/pdf", name="EffectifDomactpdf")
     */
    public function EffectifDomactPdfAction()
    {
        return $this->listChampPdf("Domaines d'activité",'68', '323',"Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/comlib", name="seeEffectifComlib")
     */
    public function EffectifComlibAction()
    {
        return $this->listChamp("Compétences / Libellés des bloc-notes","referentiel/effectif/comlib/pdf",'68', '324', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/effectif/comlib/pdf", name="EffectifComlibpdf")
     */
    public function EffectifComlibPdfAction()
    {
        return $this->listChampPdf("Compétences / Libellés des bloc-notes",'68', '324',"Référentiel");
    }
}