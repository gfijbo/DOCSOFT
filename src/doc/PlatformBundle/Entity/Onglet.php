<?php 

namespace doc\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @ORM\Table
 * @ORM\Entity
 */
class Onglet
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToOne(targetEntity="DossierAgent", mappedBy="onglet_ref")
     */
    private $id;
    
    /**
     *
     * @ORM\Column(type="string")
     * @ORM\OneToOne(targetEntity="Page", inversedBy="onglet_ref")
     * @ORM\JoinColumn(name="onglet_ref", referencedColumnName="onglet")
     * @var string
     */
    private $onglet;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Page", mappedBy="onglet_ref")
     */    
    private $pages;
    
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $glyphicon;
    
    /**
     * @return string
     */
    public function getGlyphicon()
    {
        return $this->glyphicon;
    }
    
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $type;

    /**
     * @param string $glyphicon
     */
    public function setGlyphicon($glyphicon)
    {
        $this->glyphicon = $glyphicon;
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
    public function getOnglet()
    {
        return $this->onglet;
    }

    /**
     * @param string $onglet
     */
    public function setOnglet($onglet)
    {
        $this->onglet = $onglet;
    }
    
    public function __construct(){
        $this->pages = new ArrayCollection();
    }
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }
   
}