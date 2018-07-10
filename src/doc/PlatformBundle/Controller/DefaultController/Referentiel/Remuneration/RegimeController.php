<?php
// src\doc\PlatformBundle\Controller\DefaultController\Referentiel\DonneesController.php
namespace doc\PlatformBundle\Controller\DefaultController\Referentiel\Remuneration;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RegimeController extends ListPage
{
    /**
     *
     * @Route("/referentiel/remuneration/reg/ele", name="seeRemunerationRegEle")
     */
    public function RemunerationRegEleAction()
    {
        return $this->listChamp("Régime indemnitaire / Eléments de régime indemnitaire","referentiel/remuneration/reg/ele/pdf",'52', '266', "Référentiel");
    }
    /**
     *
     * @Route("/referentiel/remuneration/reg/ele/pdf", name="seeRemunerationRegElepdf")
     */
    public function RemunerationRegElePdfAction()
    {
        return $this->listChampPdf("Régime indemnitaire / Eléments de régime indemnitaire",'52', '266', "Référentiel");
    }
}