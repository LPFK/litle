<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreLike;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreLike(): ?int
    {
        return $this->nombreLike;
    }

    public function setNombreLike(int $nombreLike): self
    {
        $this->nombreLike = $nombreLike;

        return $this;
    }
}
