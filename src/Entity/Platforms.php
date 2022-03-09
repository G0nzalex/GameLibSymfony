<?php

namespace App\Entity;

use App\Repository\PlatformsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatformsRepository::class)]
class Platforms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $manufacturerPlatform;

    #[ORM\Column(type: 'string', length: 255)]
    private $modelPlatform;

    #[ORM\ManyToOne(targetEntity: Manufacturers::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_manufacturer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManufacturerPlatform(): ?string
    {
        return $this->manufacturerPlatform;
    }

    public function setManufacturerPlatform(string $manufacturerPlatform): self
    {
        $this->manufacturerPlatform = $manufacturerPlatform;

        return $this;
    }

    public function getModelPlatform(): ?string
    {
        return $this->modelPlatform;
    }

    public function setModelPlatform(string $modelPlatform): self
    {
        $this->modelPlatform = $modelPlatform;

        return $this;
    }

    
    public function getIdRole(): ?Manufacturers
    {
        return $this->id_manufacturer;
    }

    public function setIdRole(?Manufacturers $id_manufacturer): self
    {
        $this->id_manufacturer = $id_manufacturer;

        return $this;
    }
}
