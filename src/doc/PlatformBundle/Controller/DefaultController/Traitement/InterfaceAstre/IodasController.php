<?php

namespace doc\PlatformBundle\Controller\DefaultController\Traitement\InterfaceAstre;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use doc\PlatformBundle\Controller\ListPage;

class IodasController extends ListPage
{
    /**
     *
     * @Route("/traitement/interface/iodas/edi", name="seeInterfaceIodasEdi")
     */
    public function InterfaceIodasEdiAction()
    {
        return $this->listChamp("IODAS / Edition des bulletins des assistantes maternelles","traitement/interface/iodas/edi/pdf",'187', '651', "Traitement");
    }
    /**
     *
     * @Route("/traitement/interface/iodas/edi/pdf", name="seeInterfaceIodasEdipdf")
     */
    public function InterfaceIodasEdiPdfAction()
    {
        return $this->listChampPdf("IODAS / Edition des bulletins des assistantes maternelles",'187', '651', "Traitement");
    }
    
    /**
     *
     * @Route("/traitement/interface/iodas/ret", name="seeInterfaceIodasRet")
     */
    public function InterfaceIodasRetAction()
    {
        return $this->listChamp("IODAS / Retour vers Iodas","/traitement/interface/iodas/ret/pdf",'187', '652', "Traitement");
    }
    /**
     *
     * @Route("/traitement/interface/iodas/ret/pdf", name="seeInterfaceIodasRetpdf")
     */
    public function InterfaceIodasRetPdfAction()
    {
        return $this->listChampPdf("IODAS / Retour vers Iodas",'187', '652', "Traitement");
    }
}