<?php

namespace App\Entity;

use App\Repository\GamesHasUsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamesHasUsersRepository::class)]
class GamesHasUsers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: games::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $games_id_game;

    #[ORM\ManyToOne(targetEntity: users::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $users_id_user;

    #[ORM\Column(type: 'integer')]
    private $id_platform;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGamesIdGame(): ?games
    {
        return $this->games_id_game;
    }

    public function setGamesIdGame(?games $games_id_game): self
    {
        $this->games_id_game = $games_id_game;

        return $this;
    }

    public function getUsersIdUser(): ?users
    {
        return $this->users_id_user;
    }

    public function setUsersIdUser(?users $users_id_user): self
    {
        $this->users_id_user = $users_id_user;

        return $this;
    }

    public function getIdPlatform(): ?int
    {
        return $this->id_platform;
    }

    public function setIdPlatform(int $id_platform): self
    {
        $this->id_platform = $id_platform;

        return $this;
    }
}
