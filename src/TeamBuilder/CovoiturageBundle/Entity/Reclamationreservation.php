<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamationreservation
 *
 * @ORM\Table(name="reclamationreservation")
 * @ORM\Entity
 */
class Reclamationreservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamationReservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamationreservation;

    /**
     * @var string
     *
     * @ORM\Column(name="jours", type="string", length=30, nullable=false)
     */
    private $jours;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrreclamation", type="integer", nullable=false)
     */
    private $nbrreclamation;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Covoiturage\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reclamateur", referencedColumnName="id")
     * })
     */
    private $idReclamateur;

    /**
     * @var \Trajet
     *
     * @ORM\ManyToOne(targetEntity="Trajet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trajet", referencedColumnName="id_trajet")
     * })
     */
    private $idTrajet;




    /**
     * Get idReclamationreservation
     *
     * @return integer 
     */
    public function getIdReclamationreservation()
    {
        return $this->idReclamationreservation;
    }

    /**
     * Set jours
     *
     * @param string $jours
     * @return Reclamationreservation
     */
    public function setJours($jours)
    {
        $this->jours = $jours;

        return $this;
    }

    /**
     * Get jours
     *
     * @return string 
     */
    public function getJours()
    {
        return $this->jours;
    }

    /**
     * Set nbrreclamation
     *
     * @param integer $nbrreclamation
     * @return Reclamationreservation
     */
    public function setNbrreclamation($nbrreclamation)
    {
        $this->nbrreclamation = $nbrreclamation;

        return $this;
    }

    /**
     * Get nbrreclamation
     *
     * @return integer 
     */
    public function getNbrreclamation()
    {
        return $this->nbrreclamation;
    }

    /**
     * Set idAdherentconcerne
     *
     * @param \Covoiturage\UserBundle\Entity\User $idAdherentconcerne
     * @return Reclamationreservation
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

    /**
     * Set idReclamateur
     *
     * @param \Covoiturage\UserBundle\Entity\User $idReclamateur
     * @return Reclamationreservation
     */
    public function setIdReclamateur(\Covoiturage\UserBundle\Entity\User $idReclamateur = null)
    {
        $this->idReclamateur = $idReclamateur;

        return $this;
    }

    /**
     * Get idReclamateur
     *
     * @return \Covoiturage\UserBundle\Entity\User 
     */
    public function getIdReclamateur()
    {
        return $this->idReclamateur;
    }

    /**
     * Set idTrajet
     *
     * @param \TeamBuilder\CovoiturageBundle\Entity\Trajet $idTrajet
     * @return Reclamationreservation
     */
    public function setIdTrajet(\TeamBuilder\CovoiturageBundle\Entity\Trajet $idTrajet = null)
    {
        $this->idTrajet = $idTrajet;

        return $this;
    }

    /**
     * Get idTrajet
     *
     * @return \TeamBuilder\CovoiturageBundle\Entity\Trajet 
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
    }
}
