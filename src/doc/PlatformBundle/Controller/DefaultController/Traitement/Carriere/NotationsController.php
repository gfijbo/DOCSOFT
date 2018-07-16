<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Carriere;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class NotationsController extends ListPage
{
    /**
 *
 * @Route("/traitement/carriere/not/gen", name="seeCarriereNotGen")
 */
    public function CarriereNotGenAction()
    {
        return $this->listChamp("Notations / Génération notation","/traitement/carriere/not/gen/pdf",'127', '425', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/not/gen/pdf", name="seeCarriereNotGenpdf")
     */
    public function CarriereNotGenPdfAction()
    {
        return $this->listChampPdf("Notations / Génération notation",'127', '425', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/not/edi", name="seeCarriereNotEdi")
     */
    public function CarriereNotEdiAction()
    {
        return $this->listChamp("Notations / Edition des fiches de notation","/traitement/carriere/not/edi/pdf",'127', '426', "Traitement");
    }
    /**
     *
     * @Route("/traitement/carriere/sai/not/edi/pdf", name="seeCarriereNotEdipdf")
     */
    public function CarriereNotEdiPdfAction()
    {
        return $this->listChampPdf("Notations / Edition des fiches de notation",'127', '426', "Traitement");
    }
}