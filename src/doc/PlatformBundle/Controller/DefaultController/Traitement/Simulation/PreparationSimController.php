<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 18/07/2018
 * Time: 17:23
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Simulation;
use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PreparationSimController extends ListPage
{
    /**
     *
     * @Route("/traitement/simulation/pre/rec", name="seeCalSimRec")
     */
    public function CalSimRecAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Recherche de mouvements","/traitement/simulation/pre/rec/pdf",'230', '734', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/rec/pdf", name="seeCalSimRecPdf")
     */
    public function CalSimRecPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Recherche de mouvements",'230', '734', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/mou", name="seeSimulationPreMou")
     */
    public function SimuPreMouAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Copie des avancements RH","/traitement/simulation/pre/mou/pdf",'230', '735', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/mou/pdf", name="seeSimPreMouPdf")
     */
    public function SimPreMouPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Copie des avancements RH",'230', '735', "Traitement");
    }
    /**
 *
 * @Route("/traitement/simulation/pre/evecop", name="seeSimulationPreEve")
 */
    public function SimuPreEveAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Copie des avancements RH","/traitement/simulation/pre/evecop/pdf",'230', '736', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/evecop/pdf", name="seeSimPreEvePdf")
     */
    public function SimPreEvePdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Copie des avancements RH",'230', '736', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/evesup", name="seeSimulationPreSup")
     */
    public function SimuPreSupAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Suppression des évènements Futurs","/traitement/simulation/pre/evesup/pdf",'230', '737', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/evesup/pdf", name="seeSimPreSupPdf")
     */
    public function SimPreSupPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Suppression des évènements Futurs",'230', '737', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/evecon", name="seeSimulationPreCon")
     */
    public function SimuPreConAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Consultation des évènements Futurs","/traitement/simulation/pre/evecon/pdf",'230', '738', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/evecon/pdf", name="seeSimPreConPdf")
     */
    public function SimPreConPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Consultation des évènements Futurs",'230', '738', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveval", name="seeSimulationPreVal")
     */
    public function SimuPreValAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Validation des évènements futurs","/traitement/simulation/pre/eveval/pdf",'230', '739', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveval/pdf", name="seeSimPreValPdf")
     */
    public function SimPreValPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Validation des évènements futurs",'230', '739', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveavaech", name="seeSimulationPreEveAva")
     */
    public function SimuPreEveAvaAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Avancements de simulation Calculs / Echelon","/traitement/simulation/pre/eveavaech/pdf",'230', '740', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveavaech/pdf", name="seeSimPreEveAvaPdf")
     */
    public function SimPreEveAvaPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Avancements de simulation Calculs / Echelon",'230', '740', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveavgra", name="seeSimulationPreEveGra")
     */
    public function SimuPreEveGraAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Avancements de simulation Calculs / Grade Promotion interne","/traitement/simulation/pre/eveavagra/pdf",'230', '741', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveavagra/pdf", name="seeSimPreEveGraPdf")
     */
    public function SimPreEveGraPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Avancements de simulation Calculs / Grade Promotion interne",'230', '741', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveavtit", name="seeSimulationPreEveTit")
     */
    public function SimuPreEveTitAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Evènements futurs de simulation / Avancements de simulation Calculs / Titularisation","/traitement/simulation/pre/eveavatit/pdf",'230', '742', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/eveavatit/pdf", name="seeSimPreEveTitPdf")
     */
    public function SimPreEveTitPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Evènements futurs de simulation / Avancements de simulation Calculs / Titularisation",'230', '742', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/edi/edipar", name="seeSimulationPreEdiPar")
     */
    public function SimuPreEdiParAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Edition / Edition du paramétrage","/traitement/simulation/pre/edi/edipar/pdf",'230', '743', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/edi/edipar/pdf", name="seeSimPreEdiParPdf")
     */
    public function SimPreEdiParPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Edition / Edition du paramétrage",'230', '743', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/edi/edibud", name="seeSimulationPreEdiBub")
     */
    public function SimuPreEdiBubAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Edition / Edition simulation / budget","/traitement/simulation/pre/edi/edibud/pdf",'230', '744', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/edi/edibud/pdf", name="seeSimPreEdiBubPdf")
     */
    public function SimPreEdiBubPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Edition / Edition simulation / budget",'230', '744', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/edi/edicon", name="seeSimulationPreEdiCon")
     */
    public function SimuPreEdiConAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Edition / Edition contrôle de la population","/traitement/simulation/pre/edi/edicon/pdf",'230', '745', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/edi/edicon/pdf", name="seeSimPreEdiConPdf")
     */
    public function SimPreEdiConPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Edition / Edition contrôle de la population",'230', '745', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/mod", name="seeSimulationPreMod")
     */
    public function SimuPreModAction()
    {
        return $this->listChamp("Préparation d'une Simulation / Modèles / Renumérotation d'un modèle","/traitement/simulation/pre/mod/pdf",'230', '746', "Traitement");
    }
    /**
     *
     * @Route("/traitement/simulation/pre/mod/pdf", name="seeSimPreModPdf")
     */
    public function SimPreModPdfAction()
    {
        return $this->listChampPdf("Préparation d'une Simulation / Modèles / Renumérotation d'un modèle",'230', '746', "Traitement");
    }
}