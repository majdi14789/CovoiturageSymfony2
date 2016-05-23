<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamationadherent
 *
 * @ORM\Table(name="reclamationadherent")
 * @ORM\Entity
 */
class Reclamationadherent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamationAdherent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cause", type="string", length=30, nullable=false)
     */
    private $cause;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=false)
     */
    private $description;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Covoiturage\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherentconcerne", referencedColumnName="id")
     * })
     */
    private $idAdherentconcerne;



   

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
     * Set cause
     *
     * @param string $cause
     * @return Reclamationadherent
     */
    public function setCause($cause)
    {
        $this->cause = $cause;

        return $this;
    }

    /**
     * Get cause
     *
     * @return string 
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Reclamationadherent
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idAdherentconcerne
     *
     * @param \Covoiturage\UserBundle\Entity\User $idAdherentconcerne
     * @return Reclamationadherent
     */
    public function setIdAdherentconcerne(\Covoiturage\UserBundle\Entity\User $idAdherentconcerne = null)
    {
        $this->idAdherentconcerne = $idAdherentconcerne;

        return $this;
    }

    /**
     * Get idAdherentconcerne
     *
     * @return \Covoiturage\UserBundle\Entity\User 
     */
    public function getIdAdherentconcerne()
    {
        return $this->idAdherentconcerne;
    }
}
