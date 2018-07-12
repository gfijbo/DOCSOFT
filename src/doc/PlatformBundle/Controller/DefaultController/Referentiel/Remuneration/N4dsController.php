<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class N4dsController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/n4ds/eme", name="seeRemunerationN4dsEme")
     */
    public function RemunerationN4dsEmeAction()
    {
        return $this->listChamp("N4DS / Emetteur N4DS","referentiel/remuneration/n4ds/eme/pdf",'58', '283', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/n4ds/eme/pdf", name="seeRemunerationN4dsEmepdf")
     */
    public function RemunerationN4dsEmePdfAction()
    {
        return $this->listChampPdf("N4DS / Emetteur N4DS",'58', '283', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/n4ds/dec", name="seeRemunerationN4dsDec")
     */
    public function RemunerationN4dsDecAction()
    {
        return $this->listChamp("N4DS / Déclaration N4DS","referentiel/remuneration/n4ds/dec/pdf",'58', '284', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/n4ds/dec/pdf", name="seeRemunerationN4dsDecpdf")
     */
    public function RemunerationN4dsDecPdfAction()
    {
        return $this->listChampPdf("N4DS / Déclaration N4DS",'58', '284', "Référentiel");
    }
    
    /**
     *
     * @Route("/referentiel/remuneration/n4ds/parn4ds", name="seeRemunerationn4dsParn4ds")
     */
    public function Remunerationn4dsParn4dsAction()
    {
        return $this->listChamp("N4DS / Paramètres N4DS","referentiel/remuneration/n4ds/parn4ds/pdf",'58', '285', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/n4ds/parn4ds/pdf", name="seeRemunerationn4dsParn4dspdf")
     */
    public function Remunerationn4dsParn4dsPdfAction()
    {
        return $this->listChampPdf("N4DS / Paramètres N4DS",'58', '285', "Référentiel");
    }
}