<?php
namespace Covoiturage\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @ORM\Column(name="sexe", type="string", nullable=true)
     */
    private $sexe;
	
	/**
     * @ORM\Column(name="nom", type="string", nullable=true)
     */
    private $nom;
	
	/**
     * @ORM\Column(name="prenom", type="string", nullable=true)
     */
    private $prenom;
	
	/**
     * @ORM\Column(name="telephone", type="string", nullable=true)
     */
    private $telephone;
	
	/**
     * @ORM\Column(name="nombre_reclamation", type="integer", nullable=true)
     */
    private $nombreReclamation;
	
	
	/**
     * @ORM\Column(name="naissance", type="date", nullable=true)
     */
    private $naissance;
	
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set naissance
     *
     * @param \DateTime $naissance
     * @return User
     */
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }

    /**
     * Get naissance
     *
     * @return \DateTime 
     */
    public function getNaissance()
    {
        return $this->naissance;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set nombreReclamation
     *
     * @param integer $nombreReclamation
     * @return User
     */
    public function setNombreReclamation($nombreReclamation)
    {
        $this->nombreReclamation = $nombreReclamation;

        return $this;
    }

    /**
     * Get nombreReclamation
     *
     * @return integer 
     */
    public function getNombreReclamation()
    {
        return $this->nombreReclamation;
    }

    
    }
