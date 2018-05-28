<?php

// namespace AppBundle\Entity;
namespace doc\PlatformBundle\Entity;

use FOS\UserBundle\Model\User as FosUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends FosUser
{

    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Commentaire", mappedBy="user")
     */
    private $commentaires;

    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Document", mappedBy="user")
     */
    private $documents;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->historiques = new ArrayCollection();
        parent::__construct();
    }

    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    /**
     *
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     *
     * @param \Doctrine\Common\Collections\ArrayCollection $commentaires
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;
    }

    /**
     *
     * @param mixed $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }

    /**
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getHistoriques()
    {
        return $this->historiques;
    }
}
?>