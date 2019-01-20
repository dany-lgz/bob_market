<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_ticket;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $checked;

    /**
     * @ORM\Column(type="boolean")
     */
    private $validated;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_valid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text_invalid;

    /**
     * @ORM\Column(type="boolean")
     */
    private $done;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_checked;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price_valid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTicket(): ?int
    {
        return $this->id_ticket;
    }

    public function setIdTicket(int $id_ticket): self
    {
        $this->id_ticket = $id_ticket;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    public function setChecked(bool $checked): self
    {
        $this->checked = $checked;

        return $this;
    }

    public function getValidated(): ?bool
    {
        return $this->validated;
    }

    public function setValidated(bool $validated): self
    {
        $this->validated = $validated;

        return $this;
    }

    public function getDateValid(): ?\DateTimeInterface
    {
        return $this->date_valid;
    }

    public function setDateValid(?\DateTimeInterface $date_valid): self
    {
        $this->date_valid = $date_valid;

        return $this;
    }

    public function getTextInvalid(): ?string
    {
        return $this->text_invalid;
    }

    public function setTextInvalid(?string $text_invalid): self
    {
        $this->text_invalid = $text_invalid;

        return $this;
    }

    public function getDone(): ?bool
    {
        return $this->done;
    }

    public function setDone(bool $done): self
    {
        $this->done = $done;

        return $this;
    }

    public function getDateChecked(): ?\DateTimeInterface
    {
        return $this->date_checked;
    }

    public function setDateChecked(?\DateTimeInterface $date_checked): self
    {
        $this->date_checked = $date_checked;

        return $this;
    }

    public function getPriceValid(): ?int
    {
        return $this->price_valid;
    }

    public function setPriceValid(?int $price_valid): self
    {
        $this->price_valid = $price_valid;

        return $this;
    }
}
