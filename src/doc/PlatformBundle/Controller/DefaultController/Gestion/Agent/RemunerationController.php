<?php
// src\doc\PlatformBundle\Controller\RemunerationController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RemunerationController extends ListPage
{
    /**
     *
     * @Route("/remuneration/elements", name="seeRemunerationElements")
     */
    public function SeeRemunerationElementsAction()
    {
        return $this->listChamp("Organisme / Eléments","organisme/elements/pdf",'6', '12',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/elements/pdf", name="seeRemunerationElementsPdf")
     */
    public function seeRemunerationElementsPdfAction()
    {
        return $this->listChampPdf("Organisme / Eléments",'6', '12',"Gestion");

    }
    /**
     *
     * @Route("/remuneration/contrat", name="seeRemunerationContrat")
     */
    public function SeeRemunerationContratAction()
    {
        return $this->listChamp("Organisme / Contrat","organisme/contrat/pdf",'6', '57',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/contrat/pdf", name="seeRemunerationContratPdf")
     */
    public function seeRemunerationContratPdfAction()
    {
        return $this->listChampPdf("Organisme / Contrat",'6', '57',"Gestion");

    }
    /**
     *
     * @Route("/remuneration/eledec", name="seeRemunerationEledec")
     */
    public function SeeRemunerationEledecAction()
    {
        return $this->listChamp("Organisme / Elém. déconcentrés","organisme/eledec/pdf",'6', '58',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/eledec/pdf", name="seeRemunerationEledecPdf")
     */
    public function seeRemunerationEledecPdfAction()
    {
        return $this->listChampPdf("Organisme / Elém. déconcentrés",'6', '58',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/elevarcou", name="seeRemunerationElevarcou")
     */
    public function SeeRemunerationElevarcouAction()
    {
        return $this->listChamp("Organisme / Elém. var. en cours","organisme/elevarcou/pdf",'6', '59',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/elevarcou/pdf", name="seeRemunerationElevarcouPdf")
     */
    public function seeRemunerationElevarcouPdfAction()
    {
        return $this->listChampPdf("Organisme / Elém. var. en cours",'6', '59',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/elevarhis", name="seeRemunerationElevarhis")
     */
    public function SeeRemunerationElevarhisAction()
    {
        return $this->listChamp("Organisme / Elém. var. historique","organisme/elevarhis/pdf",'6', '60',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/elevarhis/pdf", name="seeRemunerationElevarhisPdf")
     */
    public function seeRemunerationElevarhisPdfAction()
    {
        return $this->listChampPdf("Organisme / Elém. var. historique",'6', '60',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/ticres", name="seeRemunerationTicres")
     */
    public function SeeRemunerationTicresAction()
    {
        return $this->listChamp("Organisme / Tickets restaurant","organisme/ticres/pdf",'6', '61',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/ticres/pdf", name="seeRemunerationTicresPdf")
     */
    public function seeRemunerationTicresPdfAction()
    {
        return $this->listChampPdf("Organisme / Tickets restaurant",'6', '61',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/mesbul", name="seeRemunerationMesbul")
     */
    public function SeeRemunerationMesbullAction()
    {
        return $this->listChamp("Organisme / Mess. bulletin","organisme/mesbul/pdf",'6', '62',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/mesbul/pdf", name="seeRemunerationMesbulPdf")
     */
    public function seeRemunerationMesbullpdfAction()
    {
        return $this->listChampPdf("Organisme / Mess. bulletin",'6', '62',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/bulletins", name="seeRemunerationBulletins")
     */
    public function SeeRemunerationBulletinsAction()
    {
        return $this->listChamp("Organisme / Bulletins","organisme/bulletins/pdf",'6', '63',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/bulletins/pdf", name="seeRemunerationBulletinsPdf")
     */
    public function seeRemunerationBulletinsPdfAction()
    {
        return $this->listChampPdf("Organisme / Bulletins",'6', '63',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/cumuls", name="seeRemunerationCumuls")
     */
    public function SeeRemunerationCumulsAction()
    {
        return $this->listChamp("Organisme / Cumuls","organisme/cumuls/pdf",'6', '64',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/cumuls/pdf", name="seeRemunerationCumulsPdf")
     */
    public function seeRemunerationCumulsPdfAction()
    {
        return $this->listChampPdf("Organisme / Cumuls",'6', '64',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/echeance", name="seeRemunerationEcheance")
     */
    public function SeeRemunerationEcheanceAction()
    {
        return $this->listChamp("Organisme / Echéance","organisme/echeance/pdf",'6', '65',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/echeance/pdf", name="seeRemunerationEcheancePdf")
     */
    public function seeRemunerationEcheancePdfAction()
    {
        return $this->listChampPdf("Organisme / Echéance",'6', '65',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/repartition", name="seeRemunerationRepartition")
     */
    public function SeeRemunerationRepartitionAction()
    {
        return $this->listChamp("Organisme / Répartition","organisme/repartition/pdf",'6', '66',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/repartition/pdf", name="seeRemunerationRepartitionPdf")
     */
    public function seeRemunerationRepartitionPdfAction()
    {
        return $this->listChampPdf("Organisme / Répartition",'6', '66',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/hisrep", name="seeRemunerationHisrep")
     */
    public function SeeRemunerationHisrepAction()
    {
        return $this->listChamp("Organisme / Historique des répartitions","organisme/hisrep/pdf",'6', '67',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/hisrep/pdf", name="seeRemunerationHisrepPdf")
     */
    public function seeRemunerationHisrepPdfAction()
    {
        return $this->listChampPdf("Organisme / Historique des répartitions",'6', '67',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/rappels", name="seeRemunerationRappels")
     */
    public function SeeRemunerationRappelsAction()
    {
        return $this->listChamp("Organisme / Rappels","organisme/rappels/pdf",'6', '68',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/rappels/pdf", name="seeRemunerationRappelsPdf")
     */
    public function seeRemunerationRappelsPdfAction()
    {
        return $this->listChampPdf("Organisme / Rappels",'6', '68',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/analytique", name="seeRemunerationAnalytique")
     */
    public function SeeRemunerationAnalytiqueAction()
    {
        return $this->listChamp("Organisme / Analytique","organisme/analytique/pdf",'6', '69',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/analytique/pdf", name="seeRemunerationAnalytiquePdf")
     */
    public function seeRemunerationAnalytiquePdfAction()
    {
        return $this->listChampPdf("Organisme / Analytique",'6', '69',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/refacturation", name="seeRemunerationRefacturation")
     */
    public function SeeRemunerationRefacturationAction()
    {
        return $this->listChamp("Organisme / Refacturation","organisme/refacturation/pdf",'6', '70',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/refacturation/pdf", name="seeRemunerationRefacturationPdf")
     */
    public function seeRemunerationRefacturationPdfAction()
    {
        return $this->listChampPdf("Organisme / Refacturation",'6', '70',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/retsou", name="seeRemunerationRetsou")
     */
    public function SeeRemunerationRetsouAction()
    {
        return $this->listChamp("Organisme / Retenue à la source","organisme/retsou/pdf",'6', '71',"Gestion");
    }
    /**
     *
     * @Route("/remuneration/retsou/pdf", name="seeRemunerationRetsouPdf")
     */
    public function seeRemunerationRetsouPdfAction()
    {
        return $this->listChampPdf("Organisme / Retenue à la source",'6', '71',"Gestion");
    }
}