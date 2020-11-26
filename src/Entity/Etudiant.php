<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=Bac::class, inversedBy="etudiants")
     */
    private $bac;

    /**
     * @ORM\ManyToOne(targetEntity=Promotion::class, inversedBy="etudiants")
     */
    private $promotion;

    /**
     * @ORM\ManyToOne(targetEntity=OptionI::class, inversedBy="etudiants")
     */
    private $optionI;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="etudiants")
     */
    private $villePerso;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class)
     */
    private $villeFamille;

    /**
     * @ORM\OneToMany(targetEntity=RP::class, mappedBy="etudiant")
     */
    private $RPs;

    /**
     * @ORM\OneToMany(targetEntity=Stage::class, mappedBy="etudiants")
     */
    private $stages;

    public function __construct()
    {
        $this->RPs = new ArrayCollection();
        $this->stages = new ArrayCollection();
    }

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

    public function getBac(): ?Bac
    {
        return $this->bac;
    }

    public function setBac(?Bac $bac): self
    {
        $this->bac = $bac;

        return $this;
    }

    public function getPromotion(): ?Promotion
    {
        return $this->promotion;
    }

    public function setPromotion(?Promotion $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getOptionI(): ?OptionI
    {
        return $this->optionI;
    }

    public function setOptionI(?OptionI $optionI): self
    {
        $this->optionI = $optionI;

        return $this;
    }

    public function getVillePerso(): ?Ville
    {
        return $this->villePerso;
    }

    public function setVillePerso(?Ville $villePerso): self
    {
        $this->villePerso = $villePerso;

        return $this;
    }

    public function getVilleFamille(): ?Ville
    {
        return $this->villeFamille;
    }

    public function setVilleFamille(?Ville $villeFamille): self
    {
        $this->villeFamille = $villeFamille;

        return $this;
    }

    /**
     * @return Collection|RP[]
     */
    public function getRPs(): Collection
    {
        return $this->RPs;
    }

    public function addRP(RP $rP): self
    {
        if (!$this->RPs->contains($rP)) {
            $this->RPs[] = $rP;
            $rP->setEtudiant($this);
        }

        return $this;
    }

    public function removeRP(RP $rP): self
    {
        if ($this->RPs->removeElement($rP)) {
            // set the owning side to null (unless already changed)
            if ($rP->getEtudiant() === $this) {
                $rP->setEtudiant(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Stage[]
     */
    public function getStages(): Collection
    {
        return $this->stages;
    }

    public function addStage(Stage $stage): self
    {
        if (!$this->stages->contains($stage)) {
            $this->stages[] = $stage;
            $stage->setEtudiants($this);
        }

        return $this;
    }

    public function removeStage(Stage $stage): self
    {
        if ($this->stages->removeElement($stage)) {
            // set the owning side to null (unless already changed)
            if ($stage->getEtudiants() === $this) {
                $stage->setEtudiants(null);
            }
        }

        return $this;
    }
}
