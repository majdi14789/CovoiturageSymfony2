<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="cause", type="string", length=100, nullable=false)
     */
    private $cause;

    /**
     * @var string
     *
     * @ORM\Column(name="report", type="string", length=10, nullable=false)
     */
    private $report;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Covoiturage\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherentConcerne", referencedColumnName="id")
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
     * @var \Administrateur
     *
     * @ORM\ManyToOne(targetEntity="Administrateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adminisrateur", referencedColumnName="id_administrateur")
     * })
     */
    private $idAdminisrateur;



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
     * Set description
     *
     * @param string $description
     * @return Reclamation
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
     * Set cause
     *
     * @param string $cause
     * @return Reclamation
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
     * Set report
     *
     * @param string $report
     * @return Reclamation
     */
    public function setReport($report)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return string 
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set idAdherentconcerne
     *
     * @param \Covoiturage\UserBundle\Entity\User $idAdherentconcerne
     * @return Reclamation
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
     * @return Reclamation
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
     * Set idAdminisrateur
     *
     * @param \TeamBuilder\CovoiturageBundle\Entity\Administrateur $idAdminisrateur
     * @return Reclamation
     */
    public function setIdAdminisrateur(\TeamBuilder\CovoiturageBundle\Entity\Administrateur $idAdminisrateur = null)
    {
        $this->idAdminisrateur = $idAdminisrateur;

        return $this;
    }

    /**
     * Get idAdminisrateur
     *
     * @return \TeamBuilder\CovoiturageBundle\Entity\Administrateur 
     */
    public function getIdAdminisrateur()
    {
        return $this->idAdminisrateur;
    }
}
