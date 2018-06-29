<?php
/**
 * Created by PhpStorm.
 * User: sidi.hamed
 * Date: 29/06/2018
 * Time: 16:00
 */

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\Absences;

use doc\PlatformBundle\Controller\ListPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConstitutionsController extends  ListPage
{
    /**
     *
     * @Route("/traitement/absences/con/aut", name="seeAbsencesConAut")
     */
    public function AbsencesConAutAction()
    {
        return $this->listChamp("Constitutions fichiers / Autres arrêtés","/traitement/absences/edi/arr/pdf",'137', '487', "Traitement");
    }
    /**
     *
     * @Route("/traitement/absences/con/aut/pdf", name="seeAbsencesConAutpdf")
     */
    public function AbsencesConAutPdfAction()
    {
        return $this->listChampPdf("Constitutions fichiers / Autres arrêtés",'137', '487', "Traitement");
    }
}