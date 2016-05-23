<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet")
 * @ORM\Entity
 */
class Trajet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_trajet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrajet;

    /**
     * @var date
     *
     * @ORM\Column(name="jours", type="date", nullable=true)
     */
    private $jours;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=20, nullable=true)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="frequence", type="string", length=20, nullable=true)
     */
    private $frequence;

    /**
     * @var string
     *
     * @ORM\Column(name="type_trajet", type="string", length=20, nullable=true)
     */
    private $typeTrajet;

    /**
     * @var integer
     *
     * @ORM\Column(name="places", type="integer", nullable=true)
     */
    private $places;

    /**
     * @var string
     *
     * @ORM\Column(name="bagages", type="string", length=20, nullable=true)
     */
    private $bagages;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=300, nullable=true)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="kilometrage", type="integer", nullable=true)
     */
    private $kilometrage;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_arrivee", type="string", length=30, nullable=false)
     */
    private $villeArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_depart", type="string", length=30, nullable=false)
     */
    private $villeDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="code_html", type="string", length=255, nullable=true)
     */
    private $codeHtml;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Covoiturage\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conducteur", referencedColumnName="id")
     * })
     */
    private $idConducteur;

    /**
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_voiture", referencedColumnName="id_voiture")
     * })
     */
    private $idVoiture;




    /**
     * Get idTrajet
     *
     * @return integer 
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
    }

    /**
     * Set jours
     *
     * @param \DateTime $jours
     * @return Trajet
     */
    public function setJours($jours)
    {
        $this->jours = $jours;

        return $this;
    }

    /**
     * Get jours
     *
     * @return \DateTime 
     */
    public function getJours()
    {
        return $this->jours;
    }

    /**
     * Set heure
     *
     * @param string $heure
     * @return Trajet
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
     * Set frequence
     *
     * @param string $frequence
     * @return Trajet
     */
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;

        return $this;
    }

    /**
     * Get frequence
     *
     * @return string 
     */
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Set typeTrajet
     *
     * @param string $typeTrajet
     * @return Trajet
     */
    public function setTypeTrajet($typeTrajet)
    {
        $this->typeTrajet = $typeTrajet;

        return $this;
    }

    /**
     * Get typeTrajet
     *
     * @return string 
     */
    public function getTypeTrajet()
    {
        return $this->typeTrajet;
    }

    /**
     * Set places
     *
     * @param integer $places
     * @return Trajet
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
     * Set bagages
     *
     * @param string $bagages
     * @return Trajet
     */
    public function setBagages($bagages)
    {
        $this->bagages = $bagages;

        return $this;
    }

    /**
     * Get bagages
     *
     * @return string 
     */
    public function getBagages()
    {
        return $this->bagages;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Trajet
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set kilometrage
     *
     * @param integer $kilometrage
     * @return Trajet
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return integer 
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Trajet
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set villeArrivee
     *
     * @param string $villeArrivee
     * @return Trajet
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
     * Set villeDepart
     *
     * @param string $villeDepart
     * @return Trajet
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
     * Set codeHtml
     *
     * @param string $codeHtml
     * @return Trajet
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
     * Set idConducteur
     *
     * @param \Covoiturage\UserBundle\Entity\User $idConducteur
     * @return Trajet
     */
    public function setIdConducteur(\Covoiturage\UserBundle\Entity\User $idConducteur = null)
    {
        $this->idConducteur = $idConducteur;

        return $this;
    }

    /**
     * Get idConducteur
     *
     * @return \Covoiturage\UserBundle\Entity\User 
     */
    public function getIdConducteur()
    {
        return $this->idConducteur;
    }

    /**
     * Set idVoiture
     *
     * @param \TeamBuilder\CovoiturageBundle\Entity\Voiture $idVoiture
     * @return Trajet
     */
    public function setIdVoiture(\TeamBuilder\CovoiturageBundle\Entity\Voiture $idVoiture = null)
    {
        $this->idVoiture = $idVoiture;

        return $this;
    }

    /**
     * Get idVoiture
     *
     * @return \TeamBuilder\CovoiturageBundle\Entity\Voiture 
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
    }
}
