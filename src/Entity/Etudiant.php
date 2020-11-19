<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $mdp;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $numexam;

    /**
     * @ORM\Column(type="integer")
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telperso;

    /**
     * @ORM\Column(type="integer")
     */
    private $telfamille;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $postbac;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $etabbac;

    /**
     * @ORM\Column(type="date")
     */
    private $datenaiss;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $adrperso;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $adrfamille;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $statut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getNumexam(): ?string
    {
        return $this->numexam;
    }

    public function setNumexam(string $numexam): self
    {
        $this->numexam = $numexam;

        return $this;
    }

    public function getMobile(): ?int
    {
        return $this->mobile;
    }

    public function setMobile(int $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getTelperso(): ?int
    {
        return $this->telperso;
    }

    public function setTelperso(?int $telperso): self
    {
        $this->telperso = $telperso;

        return $this;
    }

    public function getTelfamille(): ?int
    {
        return $this->telfamille;
    }

    public function setTelfamille(int $telfamille): self
    {
        $this->telfamille = $telfamille;

        return $this;
    }

    public function getPostbac(): ?string
    {
        return $this->postbac;
    }

    public function setPostbac(?string $postbac): self
    {
        $this->postbac = $postbac;

        return $this;
    }

    public function getEtabbac(): ?string
    {
        return $this->etabbac;
    }

    public function setEtabbac(string $etabbac): self
    {
        $this->etabbac = $etabbac;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAdrperso(): ?string
    {
        return $this->adrperso;
    }

    public function setAdrperso(string $adrperso): self
    {
        $this->adrperso = $adrperso;

        return $this;
    }

    public function getAdrfamille(): ?string
    {
        return $this->adrfamille;
    }

    public function setAdrfamille(string $adrfamille): self
    {
        $this->adrfamille = $adrfamille;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
