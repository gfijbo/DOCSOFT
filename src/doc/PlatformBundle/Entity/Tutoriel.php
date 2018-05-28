<?php
namespace doc\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table
 * @ORM\Entity
 */
class Tutoriel
{

    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $nomTuto;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $tutoDetails;

    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Commentaire", mappedBy="tuto_ref", cascade={"remove"})
     */
    private $tutoCommentaires;

    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Document", mappedBy="tuto_ref", cascade={"remove"})
     */
    private $tutoDocuments;


    public function __construct()
    {
        $this->form_commentaires = new ArrayCollection();
        $this->form_documents = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomTuto()
    {
        return $this->nomTuto;
    }

    /**
     * @param mixed $nomTuto
     */
    public function setNomTuto($nomTuto)
    {
        $this->nomTuto = $nomTuto;
    }

    /**
     * @return mixed
     */
    public function getTutoDetails()
    {
        return $this->tutoDetails;
    }

    /**
     * @param mixed $tutoDetails
     */
    public function setTutoDetails($tutoDetails)
    {
        $this->tutoDetails = $tutoDetails;
    }


    /**
     * @return mixed
     */
    public function getTutoCommentaires()
    {
        return $this->tutoCommentaires;
    }

    /**
     * @param mixed $tutoCommentaires
     */
    public function setTutoCommentaires($tutoCommentaires)
    {
        $this->tutoCommentaires = $tutoCommentaires;
    }

    /**
     * @return mixed
     */
    public function getTutoDocuments()
    {
        return $this->tutoDocuments;
    }

    /**
     * @param mixed $tutoDocuments
     */
    public function setTutoDocuments($tutoDocuments)
    {
        $this->tutoDocuments = $tutoDocuments;
    }




  }