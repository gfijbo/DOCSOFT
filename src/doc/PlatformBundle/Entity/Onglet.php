<?php 

namespace doc\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     */
    private $onglet;
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

    
    
}