<?php
namespace doc\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="dossier_agent")
 * @ORM\Entity
 */
class DossierAgent
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
     * @ORM\Column(type="integer",nullable=true)
     * @ORM\OneToOne(targetEntity="Onglet", inversedBy="id")
     * @ORM\JoinColumn(name="onglet_id", referencedColumnName="id")
     */
    private $onglet_ref;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     * @ORM\OneToOne(targetEntity="Page", inversedBy="id")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $page_ref;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $champ;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $origine;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $format;

    /**
     *
     * @ORM\Column(type="string", length=5000, nullable=true)
     * @var string
     */
    private $libelle;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $num_ordre;

    /**
     *
     * @ORM\OneToMany(targetEntity="doc\PlatformBundle\Entity\Commentaire", mappedBy="dossierAgent_ref")
     */
    private $commentaires;

    /**
     * DossierAgent constructor.
     *
     * @param
     *            $commentaires
     */
    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    /**
     *
     * @return mixed
     */
    public function getCommentaires()
    {
        return $this->commentaires;
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
     * @return string
     */
    public function getOnglet_ref()
    {
        return $this->onglet_ref;
    }

    /**
     *
     * @return string
     */
    public function getPage_ref()
    {
        return $this->page_ref;
    }

    /**
     *
     * @return string
     */
    public function getChamp()
    {
        return $this->champ;
    }

    /**
     *
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     *
     * @return number
     */
    public function getNum_ordre()
    {
        return $this->num_ordre;
    }

    /**
     *
     * @param string $onglet
     */
    public function setOnglet_ref($onglet)
    {
        $this->onglet_ref = $onglet;
    }

    /**
     *
     * @param string $page
     */
    public function setPage_ref($page)
    {
        $this->page_ref = $page;
    }

    /**
     *
     * @param string $champ
     */
    public function setChamp($champ)
    {
        $this->champ = $champ;
    }

    /**
     *
     * @param string $origine
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
    }

    /**
     *
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     *
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     *
     * @param number $num_ordre
     */
    public function setNum_ordre($num_ordre)
    {
        $this->num_ordre = $num_ordre;
    }

    public function getDossierAgent()
    {
        return $this;
    }
}