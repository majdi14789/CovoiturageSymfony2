<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_voiture", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=20, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=20, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="carburant", type="string", length=20, nullable=false)
     */
    private $carburant;



    /**
     * Get idVoiture
     *
     * @return string 
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Voiture
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set carburant
     *
     * @param string $carburant
     * @return Voiture
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return string 
     */
    public function getCarburant()
    {
        return $this->carburant;
    }
}
