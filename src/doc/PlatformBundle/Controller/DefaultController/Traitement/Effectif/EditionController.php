<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Effectif;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;


class EditionController extends ListPage
{
    /**
     *
     * @Route("/traitement/effectif/edi/fic", name="seeEffectifEdiFic")
     */
    public function EffectifEdiFicAction()
    {
        return $this->listChamp("Edition / Fiche de Poste","traitement/effectif/edi/fic/pdf",'203', '669', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/fic/pdf", name="seeEffectifEdiFicpdf")
     */
    public function EffectifEdiFicPdfAction()
    {
        return $this->listChampPdf("Edition / Fiche de Poste",'203', '669', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/tabemp", name="seeEffectifEdiTabemp")
     */
    public function EffectifEdiTabempAction()
    {
        return $this->listChamp("Edition / Tableau des emplois","traitement/effectif/edi/tabemp/pdf",'203', '670', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/tabemp/pdf", name="seeEffectifEdiTabemppdf")
     */
    public function EffectifEdiTabempPdfAction()
    {
        return $this->listChampPdf("Edition / Tableau des emplois",'203', '670', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/tabaff", name="seeEffectifEdiTabaff")
     */
    public function EffectifEdiTabaffAction()
    {
        return $this->listChamp("Edition / Tableau des affectations","traitement/effectif/edi/tabaff/pdf",'203', '671', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/tabaff/pdf", name="seeEffectifEdiTabaffpdf")
     */
    public function EffectifEdiTabaffPdfAction()
    {
        return $this->listChampPdf("Edition / Tableau des affectations",'203', '671', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/agesan", name="seeEffectifEdiAgesan")
     */
    public function EffectifEdiAgesanAction()
    {
        return $this->listChamp("Edition / Agents sans poste","traitement/effectif/edi/agesan/pdf",'203', '673', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/agesan/pdf", name="seeEffectifEdiAgesanpdf")
     */
    public function EffectifEdiAgesanPdfAction()
    {
        return $this->listChampPdf("Edition / Agents sans poste",'203', '673', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/posvac", name="seeEffectifEdiPosvac")
     */
    public function EffectifEdiPosvacAction()
    {
        return $this->listChamp("Edition / Postes Vacants","traitement/effectif/edi/posvac/pdf",'203', '674', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/posvac/pdf", name="seeEffectifEdiPosvacpdf")
     */
    public function EffectifEdiPosvacPdfAction()
    {
        return $this->listChampPdf("Edition / Postes Vacants",'203', '674', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/divcat", name="seeEffectifEdiDivcat")
     */
    public function EffectifEdiDivcatAction()
    {
        return $this->listChamp("Edition / Divergences de catégorie cadre d'emploi","traitement/effectif/edi/divcat/pdf",'203', '675', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/divcat/pdf", name="seeEffectifEdiDivcatpdf")
     */
    public function EffectifEdiDivcatPdfAction()
    {
        return $this->listChampPdf("Edition / Divergences de catégorie cadre d'emploi",'203', '675', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/divstr", name="seeEffectifEdiDivstr")
     */
    public function EffectifEdiDivstrAction()
    {
        return $this->listChamp("Edition / Divergences de structure","traitement/effectif/edi/divstr/pdf",'203', '676', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/divstr/pdf", name="seeEffectifEdiDivstrpdf")
     */
    public function EffectifEdiDivstrPdfAction()
    {
        return $this->listChampPdf("Edition / Divergences de structure",'203', '676', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/divfon", name="seeEffectifEdiDivfon")
     */
    public function EffectifEdiDivfonAction()
    {
        return $this->listChamp("Edition / Divergences de fonction","traitement/effectif/edi/divfon/pdf",'203', '677', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/divfon/pdf", name="seeEffectifEdiDivfonpdf")
     */
    public function EffectifEdiDivfonPdfAction()
    {
        return $this->listChampPdf("Edition / Divergences de fonction",'203', '677', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/eta", name="seeEffectifEdiEta")
     */
    public function EffectifEdiEtaAction()
    {
        return $this->listChamp("Edition / Etat du personnel","traitement/effectif/edi/eta/pdf",'203', '678', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/eta/pdf", name="seeEffectifEdiEtapdf")
     */
    public function EffectifEdiEtaPdfAction()
    {
        return $this->listChampPdf("Edition / Etat du personnel",'203', '678', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/effectif/edi/posage", name="seeEffectifEdiPosage")
     */
    public function EffectifEdiPosageAction()
    {
        return $this->listChamp("Edition / Poste Agent","traitement/effectif/edi/posage/pdf",'203', '679', "Traitement");
    }
    /**
     *
     * @Route("/traitement/effectif/edi/posage/pdf", name="seeEffectifEdiPosagepdf")
     */
    public function EffectifEdiPosagePdfAction()
    {
        return $this->listChampPdf("Edition / Poste Agent",'203', '679', "Traitement");
    }
}