<?php

namespace FGS\GestionComptesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Virement
 *
 * @ORM\Table(name="virement")
 * @ORM\Entity(repositoryClass="FGS\GestionComptesBundle\Repository\VirementRepository")
 */
class Virement
{


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=20, scale=2)
     */
    private $montant;
    /**
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    /**
     * @var String
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;


    /**
     * @ORM\ManyToOne(targetEntity="FGS\GestionComptesBundle\Entity\Compte", inversedBy="mouvementFinanciers" )
     * @ORM\JoinColumn(name="compteS_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    private $compteS;

    /**
     * @ORM\ManyToOne(targetEntity="FGS\GestionComptesBundle\Entity\Compte", inversedBy="mouvementFinanciers" )
     * @ORM\JoinColumn(name="compteR_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    private $compteR;


    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param string $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return String
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param String $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getCompteS()
    {
        return $this->compteS;
    }

    /**
     * @param mixed $compteS
     */
    public function setCompteS($compteS)
    {
        $this->compteS = $compteS;
    }

    /**
     * @return mixed
     */
    public function getCompteR()
    {
        return $this->compteR;
    }

    /**
     * @param mixed $compteR
     */
    public function setCompteR($compteR)
    {
        $this->compteR = $compteR;
    }

    /**
     * Get id
     *
     * @return int
     */


    public function getId()
    {
        return $this->id;
    }
}

