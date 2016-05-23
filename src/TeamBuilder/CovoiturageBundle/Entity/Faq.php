<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faq
 *
 * @ORM\Table(name="faq")
 * @ORM\Entity
 */
class Faq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_faq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFaq;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=20, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=1000, nullable=false)
     */
    private $contenu;



    /**
     * Get idFaq
     *
     * @return integer 
     */
    public function getIdFaq()
    {
        return $this->idFaq;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Faq
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Faq
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
