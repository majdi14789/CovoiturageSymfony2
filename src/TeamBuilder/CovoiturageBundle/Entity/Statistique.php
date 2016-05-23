<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistique
 *
 * @ORM\Table(name="statistique")
 * @ORM\Entity
 */
class Statistique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_statistique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatistique;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=25, nullable=false)
     */
    private $date;

    /**
     * @var \Administrateur
     *
     * @ORM\ManyToOne(targetEntity="Administrateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_administrateur", referencedColumnName="id_administrateur")
     * })
     */
    private $idAdministrateur;



    /**
     * Get idStatistique
     *
     * @return integer 
     */
    public function getIdStatistique()
    {
        return $this->idStatistique;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Statistique
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idAdministrateur
     *
     * @param \TeamBuilder\CovoiturageBundle\Entity\Administrateur $idAdministrateur
     * @return Statistique
     */
    public function setIdAdministrateur(\TeamBuilder\CovoiturageBundle\Entity\Administrateur $idAdministrateur = null)
    {
        $this->idAdministrateur = $idAdministrateur;

        return $this;
    }

    /**
     * Get idAdministrateur
     *
     * @return \TeamBuilder\CovoiturageBundle\Entity\Administrateur 
     */
    public function getIdAdministrateur()
    {
        return $this->idAdministrateur;
    }
}
