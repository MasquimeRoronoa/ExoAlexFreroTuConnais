<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 * @Vich\Uploadable
 */

class Image
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
    private $NomImage;


    /**
     * @ORM\OneToOne(targetEntity=Chef::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $relation_chef;

    /**
     * @ORM\OneToOne(targetEntity=Produit::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $relation_Produit;

    /**
     * @ORM\OneToOne(targetEntity=About::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $relation_about;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="upload", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="relation_image")
     */
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomImage(): ?string
    {
        return $this->NomImage;
    }

    public function setNomImage(string $NomImage): self
    {
        $this->NomImage = $NomImage;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getRelationChef(): ?Chef
    {
        return $this->relation_chef;
    }

    public function setRelationChef(Chef $relation_chef): self
    {
        $this->relation_chef = $relation_chef;

        return $this;
    }

    public function getRelationProduit(): ?Produit
    {
        return $this->relation_Produit;
    }

    public function setRelationProduit(Produit $relation_Produit): self
    {
        $this->relation_Produit = $relation_Produit;

        return $this;
    }

    public function getRelationAbout(): ?About
    {
        return $this->relation_about;
    }

    public function setRelationAbout(?About $relation_about): self
    {
        $this->relation_about = $relation_about;

        return $this;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setRelationImage($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getRelationImage() === $this) {
                $produit->setRelationImage(null);
            }
        }

        return $this;
    }
}
