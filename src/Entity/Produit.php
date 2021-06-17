<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $NomProduit;

    /**
     * @ORM\Column(type="float")
     */
    private $PrixProduit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DescProduit;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="relation_produit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categories;

    /**
     * @ORM\ManyToOne(targetEntity=Image::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->NomProduit;
    }

    public function setNomProduit(string $NomProduit): self
    {
        $this->NomProduit = $NomProduit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->PrixProduit;
    }

    public function setPrixProduit(float $PrixProduit): self
    {
        $this->PrixProduit = $PrixProduit;

        return $this;
    }

    public function getPhotoProduit(): ?string
    {
        return $this->PhotoProduit;
    }

    public function setPhotoProduit(string $PhotoProduit): self
    {
        $this->PhotoProduit = $PhotoProduit;

        return $this;
    }

    public function getDescProduit(): ?string
    {
        return $this->DescProduit;
    }

    public function setDescProduit(string $DescProduit): self
    {
        $this->DescProduit = $DescProduit;

        return $this;
    }

    public function getCategorieProduit(): ?string
    {
        return $this->CategorieProduit;
    }

    public function setCategorieProduit(string $CategorieProduit): self
    {
        $this->CategorieProduit = $CategorieProduit;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

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
