<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Pilotage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class GestionController extends ListPage
{
    /**
     *
     * @Route("/traitement/pilotage/ges", name="seePilotageGes")
     */
    public function PilotageGesAction()
    {
        return $this->listChamp("Gestion de la population","traitement/pilotage/ges/pdf",'256', '780', "Traitement");
    }
    /**
     *
     * @Route("/traitement/pilotage/ges/pdf", name="seePilotageGespdf")
     */
    public function PilotageGesPdfAction()
    {
        return $this->listChampPdf("Gestion de la population",'256', '780', "Traitement");
    }
}