<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BaremesController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/bar/parorg", name="seeRemunerationBarParorg")
     */
    public function RemunerationBarParorgAction()
    {
        return $this->listChamp("Barèmes / Paramètres organismes (GEN)","referentiel/remuneration/bar/parorg/pdf",'48', '214', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/parorg/pdf", name="seeRemunerationBarParorgpdf")
     */
    public function RemunerationBarParorgPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres organismes (GEN)",'48', '214', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/pardiv", name="seeRemunerationBarPardiv")
     */
    public function RemunerationBarPardivAction()
    {
        return $this->listChamp("Barèmes / Paramètres divers paie (DIV)","referentiel/remuneration/bar/pardiv/pdf",'48', '215', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/pardiv/pdf", name="seeRemunerationBarPardivpdf")
     */
    public function RemunerationBarPardivPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres divers paie (DIV)",'48', '215', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/parijs", name="seeRemunerationBarParijs")
     */
    public function RemunerationBarParijsAction()
    {
        return $this->listChamp("Barèmes / Paramètres IJSS (IJ)","referentiel/remuneration/bar/parijs/pdf",'48', '216', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/parijs/pdf", name="seeRemunerationBarParijspdf")
     */
    public function RemunerationBarParijsPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres IJSS (IJ)",'48', '216', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/parind", name="seeRemunerationBarParind")
     */
    public function RemunerationBarParindAction()
    {
        return $this->listChamp("Barèmes / Paramètres indemnités de résidence (INR)","referentiel/remuneration/bar/parind/pdf",'48', '217', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/parind/pdf", name="seeRemunerationBarParindpdf")
     */
    public function RemunerationBarParindPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres indemnités de résidence (INR)",'48', '217', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/parsup", name="seeRemunerationBarParsup")
     */
    public function RemunerationBarParsupAction()
    {
        return $this->listChamp("Barèmes / Paramètres supplément familial de traitement (SFT)","referentiel/remuneration/bar/parsup/pdf",'48', '218', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/parsup/pdf", name="seeRemunerationBarParsuppdf")
     */
    public function RemunerationBarParsupPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres supplément familial de traitement (SFT)",'48', '218', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/partax", name="seeRemunerationBarPartax")
     */
    public function RemunerationBarPartaxAction()
    {
        return $this->listChamp("Barèmes / Paramètres taxe sur les salaires (TXS)","referentiel/remuneration/bar/partax/pdf",'48', '219', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/partax/pdf", name="seeRemunerationBarPartaxpdf")
     */
    public function RemunerationBarPartaxPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres taxe sur les salaires (TXS)",'48', '219', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/quosai", name="seeRemunerationBarQuosai")
     */
    public function RemunerationBarQuosaiAction()
    {
        return $this->listChamp("Barèmes / Quotités saisissables (QUO)","referentiel/remuneration/bar/quosai/pdf",'48', '220', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/quosai/pdf", name="seeRemunerationBarQuosaipdf")
     */
    public function RemunerationBarQuosaiPdfAction()
    {
        return $this->listChampPdf("Barèmes / Quotités saisissables (QUO)",'48', '220', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/typpar", name="seeRemunerationBarTyppar")
     */
    public function RemunerationBarTypparAction()
    {
        return $this->listChamp("Barèmes / Type paramètre rh","referentiel/remuneration/bar/typpar/pdf",'48', '221', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/typpar/pdf", name="seeRemunerationBarTypparpdf")
     */
    public function RemunerationBarTypparPdfAction()
    {
        return $this->listChampPdf("Barèmes / Type paramètre rh",'48', '221', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/prefon", name="seeRemunerationBarPrefon")
     */
    public function RemunerationBarPrefonAction()
    {
        return $this->listChamp("Barèmes / Prévoyance fonctionnaire","referentiel/remuneration/bar/prefon/pdf",'48', '222', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/prefon/pdf", name="seeRemunerationBarPrefonpdf")
     */
    public function RemunerationBarPrefonPdfAction()
    {
        return $this->listChampPdf("Barèmes / Prévoyance fonctionnaire",'48', '222', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/paredi", name="seeRemunerationBarParedi")
     */
    public function RemunerationBarParediAction()
    {
        return $this->listChamp("Barèmes / Paramètres Editions (EDI)","referentiel/remuneration/bar/paredi/pdf",'48', '223', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/paredi/pdf", name="seeRemunerationBarParedipdf")
     */
    public function RemunerationBarParediPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres Editions (EDI)",'48', '223', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/parbul", name="seeRemunerationBarParbul")
     */
    public function RemunerationBarParbulAction()
    {
        return $this->listChamp("Barèmes / Paramètres bulletin (BAF)","referentiel/remuneration/bar/parbul/pdf",'48', '224', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/parbul/pdf", name="seeRemunerationBarParbulpdf")
     */
    public function RemunerationBarParbulPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres bulletin (BAF)",'48', '224', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/partra", name="seeRemunerationBarPartra")
     */
    public function RemunerationBarPartraAction()
    {
        return $this->listChamp("Barèmes / Paramètres Transfert Agent (MUT)","referentiel/remuneration/bar/partra/pdf",'48', '225', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/partra/pdf", name="seeRemunerationBarPartrapdf")
     */
    public function RemunerationBarPartraPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres Transfert Agent (MUT)",'48', '225', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/pardif", name="seeRemunerationBarPardif")
     */
    public function RemunerationBarPardifAction()
    {
        return $this->listChamp("Barèmes / Paramètres DIF","/referentiel/remuneration/bar/pardif/pdf",'48', '226', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/pardif/pdf", name="seeRemunerationBarPardifpdf")
     */
    public function RemunerationBarPardifPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres DIF",'48', '226', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/parref", name="seeRemunerationBarParref")
     */
    public function RemunerationBarParrefAction()
    {
        return $this->listChamp("Barèmes / Paramètres Refacturation","referentiel/remuneration/bar/parref/pdf",'48', '227', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/parref/pdf", name="seeRemunerationBarParrefpdf")
     */
    public function RemunerationBarParrefPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres Refacturation",'48', '227', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/pardec", name="seeRemunerationBarPardec")
     */
    public function RemunerationBarPardecAction()
    {
        return $this->listChamp("Barèmes / Paramètres déclaration unique d'embauche (DUE)","referentiel/remuneration/bar/pardec/pdf",'48', '228', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/pardec/pdf", name="seeRemunerationBarPardecpdf")
     */
    public function RemunerationBarPardecPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres déclaration unique d'embauche (DUE)",'48', '228', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/paredieds", name="seeRemunerationBarParedieds")
     */
    public function RemunerationBarParediedsAction()
    {
        return $this->listChamp("Barèmes / Paramètres Editions (EDS)","referentiel/remuneration/bar/paredieds/pdf",'48', '229', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/paredieds/pdf", name="seeRemunerationBarParediedspdf")
     */
    public function RemunerationBarParediedsPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres Editions (EDS)",'48', '229', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/indbru", name="seeRemunerationBarIndbru")
     */
    public function RemunerationBarIndbruAction()
    {
        return $this->listChamp("Barèmes / Indices bruts et majorés","referentiel/remuneration/bar/indbru/pdf",'48', '230', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/indbru/pdf", name="seeRemunerationBarIndbrupdf")
     */
    public function RemunerationBarIndbruPdfAction()
    {
        return $this->listChampPdf("Barèmes / Indices bruts et majorés",'48', '230', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/bar/parxem", name="seeRemunerationBarParxem")
     */
    public function RemunerationBarParxemAction()
    {
        return $this->listChamp("Barèmes / Paramètres Xemelios (XEM)","referentiel/remuneration/bar/parxem/pdf",'48', '231', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/bar/parxem/pdf", name="seeRemunerationBarParxempdf")
     */
    public function RemunerationBarParxemPdfAction()
    {
        return $this->listChampPdf("Barèmes / Paramètres Xemelios (XEM)",'48', '231', "Référentiel");
    }
    
}