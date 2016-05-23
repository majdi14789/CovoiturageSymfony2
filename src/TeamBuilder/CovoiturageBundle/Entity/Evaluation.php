<?php

namespace TeamBuilder\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity
 */
class Evaluation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evaluation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvaluation;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=300, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=300, nullable=true)
     */
    private $reponse;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Covoiturage\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherentEvalue", referencedColumnName="id")
     * })
     */
    private $idAdherentevalue;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Covoiturage\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evaluateur", referencedColumnName="id")
     * })
     */
    private $idEvaluateur;



   

    /**
     * Get idEvaluation
     *
     * @return integer 
     */
    public function getIdEvaluation()
    {
        return $this->idEvaluation;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Evaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Evaluation
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
     * Set reponse
     *
     * @param string $reponse
     * @return Evaluation
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set idAdherentevalue
     *
     * @param \Covoiturage\UserBundle\Entity\User $idAdherentevalue
     * @return Evaluation
     */
    public function setIdAdherentevalue(\Covoiturage\UserBundle\Entity\User $idAdherentevalue = null)
    {
        $this->idAdherentevalue = $idAdherentevalue;

        return $this;
    }

    /**
     * Get idAdherentevalue
     *
     * @return \Covoiturage\UserBundle\Entity\User 
     */
    public function getIdAdherentevalue()
    {
        return $this->idAdherentevalue;
    }

    /**
     * Set idEvaluateur
     *
     * @param \Covoiturage\UserBundle\Entity\User $idEvaluateur
     * @return Evaluation
     */
    public function setIdEvaluateur(\Covoiturage\UserBundle\Entity\User $idEvaluateur = null)
    {
        $this->idEvaluateur = $idEvaluateur;

        return $this;
    }

    /**
     * Get idEvaluateur
     *
     * @return \Covoiturage\UserBundle\Entity\User 
     */
    public function getIdEvaluateur()
    {
        return $this->idEvaluateur;
    }
}
