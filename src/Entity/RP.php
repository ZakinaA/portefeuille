<?php

namespace App\Entity;

use App\Repository\RPRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RPRepository::class)
 */
class RP
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $libcourt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contexte;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $environnement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $moyen;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateModif;

    /**
     * @ORM\OneToMany(targetEntity=RPactivite::class, mappedBy="rp")
     */
    private $activites;

    public function __construct()
    {
        $this->activites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibcourt(): ?string
    {
        return $this->libcourt;
    }

    public function setLibcourt(string $libcourt): self
    {
        $this->libcourt = $libcourt;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(?string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getContexte(): ?string
    {
        return $this->contexte;
    }

    public function setContexte(?string $contexte): self
    {
        $this->contexte = $contexte;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getEnvironnement(): ?string
    {
        return $this->environnement;
    }

    public function setEnvironnement(?string $environnement): self
    {
        $this->environnement = $environnement;

        return $this;
    }

    public function getMoyen(): ?string
    {
        return $this->moyen;
    }

    public function setMoyen(?string $moyen): self
    {
        $this->moyen = $moyen;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(?\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * @return Collection|RPactivite[]
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(RPactivite $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->setRp($this);
        }

        return $this;
    }

    public function removeActivite(RPactivite $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getRp() === $this) {
                $activite->setRp(null);
            }
        }

        return $this;
    }
}
