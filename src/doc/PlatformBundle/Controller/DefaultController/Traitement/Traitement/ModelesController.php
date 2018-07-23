<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Traitement;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ModelesController extends ListPage
{
    /**
     *
     * @Route("/traitement/groupes/mod", name="seeRemunerationGroupesMod")
     */
    public function RemunerationGroupesModAction()
    {
        return $this->listChamp("Modèles de paramétrage","traitement/groupes/mod/pdf",'177', '641', "Traitement");
    }
    /**
     *
     * @Route("/traitement/groupes/mod/pdf", name="seeRemunerationGroupesModpdf")
     */
    public function RemunerationGroupesModPdfAction()
    {
        return $this->listChampPdf("Modèles de paramétrage",'177', '641', "Traitement");
    }
}