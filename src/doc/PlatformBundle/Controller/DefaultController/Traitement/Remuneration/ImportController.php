<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Remuneration;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ImportController extends ListPage
{
    /**
     *
     * @Route("/traitement/remuneration/imp", name="seeRemunerationImp")
     */
    public function RemunerationImpAction()
    {
        return $this->listChamp("Import éléments variables","traitement/remuneration/imp/pdf",'154', '585', "Traitement");
    }
    /**
     *
     * @Route("/traitement/remuneration/imp/pdf", name="seeRemunerationImppdf")
     */
    public function RemunerationImpPdfAction()
    {
        return $this->listChampPdf("Import éléments variables",'154', '585', "Traitement");
    }
}