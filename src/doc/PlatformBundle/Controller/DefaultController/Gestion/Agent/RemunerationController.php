<?php
// src\doc\PlatformBundle\Controller\RemunerationController.php
namespace doc\PlatformBundle\Controller\DefaultController\Gestion\Agent;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RemunerationController extends ListPage
{
    /**
     *
     * @Route("/gestion/remuneration/elements", name="seeRemunerationElements")
     */
    public function SeeRemunerationElementsAction()
    {
        return $this->listChamp("Organisme / Eléments","gestion/remuneration/elements/pdf",'6', '12',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/elements/pdf", name="seeRemunerationElementsPdf")
     */
    public function seeRemunerationElementsPdfAction()
    {
        return $this->listChampPdf("Organisme / Eléments",'6', '12',"Gestion");

    }
    /**
     *
     * @Route("/gestion/remuneration/contrat", name="seeRemunerationContrat")
     */
    public function SeeRemunerationContratAction()
    {
        return $this->listChamp("Organisme / Contrat","gestion/remuneration/contrat/pdf",'6', '57',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/contrat/pdf", name="seeRemunerationContratPdf")
     */
    public function seeRemunerationContratPdfAction()
    {
        return $this->listChampPdf("Organisme / Contrat",'6', '57',"Gestion");

    }
    /**
     *
     * @Route("/gestion/remuneration/eledec", name="seeRemunerationEledec")
     */
    public function SeeRemunerationEledecAction()
    {
        return $this->listChamp("Organisme / Elém. déconcentrés","gestion/remuneration/eledec/pdf",'6', '58',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/eledec/pdf", name="seeRemunerationEledecPdf")
     */
    public function seeRemunerationEledecPdfAction()
    {
        return $this->listChampPdf("Organisme / Elém. déconcentrés",'6', '58',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/elevarcou", name="seeRemunerationElevarcou")
     */
    public function SeeRemunerationElevarcouAction()
    {
        return $this->listChamp("Organisme / Elém. var. en cours","gestion/remuneration/elevarcou/pdf",'6', '59',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/elevarcou/pdf", name="seeRemunerationElevarcouPdf")
     */
    public function seeRemunerationElevarcouPdfAction()
    {
        return $this->listChampPdf("Organisme / Elém. var. en cours",'6', '59',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/elevarhis", name="seeRemunerationElevarhis")
     */
    public function SeeRemunerationElevarhisAction()
    {
        return $this->listChamp("Organisme / Elém. var. historique","gestion/remuneration/elevarhis/pdf",'6', '60',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/elevarhis/pdf", name="seeRemunerationElevarhisPdf")
     */
    public function seeRemunerationElevarhisPdfAction()
    {
        return $this->listChampPdf("Organisme / Elém. var. historique",'6', '60',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/ticres", name="seeRemunerationTicres")
     */
    public function SeeRemunerationTicresAction()
    {
        return $this->listChamp("Organisme / Tickets restaurant","gestion/remuneration/ticres/pdf",'6', '61',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/ticres/pdf", name="seeRemunerationTicresPdf")
     */
    public function seeRemunerationTicresPdfAction()
    {
        return $this->listChampPdf("Organisme / Tickets restaurant",'6', '61',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/mesbul", name="seeRemunerationMesbul")
     */
    public function SeeRemunerationMesbullAction()
    {
        return $this->listChamp("Organisme / Mess. bulletin","gestion/remuneration/mesbul/pdf",'6', '62',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/mesbul/pdf", name="seeRemunerationMesbulPdf")
     */
    public function seeRemunerationMesbullpdfAction()
    {
        return $this->listChampPdf("Organisme / Mess. bulletin",'6', '62',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/bulletins", name="seeRemunerationBulletins")
     */
    public function SeeRemunerationBulletinsAction()
    {
        return $this->listChamp("Organisme / Bulletins","gestion/remuneration/bulletins/pdf",'6', '63',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/bulletins/pdf", name="seeRemunerationBulletinsPdf")
     */
    public function seeRemunerationBulletinsPdfAction()
    {
        return $this->listChampPdf("Organisme / Bulletins",'6', '63',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/cumuls", name="seeRemunerationCumuls")
     */
    public function SeeRemunerationCumulsAction()
    {
        return $this->listChamp("Organisme / Cumuls","gestion/remuneration/cumuls/pdf",'6', '64',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/cumuls/pdf", name="seeRemunerationCumulsPdf")
     */
    public function seeRemunerationCumulsPdfAction()
    {
        return $this->listChampPdf("Organisme / Cumuls",'6', '64',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/echeance", name="seeRemunerationEcheance")
     */
    public function SeeRemunerationEcheanceAction()
    {
        return $this->listChamp("Organisme / Echéance","gestion/remuneration/echeance/pdf",'6', '65',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/echeance/pdf", name="seeRemunerationEcheancePdf")
     */
    public function seeRemunerationEcheancePdfAction()
    {
        return $this->listChampPdf("Organisme / Echéance",'6', '65',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/repartition", name="seeRemunerationRepartition")
     */
    public function SeeRemunerationRepartitionAction()
    {
        return $this->listChamp("Organisme / Répartition","gestion/remuneration/repartition/pdf",'6', '66',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/repartition/pdf", name="seeRemunerationRepartitionPdf")
     */
    public function seeRemunerationRepartitionPdfAction()
    {
        return $this->listChampPdf("Organisme / Répartition",'6', '66',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/hisrep", name="seeRemunerationHisrep")
     */
    public function SeeRemunerationHisrepAction()
    {
        return $this->listChamp("Organisme / Historique des répartitions","gestion/remuneration/hisrep/pdf",'6', '67',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/hisrep/pdf", name="seeRemunerationHisrepPdf")
     */
    public function seeRemunerationHisrepPdfAction()
    {
        return $this->listChampPdf("Organisme / Historique des répartitions",'6', '67',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/rappels", name="seeRemunerationRappels")
     */
    public function SeeRemunerationRappelsAction()
    {
        return $this->listChamp("Organisme / Rappels","gestion/remuneration/rappels/pdf",'6', '68',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/rappels/pdf", name="seeRemunerationRappelsPdf")
     */
    public function seeRemunerationRappelsPdfAction()
    {
        return $this->listChampPdf("Organisme / Rappels",'6', '68',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/analytique", name="seeRemunerationAnalytique")
     */
    public function SeeRemunerationAnalytiqueAction()
    {
        return $this->listChamp("Organisme / Analytique","gestion/remuneration/analytique/pdf",'6', '69',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/analytique/pdf", name="seeRemunerationAnalytiquePdf")
     */
    public function seeRemunerationAnalytiquePdfAction()
    {
        return $this->listChampPdf("Organisme / Analytique",'6', '69',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/refacturation", name="seeRemunerationRefacturation")
     */
    public function SeeRemunerationRefacturationAction()
    {
        return $this->listChamp("Organisme / Refacturation","gestion/remuneration/refacturation/pdf",'6', '70',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/refacturation/pdf", name="seeRemunerationRefacturationPdf")
     */
    public function seeRemunerationRefacturationPdfAction()
    {
        return $this->listChampPdf("Organisme / Refacturation",'6', '70',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/retsou", name="seeRemunerationRetsou")
     */
    public function SeeRemunerationRetsouAction()
    {
        return $this->listChamp("Organisme / Retenue à la source","gestion/remuneration/retsou/pdf",'6', '71',"Gestion");
    }
    /**
     *
     * @Route("/gestion/remuneration/retsou/pdf", name="seeRemunerationRetsouPdf")
     */
    public function seeRemunerationRetsouPdfAction()
    {
        return $this->listChampPdf("Organisme / Retenue à la source",'6', '71',"Gestion");
    }
}