<?php 

namespace doc\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table
 * @ORM\Entity
 */
class Page
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToOne(targetEntity="DossierAgent", mappedBy="page_ref")
     */
    private $id;
    
    /**
     *
     * @ORM\Column(type="string")
     * @var string
     */
    private $page;
    
    /**
     *
     * @ORM\Column(type="string")
     * @var string
     */
    private $url;
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="Onglet", mappedBy="id")
     * @var integer
     */
    private $onglet_ref;
    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return number
     */
    public function getOnglet_ref()
    {
        return $this->onglet_ref;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param number $onglet_ref
     */
    public function setOnglet_ref($onglet_ref)
    {
        $this->onglet_ref = $onglet_ref;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param string $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    
    
}