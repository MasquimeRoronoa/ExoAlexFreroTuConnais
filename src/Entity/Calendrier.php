<?php

namespace App\Entity;

use App\Repository\CalendrierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CalendrierRepository::class)
 */
class Calendrier
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
    private $NomCalendrier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MailCalendrier;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateDebutCalendrier;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreCalendrier;

    /**
     * @ORM\Column(type="integer")
     */
    private $TelCalendrier;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCalendrier(): ?string
    {
        return $this->NomCalendrier;
    }

    public function setNomCalendrier(string $NomCalendrier): self
    {
        $this->NomCalendrier = $NomCalendrier;

        return $this;
    }

    public function getMailCalendrier(): ?string
    {
        return $this->MailCalendrier;
    }

    public function setMailCalendrier(string $MailCalendrier): self
    {
        $this->MailCalendrier = $MailCalendrier;

        return $this;
    }

    public function getDateDebutCalendrier(): ?\DateTimeInterface
    {
        return $this->DateDebutCalendrier;
    }

    public function setDateDebutCalendrier(\DateTimeInterface $DateDebutCalendrier): self
    {
        $this->DateDebutCalendrier = $DateDebutCalendrier;

        return $this;
    }

    public function getNombreCalendrier(): ?int
    {
        return $this->NombreCalendrier;
    }

    public function setNombreCalendrier(int $NombreCalendrier): self
    {
        $this->NombreCalendrier = $NombreCalendrier;

        return $this;
    }

    public function getTelCalendrier(): ?int
    {
        return $this->TelCalendrier;
    }

    public function setTelCalendrier(int $TelCalendrier): self
    {
        $this->TelCalendrier = $TelCalendrier;

        return $this;
    }

}
