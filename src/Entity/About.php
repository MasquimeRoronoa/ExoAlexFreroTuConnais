<?php

namespace App\Entity;

use App\Repository\AboutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AboutRepository::class)
 */
class About
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
    private $NomAbout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DescAbout;

    /**
     * @ORM\ManyToOne(targetEntity=Image::class, inversedBy="relation_about")
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAbout(): ?string
    {
        return $this->NomAbout;
    }

    public function setNomAbout(string $NomAbout): self
    {
        $this->NomAbout = $NomAbout;

        return $this;
    }

    public function getDescAbout(): ?string
    {
        return $this->DescAbout;
    }

    public function setDescAbout(string $DescAbout): self
    {
        $this->DescAbout = $DescAbout;

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
