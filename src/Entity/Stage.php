<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StageRepository::class)
 */
class Stage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $coordonneestut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $teltut;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mailtut;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $lieu;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbsemaine;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nomentreprise;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adrentreprise;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $directeur;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $codenaf;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $siret;

    /**
     * @ORM\Column(type="integer")
     */
    private $telentreprise;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $faxentreprise;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mailentreprise;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sujet;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $horLun;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $horMar;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $horMer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $horJeu;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $horVen;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $horSam;


    /**
     * @ORM\ManyToOne(targetEntity=Etudiant::class, inversedBy="stages")
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="stages")
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity=Enseignant::class, inversedBy="stages")
     */
    private $enseignant;

    /**
     * @ORM\OneToMany(targetEntity=SemaineStage::class, mappedBy="stage")
     */
    private $semaineStages;

    public function __construct()
    {
        $this->semaineStages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoordonneestut(): ?string
    {
        return $this->coordonneestut;
    }

    public function setCoordonneestut(?string $coordonneestut): self
    {
        $this->coordonneestut = $coordonneestut;

        return $this;
    }

    public function getTeltut(): ?int
    {
        return $this->teltut;
    }

    public function setTeltut(?int $teltut): self
    {
        $this->teltut = $teltut;

        return $this;
    }

    public function getMailtut(): ?string
    {
        return $this->mailtut;
    }

    public function setMailtut(?string $mailtut): self
    {
        $this->mailtut = $mailtut;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getNbsemaine(): ?int
    {
        return $this->nbsemaine;
    }

    public function setNbsemaine(?int $nbsemaine): self
    {
        $this->nbsemaine = $nbsemaine;

        return $this;
    }

    public function getNomentreprise(): ?string
    {
        return $this->nomentreprise;
    }

    public function setNomentreprise(?string $nomentreprise): self
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    public function getAdrentreprise(): ?string
    {
        return $this->adrentreprise;
    }

    public function setAdrentreprise(?string $adrentreprise): self
    {
        $this->adrentreprise = $adrentreprise;

        return $this;
    }

    public function getDirecteur(): ?string
    {
        return $this->directeur;
    }

    public function setDirecteur(?string $directeur): self
    {
        $this->directeur = $directeur;

        return $this;
    }

    public function getCodenaf(): ?string
    {
        return $this->codenaf;
    }

    public function setCodenaf(?string $codenaf): self
    {
        $this->codenaf = $codenaf;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getTelentreprise(): ?int
    {
        return $this->telentreprise;
    }

    public function setTelentreprise(int $telentreprise): self
    {
        $this->telentreprise = $telentreprise;

        return $this;
    }

    public function getFaxentreprise(): ?string
    {
        return $this->faxentreprise;
    }

    public function setFaxentreprise(?string $faxentreprise): self
    {
        $this->faxentreprise = $faxentreprise;

        return $this;
    }

    public function getMailentreprise(): ?string
    {
        return $this->mailentreprise;
    }

    public function setMailentreprise(?string $mailentreprise): self
    {
        $this->mailentreprise = $mailentreprise;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(?string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getHorLun(): ?int
    {
        return $this->horLun;
    }

    public function setHorLun(?int $horLun): self
    {
        $this->horLun = $horLun;

        return $this;
    }

    public function getHorMar(): ?int
    {
        return $this->horMar;
    }

    public function setHorMar(?int $horMar): self
    {
        $this->horMar = $horMar;

        return $this;
    }

    public function getHorMer(): ?int
    {
        return $this->horMer;
    }

    public function setHorMer(?int $horMer): self
    {
        $this->horMer = $horMer;

        return $this;
    }

    public function getHorJeu(): ?int
    {
        return $this->horJeu;
    }

    public function setHorJeu(?int $horJeu): self
    {
        $this->horJeu = $horJeu;

        return $this;
    }

    public function getHorVen(): ?int
    {
        return $this->horVen;
    }

    public function setHorVen(?int $horVen): self
    {
        $this->horVen = $horVen;

        return $this;
    }

    public function getHorSam(): ?int
    {
        return $this->horSam;
    }

    public function setHorSam(?int $horSam): self
    {
        $this->horSam = $horSam;

        return $this;
    }


    public function getEtudiant(): ?Etudiant
    {
        return $this->etudiant;
    }

    public function setEtudiant(?Etudiant $etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getEnseignant(): ?Enseignant
    {
        return $this->enseignant;
    }

    public function setEnseignant(?Enseignant $enseignant): self
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * @return Collection|SemaineStage[]
     */
    public function getSemaineStages(): Collection
    {
        return $this->semaineStages;
    }

    public function addSemaineStage(SemaineStage $semaineStage): self
    {
        if (!$this->semaineStages->contains($semaineStage)) {
            $this->semaineStages[] = $semaineStage;
            $semaineStage->setStage($this);
        }

        return $this;
    }

    public function removeSemaineStage(SemaineStage $semaineStage): self
    {
        if ($this->semaineStages->removeElement($semaineStage)) {
            // set the owning side to null (unless already changed)
            if ($semaineStage->getStage() === $this) {
                $semaineStage->setStage(null);
            }
        }

        return $this;
    }
}
