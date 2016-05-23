<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pointarret
 *
 * @ORM\Table(name="pointarret")
 * @ORM\Entity
 */
class Pointarret
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pointArret", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPointarret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrivee", type="date", nullable=false)
     */
    private $dateArrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_arrivee", type="time", nullable=false)
     */
    private $heureArrivee;

    /**
     * @var float
     *
     * @ORM\Column(name="pt_prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $ptPrix;

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
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville", referencedColumnName="id_ville")
     * })
     */
    private $idVille;



    /**
     * Get idPointarret
     *
     * @return integer 
     */
    public function getIdPointarret()
    {
        return $this->idPointarret;
    }

    /**
     * Set dateArrivee
     *
     * @param \DateTime $dateArrivee
     * @return Pointarret
     */
    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    /**
     * Get dateArrivee
     *
     * @return \DateTime 
     */
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    /**
     * Set heureArrivee
     *
     * @param \DateTime $heureArrivee
     * @return Pointarret
     */
    public function setHeureArrivee($heureArrivee)
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    /**
     * Get heureArrivee
     *
     * @return \DateTime 
     */
    public function getHeureArrivee()
    {
        return $this->heureArrivee;
    }

    /**
     * Set ptPrix
     *
     * @param float $ptPrix
     * @return Pointarret
     */
    public function setPtPrix($ptPrix)
    {
        $this->ptPrix = $ptPrix;

        return $this;
    }

    /**
     * Get ptPrix
     *
     * @return float 
     */
    public function getPtPrix()
    {
        return $this->ptPrix;
    }

    /**
     * Set idTrajet
     *
     * @param \TeamBuilder\CovoiturageBundle\Entity\Trajet $idTrajet
     * @return Pointarret
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

    /**
     * Set idVille
     *
     * @param \TeamBuilder\CovoiturageBundle\Entity\Ville $idVille
     * @return Pointarret
     */
    public function setIdVille(\TeamBuilder\CovoiturageBundle\Entity\Ville $idVille = null)
    {
        $this->idVille = $idVille;

        return $this;
    }

    /**
     * Get idVille
     *
     * @return \TeamBuilder\CovoiturageBundle\Entity\Ville 
     */
    public function getIdVille()
    {
        return $this->idVille;
    }
}
