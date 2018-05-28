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