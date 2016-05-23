<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="places", type="integer", nullable=false)
     */
    private $places;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=255, nullable=true)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_depart", type="string", length=30, nullable=false)
     */
    private $villeDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_arrivee", type="string", length=30, nullable=false)
     */
    private $villeArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="code_html", type="string", length=1000, nullable=true)
     */
    private $codeHtml;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Covoiturage\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_passager", referencedColumnName="id")
     * })
     */
    private $idPassager;

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
     * Get idReservation
     *
     * @return integer 
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * Set places
     *
     * @param integer $places
     * @return Reservation
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places
     *
     * @return integer 
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Reservation
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
     * Set heure
     *
     * @param string $heure
     * @return Reservation
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set villeDepart
     *
     * @param string $villeDepart
     * @return Reservation
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    /**
     * Get villeDepart
     *
     * @return string 
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * Set villeArrivee
     *
     * @param string $villeArrivee
     * @return Reservation
     */
    public function setVilleArrivee($villeArrivee)
    {
        $this->villeArrivee = $villeArrivee;

        return $this;
    }

    /**
     * Get villeArrivee
     *
     * @return string 
     */
    public function getVilleArrivee()
    {
        return $this->villeArrivee;
    }

    /**
     * Set codeHtml
     *
     * @param string $codeHtml
     * @return Reservation
     */
    public function setCodeHtml($codeHtml)
    {
        $this->codeHtml = $codeHtml;

        return $this;
    }

    /**
     * Get codeHtml
     *
     * @return string 
     */
    public function getCodeHtml()
    {
        return $this->codeHtml;
    }

    /**
     * Set idPassager
     *
     * @param \Covoiturage\UserBundle\Entity\User $idPassager
     * @return Reservation
     */
    public function setIdPassager(\Covoiturage\UserBundle\Entity\User $idPassager = null)
    {
        $this->idPassager = $idPassager;

        return $this;
    }

    /**
     * Get idPassager
     *
     * @return \Covoiturage\UserBundle\Entity\User 
     */
    public function getIdPassager()
    {
        return $this->idPassager;
    }

    /**
     * Set idTrajet
     *
     * @param \TeamBuilder\CovoiturageBundle\Entity\Trajet $idTrajet
     * @return Reservation
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
