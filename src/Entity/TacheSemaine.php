<?php

namespace App\Entity;

use App\Repository\TacheSemaineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TacheSemaineRepository::class)
 */
class TacheSemaine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=DomaineTaches::class, inversedBy="tacheSemaines")
     */
    private $domainetaches;

    /**
     * @ORM\ManyToOne(targetEntity=Jour::class, inversedBy="tacheSemaines")
     */
    private $jour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDomainetaches(): ?DomaineTaches
    {
        return $this->domainetaches;
    }

    public function setDomainetaches(?DomaineTaches $domainetaches): self
    {
        $this->domainetaches = $domainetaches;

        return $this;
    }

    public function getJour(): ?Jour
    {
        return $this->jour;
    }

    public function setJour(?Jour $jour): self
    {
        $this->jour = $jour;

        return $this;
    }
}
