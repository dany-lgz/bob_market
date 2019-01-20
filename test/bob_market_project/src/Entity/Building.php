<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingRepository")
 */
class Building
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
    private $id_building;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_ticket;

    /**
     * @ORM\Column(type="integer")
     */
    private $floor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBuilding(): ?int
    {
        return $this->id_building;
    }

    public function setIdBuilding(int $id_building): self
    {
        $this->id_building = $id_building;

        return $this;
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

    public function getFloor(): ?int
    {
        return $this->floor;
    }

    public function setFloor(int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }
}
