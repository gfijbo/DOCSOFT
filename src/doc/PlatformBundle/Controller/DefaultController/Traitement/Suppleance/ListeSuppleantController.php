<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 18/07/2018
 * Time: 17:23
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Suppleance;
use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeDemandesController extends ListPage
{
    /**
     *
     * @Route("/traitement/suppleance/lissup", name="seeCarriereLisSup")
     */
    public function SuppleanceLisSupAction()
    {
        return $this->listChamp("Liste des suppléants","/traitement/suppleance/lissup/pdf",'205', '681', "Traitement");
    }
    /**
     *
     * @Route("/traitement/suppleance/lissup/pdf", name="seeCarriereLisSuppdf")
     */
    public function SuppleanceLisSupPdfAction()
    {
        return $this->listChampPdf("Liste des suppléants",'205', '681', "Traitement");
    }

}