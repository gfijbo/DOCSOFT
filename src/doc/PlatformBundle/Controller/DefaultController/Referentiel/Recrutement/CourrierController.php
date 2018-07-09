<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Recrutement;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CourrierController extends ListPage
{
    /**
     *
     * @Route("/referentiel/recrutement/courrier/typ", name="seeRecrutementCourrierTyp")
     */
    public function RecrutementCourrierTypAction()
    {
        return $this->listChamp("Courrier / Types de courrier","referentiel/recrutement/courrier/typ/pdf",'64', '305', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/courrier/typ/pdf", name="seeRecrutementCourrierTyppdf")
     */
    public function RecrutementCourrierTypPdfAction()
    {
        return $this->listChampPdf("Courrier / Types de courrier",'64', '305', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/courrier/com", name="seeRecrutementCourrierCom")
     */
    public function RecrutementCourrierComAction()
    {
        return $this->listChamp("Courrier / Complément courrier","referentiel/recrutement/courrier/com/pdf",'64', '306', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/courrier/com/pdf", name="seeRecrutementCourrierCompdf")
     */
    public function RecrutementCourrierComPdfAction()
    {
        return $this->listChampPdf("Courrier / Complément courrier",'64', '306', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/recrutement/courrier/lib", name="seeRecrutementCourrierLib")
     */
    public function RecrutementCourrierLibAction()
    {
        return $this->listChamp("Courrier / Librairie champs fusion","referentiel/recrutement/courrier/lib/pdf",'64', '307', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/recrutement/courrier/lib/pdf", name="seeRecrutementCourrierLibpdf")
     */
    public function RecrutementCourrierLibPdfAction()
    {
        return $this->listChampPdf("Courrier / Librairie champs fusion",'64', '307', "Référentiel");
    }
}