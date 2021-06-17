<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
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
    private $NomMenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DescMenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IconMenu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMenu(): ?string
    {
        return $this->NomMenu;
    }

    public function setNomMenu(string $NomMenu): self
    {
        $this->NomMenu = $NomMenu;

        return $this;
    }

    public function getDescMenu(): ?string
    {
        return $this->DescMenu;
    }

    public function setDescMenu(string $DescMenu): self
    {
        $this->DescMenu = $DescMenu;

        return $this;
    }

    public function getIconMenu(): ?string
    {
        return $this->IconMenu;
    }

    public function setIconMenu(string $IconMenu): self
    {
        $this->IconMenu = $IconMenu;

        return $this;
    }
}
