<?php
namespace doc\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\ManyToOne(targetEntity="doc\PlatformBundle\Entity\User", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     * @var integer
     */
    private $user;

    /**
     *
     * @ORM\ManyToOne(targetEntity="doc\PlatformBundle\Entity\DossierAgent", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     * @var integer
     */
    private $dossierAgent_ref;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="doc\PlatformBundle\Entity\Formation", inversedBy="form_commentaires")
     * @ORM\JoinColumn(nullable=true)
     * @var integer
     */
    private $form_ref;

    /**
     *
     * @ORM\ManyToOne(targetEntity="doc\PlatformBundle\Entity\Tutoriel", inversedBy="tuto_commentaires")
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
     * @param number $dossierAgent_ref
     */
    public function setDossierAgent_ref($dossierAgent_ref)
    {
        $this->dossierAgent_ref = $dossierAgent_ref;
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

    /**
     *
     * @return int
     */
    public function getDossierAgentRef()
    {
        return $this->dossierAgent_ref;
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
     * @return number
     */
    public function getDossierAgent_ref()
    {
        return $this->dossierAgent_ref;
    }

    /**
     *
     * @return number
     */
    public function getUser()
    {
        return $this->user;
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
     * @param number $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     *
     * @param int $dossierAgent_ref
     */
    public function setDossierAgentRef($champ)
    {
        $this->dossierAgent_ref = $champ;
    }

    /**
     *
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }


    public function __construct()
    {
        $this->updatedAt = new \DateTimeImmutable();
    }
}