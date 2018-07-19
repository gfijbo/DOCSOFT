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
 * @Route("/traitement/suppleance/lisdem", name="seeSimulationLisDem")
 */
    public function SuppleanceLisDemAction()
    {
        return $this->listChamp("Liste des demandes de suppléances","/traitement/suppleance/lisdem/pdf",'205', '680', "Traitement");
    }
    /**
     *
     * @Route("/traitement/suppleance/lisdem/pdf", name="seeSimulationLisDempdf")
     */
    public function SuppleanceLisDemPdfAction()
    {
        return $this->listChampPdf("Liste des demandes de suppléances",'205', '680', "Traitement");
    }
    /**
     *
     * @Route("/traitement/suppleance/lissup", name="seeSimulationLisSup")
     */
    public function SuppleanceLisSupAction()
    {
        return $this->listChamp("Liste des suppléants","/traitement/suppleance/lissup/pdf",'205', '681', "Traitement");
    }
    /**
     *
     * @Route("/traitement/suppleance/lissup/pdf", name="seeSimulationLisSuppdf")
     */
    public function SuppleanceLisSupPdfAction()
    {
        return $this->listChampPdf("Liste des suppléants",'205', '681', "Traitement");
    }

}