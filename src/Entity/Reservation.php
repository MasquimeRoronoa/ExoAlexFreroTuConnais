<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $NomReservation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MailReservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $TelReservation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateReservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreReservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomReservation(): ?string
    {
        return $this->NomReservation;
    }

    public function setNomReservation(string $NomReservation): self
    {
        $this->NomReservation = $NomReservation;

        return $this;
    }

    public function getMailReservation(): ?string
    {
        return $this->MailReservation;
    }

    public function setMailReservation(string $MailReservation): self
    {
        $this->MailReservation = $MailReservation;

        return $this;
    }

    public function getTelReservation(): ?int
    {
        return $this->TelReservation;
    }

    public function setTelReservation(int $TelReservation): self
    {
        $this->TelReservation = $TelReservation;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->DateReservation;
    }

    public function setDateReservation(\DateTimeInterface $DateReservation): self
    {
        $this->DateReservation = $DateReservation;

        return $this;
    }

    public function getNombreReservation(): ?int
    {
        return $this->NombreReservation;
    }

    public function setNombreReservation(int $NombreReservation): self
    {
        $this->NombreReservation = $NombreReservation;

        return $this;
    }
}
