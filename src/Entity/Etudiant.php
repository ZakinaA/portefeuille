<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le nom doit comporter au moins 2 caractères",
     *      maxMessage = "Le nom doit comporter au plus 50 caractères"
     *    )
     * @Assert\NotBlank()
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le prenom doit comporter au moins 2 caractères",
     *      maxMessage = "Le prenom doit comporter au plus 50 caractères"
     *    )
     * @Assert\NotBlank()
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Assert\Length(
     *      min = 2,
     *      max = 80,
     *      minMessage = "Le mail doit comporter au moins 2 caractères",
     *      maxMessage = "Le mail doit comporter au plus 80 caractères"
     *    )
     * @Assert\NotBlank()
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $photo;

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
     * @Assert\Length(
     *      min = 1,
     *      max = 2,
     *      minMessage = "Le sexe doit comporter au moins 1 caractères",
     *      maxMessage = "Le sexe doit comporter au plus 2 caractères"
     *    )
     * @Assert\NotBlank()
     */
    private $adrperso;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\Length(
     *      min = 2,
     *      max = 80,
     *      minMessage = "L'adrperso doit comporter au moins 2 caractères",
     *      maxMessage = "L'adrperso doit comporter au plus 80 caractères"
     *    )
     * @Assert\NotBlank()
     */
    private $statut;

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

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

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
            $stage->setEtudiant($this);
        }

        return $this;
    }

    public function removeStage(Stage $stage): self
    {
        if ($this->stages->removeElement($stage)) {
            // set the owning side to null (unless already changed)
            if ($stage->getEtudiant() === $this) {
                $stage->setEtudiant(null);
            }
        }

        return $this;
    }
}
