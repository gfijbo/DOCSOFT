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
     * @ORM\Column(type="string")
     *
     */
    private $actionName;

    /**
     *
     * @ORM\Column(type="string")
     *
     */
    private $userName;

    /**
     *
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $documentName;
    
    /**
     *
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $formationName;
    
    /**
     *
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $tutorielName;
    
    /**
     *
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $documentSize;

    /**
     *
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $documentMimeType;

    /**
     *
     * @ORM\Column(type="string", length=5000)
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
