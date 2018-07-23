<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Traitement;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class GroupesController extends ListPage
{
    /**
     *
     * @Route("/traitement/groupes/gro", name="seeRemunerationGroupesGro")
     */
    public function RemunerationGroupesGroAction()
    {
        return $this->listChamp("Les Groupes","traitement/groupes/gro/pdf",'174', '638', "Traitement");
    }
    /**
     *
     * @Route("/traitement/groupes/gro/pdf", name="seeRemunerationGroupesGropdf")
     */
    public function RemunerationGroupesGroPdfAction()
    {
        return $this->listChampPdf("Les Groupes",'174', '638', "Traitement");
    }
}