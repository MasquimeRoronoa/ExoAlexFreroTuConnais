<?php

namespace App\Entity;

use App\Repository\ChefRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChefRepository::class)
 */
class Chef
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
    private $NomChef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomChef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PosteChef;

    /**
     * @ORM\ManyToOne(targetEntity=Image::class, inversedBy="relation_chef")
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomChef(): ?string
    {
        return $this->NomChef;
    }

    public function setNomChef(string $NomChef): self
    {
        $this->NomChef = $NomChef;

        return $this;
    }

    public function getPrenomChef(): ?string
    {
        return $this->PrenomChef;
    }

    public function setPrenomChef(string $PrenomChef): self
    {
        $this->PrenomChef = $PrenomChef;

        return $this;
    }

    public function getPosteChef(): ?string
    {
        return $this->PosteChef;
    }

    public function setPosteChef(string $PosteChef): self
    {
        $this->PosteChef = $PosteChef;

        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): self
    {
        $this->image = $image;

        return $this;
    }
}
