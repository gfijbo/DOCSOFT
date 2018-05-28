<?php
namespace doc\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @Vich\Uploadable
 * @ORM\Table(name="document")
 * @ORM\Entity
 */
class Document
{

    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="document", fileNameProperty="documentName", size="documentSize", mimeType="documentMimeType")
     * @var File
     * @Assert\File(
     *     maxSize = "50M")
     */
    private $documentFile;

    /**
     *
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $documentName;

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
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e.
     * not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     */

    /**
     *
     * @ORM\ManyToOne(targetEntity="doc\PlatformBundle\Entity\User", inversedBy="documents")
     * @ORM\JoinColumn(nullable=false)
     * @var string
     */
    private $user;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="doc\PlatformBundle\Entity\Formation", inversedBy="form_documents")
     * @ORM\JoinColumn(nullable=true)
     * @var integer
     */
    private $form_ref;

    /**
     *
     * @ORM\ManyToOne(targetEntity="doc\PlatformBundle\Entity\Formation", inversedBy="tuto_documents")
     * @ORM\JoinColumn(nullable=true)
     * @var integer
     */
    private $tuto_ref;

    /**
     * @return number
     */
    public function getForm_ref()
    {
        return $this->form_ref;
    }

    /**
     * @return number
     */
    public function getTuto_ref()
    {
        return $this->tuto_ref;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @param number $form_ref
     */
    public function setForm_ref($form_ref)
    {
        $this->form_ref = $form_ref;
    }

    /**
     * @param number $tuto_ref
     */
    public function setTuto_ref($tuto_ref)
    {
        $this->tuto_ref = $tuto_ref;
    }

    public function setDocumentFile(?File $doc = null): void
    {
        $this->documentFile = $doc;
        if (null !== $doc) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     *
     * @return File|NULL
     */
    public function getDocumentFile(): ?File
    {
        return $this->documentFile;
    }

    public function setDocumentName(?string $documentName): void
    {
        $this->documentName = $documentName;
    }

    /**
     *
     * @return string|NULL
     */
    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }

    public function setDocumentSize(?int $documentSize): void
    {
        $this->documentSize = $documentSize;
    }

    /**
     *
     * @return int|NULL
     */
    public function getDocumentSize(): ?int
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
     * @param string $documentMimeType
     */
    public function setDocumentMimeType($documentMimeType)
    {
        $this->documentMimeType = $documentMimeType;
    }

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
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}

