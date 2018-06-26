<?php
// src\doc\PlatformBundle\Controller\DefaultController\Traitement\ListesAgentsController.php
namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Identite;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListesAgentsController extends ListPage
{
    /**
     *
     * @Route("/traitement/identite/lisage/etr", name="seeIdentiteLisageEtr")
     */
    public function IdentiteLisageEtrAction()
    {
        return $this->listChamp("Listes Agents / Etrangers","/traitement/identite/lisage/etr/pdf",'118', '402', "Traitement", "118");
    }
    /**
     *
     * @Route("/traitement/identite/lisage/etr/pdf", name="seeIdentiteLisageEtrpdf")
     */
    public function IdentiteLisageEtrPdfAction()
    {
        return $this->listChampPdf("Données nationales / Pays",'118', '402', "Traitement", "118", "Traitement");
    }
}