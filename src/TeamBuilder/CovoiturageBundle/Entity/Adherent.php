<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent")
 * @ORM\Entity
 */
class Adherent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_adherent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;
    /**
     * @var integer
     * @ORM\Column(name="age", type="integer", length=3, nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_mail", type="string", length=30, nullable=false)
     */
    private $adresseMail;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=10, nullable=false)
     */
    private $mdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_reclamation", type="integer", nullable=false)
     */
    private $nombreReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="bloque", type="string", length=255, nullable=false)
     */
    private $bloque;


 /**
 * @ORM\Column (name="sexe", type="string", length=22)
 */
private $sexe;
    /**
     * Get idAdherent
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Adherent
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
     * @return Adherent
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
     * Set adresseMail
     *
     * @param string $adresseMail
     * @return Adherent
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }

    /**
     * Get adresseMail
     *
     * @return string 
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Adherent
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Adherent
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set nombreReclamation
     *
     * @param integer $nombreReclamation
     * @return Adherent
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

    /**
     * Set bloqu�
     *
     * @param string $bloque
     * @return Adherent
     */
    public function setBloque($bloque)
    {
        $this->bloque = $bloque;

        return $this;
    }

    /**
     * Get bloque
     *
     * @return string 
     */
    public function getBloque()
    {
        return $this->bloque;
    }
    public function __toString()
    {
        return $this->id."";
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Adherent
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
     * Set age
     *
     * @param integer $age
     * @return Adherent
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * @var integer
     */
    private $idAdherent;


    /**
     * Get idAdherent
     *
     * @return integer 
     */
    public function getIdAdherent()
    {
        return $this->idAdherent;
    }
}
