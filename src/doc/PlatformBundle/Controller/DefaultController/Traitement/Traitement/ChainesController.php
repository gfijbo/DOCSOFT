<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Traitement;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class ChainesController extends ListPage
{
    /**
     *
     * @Route("/traitement/groupes/cha", name="seeRemunerationGroupesCha")
     */
    public function RemunerationGroupesChaAction()
    {
        return $this->listChamp("Chaînes de traitements","traitement/groupes/cha/pdf",'176', '640', "Traitement");
    }
    /**
     *
     * @Route("/traitement/groupes/cha/pdf", name="seeRemunerationGroupesChapdf")
     */
    public function RemunerationGroupesChaPdfAction()
    {
        return $this->listChampPdf("Chaînes de traitements",'176', '640', "Traitement");
    }
}