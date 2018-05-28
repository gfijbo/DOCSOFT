<?php
namespace doc\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table
 * @ORM\Entity
 */
class Formation
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
    private $nomForm;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $formDetails;

    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;

    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Commentaire", mappedBy="form_ref", cascade={"remove"})
     */
    private $form_commentaires;

    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Document", mappedBy="form_ref", cascade={"remove"})
     */
    private $form_documents;

    /**
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return mixed
     */
    public function getNomForm()
    {
        return $this->nomForm;
    }

    /**
     *
     * @return mixed
     */
    public function getFormDetails()
    {
        return $this->formDetails;
    }

    /**
     *
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     *
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getForm_commentaires()
    {
        return $this->form_commentaires;
    }

    /**
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getForm_documents()
    {
        return $this->form_documents;
    }

    /**
     *
     * @param mixed $nomForm
     */
    public function setNomForm($nomForm)
    {
        $this->nomForm = $nomForm;
    }

    /**
     *
     * @param mixed $formDetails
     */
    public function setFormDetails($formDetails)
    {
        $this->formDetails = $formDetails;
    }

    /**
     *
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     *
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     *
     * @param \Doctrine\Common\Collections\ArrayCollection $form_commentaires
     */
    public function setForm_commentaires($form_commentaires)
    {
        $this->form_commentaires = $form_commentaires;
    }

    /**
     *
     * @param \Doctrine\Common\Collections\ArrayCollection $form_documents
     */
    public function setForm_documents($form_documents)
    {
        $this->form_documents = $form_documents;
    }

    public function __construct()
    {
        $this->form_commentaires = new ArrayCollection();
        $this->form_documents = new ArrayCollection();
    }
}