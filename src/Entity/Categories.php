<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
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
    private $NomCategorie;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="categories")
     */
    private $relation_produit;

    /**
     * @ORM\OneToOne(targetEntity=Menu::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $relation_menu;

    public function __construct()
    {
        $this->relation_produit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->NomCategorie;
    }

    public function setNomCategorie(string $NomCategorie): self
    {
        $this->NomCategorie = $NomCategorie;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getRelationProduit(): Collection
    {
        return $this->relation_produit;
    }

    public function addRelationProduit(Produit $relationProduit): self
    {
        if (!$this->relation_produit->contains($relationProduit)) {
            $this->relation_produit[] = $relationProduit;
            $relationProduit->setCategories($this);
        }

        return $this;
    }

    public function removeRelationProduit(Produit $relationProduit): self
    {
        if ($this->relation_produit->removeElement($relationProduit)) {
            // set the owning side to null (unless already changed)
            if ($relationProduit->getCategories() === $this) {
                $relationProduit->setCategories(null);
            }
        }

        return $this;
    }

    public function getRelationMenu(): ?Menu
    {
        return $this->relation_menu;
    }

    public function setRelationMenu(Menu $relation_menu): self
    {
        $this->relation_menu = $relation_menu;

        return $this;
    }
}
