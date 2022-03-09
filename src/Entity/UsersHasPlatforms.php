<?php

namespace App\Entity;

use App\Repository\UsersHasPlatformsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersHasPlatformsRepository::class)]
class UsersHasPlatforms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: users::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_user;

    #[ORM\ManyToOne(targetEntity: platforms::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_platform;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?users
    {
        return $this->id_user;
    }

    public function setIdUser(?users $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdPlatform(): ?platforms
    {
        return $this->id_platform;
    }

    public function setIdPlatform(?platforms $id_platform): self
    {
        $this->id_platform = $id_platform;

        return $this;
    }
}
