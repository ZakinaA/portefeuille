<?php

namespace App\Entity;

use App\Repository\SemaineStageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SemaineStageRepository::class)
 */
class SemaineStage
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
    private $numSemaine;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $apprentissage;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $bilan;

    /**
     * @ORM\ManyToOne(targetEntity=Stage::class, inversedBy="semaineStages")
     */
    private $stage;

    /**
     * @ORM\ManyToOne(targetEntity=tacheSemaine::class, inversedBy="semaineStages")
     */
    private $tacheSemaine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumSemaine(): ?int
    {
        return $this->numSemaine;
    }

    public function setNumSemaine(?int $numSemaine): self
    {
        $this->numSemaine = $numSemaine;

        return $this;
    }

    public function getApprentissage(): ?string
    {
        return $this->apprentissage;
    }

    public function setApprentissage(?string $apprentissage): self
    {
        $this->apprentissage = $apprentissage;

        return $this;
    }

    public function getBilan(): ?string
    {
        return $this->bilan;
    }

    public function setBilan(?string $bilan): self
    {
        $this->bilan = $bilan;

        return $this;
    }

    public function getStage(): ?Stage
    {
        return $this->stage;
    }

    public function setStage(?Stage $stage): self
    {
        $this->stage = $stage;

        return $this;
    }

    public function getTacheSemaine(): ?tacheSemaine
    {
        return $this->tacheSemaine;
    }

    public function setTacheSemaine(?tacheSemaine $tacheSemaine): self
    {
        $this->tacheSemaine = $tacheSemaine;

        return $this;
    }
}
