<?php
namespace doc\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 */
class Historique
{

    /**
     *
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string",nullable=true)
     *
     */
    private $actionName;

    /**
     *
     * @ORM\Column(type="string",nullable=true)
     *
     */
    private $userName;

    /**
     *
     * @ORM\Column(type="string", length=255,nullable=true )
     * @var string
     */
    private $documentName;
    
    /**
     *
     * @ORM\Column(type="string", length=255,nullable=true)
     * @var string
     */
    private $formationName;
    
    /**
     *
     * @ORM\Column(type="date",nullable=true)
     * @var string
     */
    private $formationDateDebut;
    
    /**
     *
     * @ORM\Column(type="date",nullable=true)
     * @var string
     */
    private $formationDateFin;
    
    /**
     *
     * @ORM\Column(type="string", length=255,nullable=true)
     * @var string
     */
    private $formationDetails;
    
    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $tutorielName;
    
    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $tutorielDetails;
    
    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     * @var integer
     */
    private $documentSize;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $documentMimeType;

    /**
     *
     * @ORM\Column(type="string", length=5000, nullable=true)
     * @var string
     */
    private $commentaire;

    /**
     *
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @return string
     */
    public function getFormationDateDebut()
    {
        return $this->formationDateDebut;
    }

    /**
     * @return string
     */
    public function getFormationDateFin()
    {
        return $this->formationDateFin;
    }

    /**
     * @return string
     */
    public function getFormationDetails()
    {
        return $this->formationDetails;
    }

    /**
     * @return string
     */
    public function getTutorielDetails()
    {
        return $this->tutorielDetails;
    }

    /**
     * @param string $formationDateDebut
     */
    public function setFormationDateDebut($formationDateDebut)
    {
        $this->formationDateDebut = $formationDateDebut;
    }

    /**
     * @param string $formationDateFin
     */
    public function setFormationDateFin($formationDateFin)
    {
        $this->formationDateFin = $formationDateFin;
    }

    /**
     * @param string $formationDetails
     */
    public function setFormationDetails($formationDetails)
    {
        $this->formationDetails = $formationDetails;
    }

    /**
     * @param string $tutorielDetails
     */
    public function setTutorielDetails($tutorielDetails)
    {
        $this->tutorielDetails = $tutorielDetails;
    }

    /**
     *
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return mixed
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     *
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     *
     * @return number
     */
    public function getDocumentSize()
    {
        return $this->documentSize;
    }

    /**
     *
     * @return string
     */
    public function getDocumentMimeType()
    {
        return $this->documentMimeType;
    }

    /**
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     *
     * @param mixed $actionName
     */
    public function setActionName($actionName)
    {
        $this->actionName = $actionName;
    }

    /**
     *
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     *
     * @param string $documentName
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;
    }

    /**
     *
     * @param number $documentSize
     */
    public function setDocumentSize($documentSize)
    {
        $this->documentSize = $documentSize;
    }

    /**
     *
     * @param string $documentMimeType
     */
    public function setDocumentMimeType($documentMimeType)
    {
        $this->documentMimeType = $documentMimeType;
    }

    /**
     *
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    
    /**
     * @return string
     */
    public function getFormationName()
    {
        return $this->formationName;
    }

    /**
     * @return string
     */
    public function getTutorielName()
    {
        return $this->tutorielName;
    }

    /**
     * @param string $formationName
     */
    public function setFormationName($formationName)
    {
        $this->formationName = $formationName;
    }

    /**
     * @param string $tutorielName
     */
    public function setTutorielName($tutorielName)
    {
        $this->tutorielName = $tutorielName;
    }

    public function __construct()
    {
        $this->updatedAt = new \DateTimeImmutable();
    }
}
