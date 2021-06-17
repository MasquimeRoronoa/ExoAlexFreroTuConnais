<?php

namespace App\Entity;

use App\Repository\FeaturesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FeaturesRepository::class)
 */
class Features
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomFeatures;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DescFeatures;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IconFeatures;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFeatures(): ?string
    {
        return $this->NomFeatures;
    }

    public function setNomFeatures(string $NomFeatures): self
    {
        $this->NomFeatures = $NomFeatures;

        return $this;
    }

    public function getDescFeatures(): ?string
    {
        return $this->DescFeatures;
    }

    public function setDescFeatures(string $DescFeatures): self
    {
        $this->DescFeatures = $DescFeatures;

        return $this;
    }

    public function getIconFeatures(): ?string
    {
        return $this->IconFeatures;
    }

    public function setIconFeatures(string $IconFeatures): self
    {
        $this->IconFeatures = $IconFeatures;

        return $this;
    }
}
