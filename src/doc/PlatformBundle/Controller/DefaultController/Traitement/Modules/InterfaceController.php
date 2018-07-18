<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Modules;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class InterfaceController extends ListPage
{
    /**
     *
     * @Route("/traitement/modules/int/mis", name="seeModulesIntMis")
     */
    public function ModulesIntMisAction()
    {
        return $this->listChamp("Interface LDAP / Mise à jour de l'annuaire","traitement/modules/int/mis/pdf",'244', '768', "Traitement");
    }
    /**
     *
     * @Route("/traitement/modules/int/mis/pdf", name="seeModulesIntMispdf")
     */
    public function ModulesIntMisPdfAction()
    {
        return $this->listChampPdf("Interface LDAP / Mise à jour de l'annuaire",'244', '768', "Traitement");
    }
}