<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateCreation;

    /**
     * @ORM\Column(type="integer")
     */
    private $idcreateur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreDeLike;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreCommentaires;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $textePost;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreVues;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->DateCreation;
    }

    public function setDateCreation(\DateTimeInterface $DateCreation): self
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }

    public function getIdcreateur(): ?int
    {
        return $this->idcreateur;
    }

    public function setIdcreateur(int $idcreateur): self
    {
        $this->idcreateur = $idcreateur;

        return $this;
    }

    public function getNombreDeLike(): ?int
    {
        return $this->nombreDeLike;
    }

    public function setNombreDeLike(int $nombreDeLike): self
    {
        $this->nombreDeLike = $nombreDeLike;

        return $this;
    }

    public function getNombreCommentaires(): ?int
    {
        return $this->nombreCommentaires;
    }

    public function setNombreCommentaires(int $nombreCommentaires): self
    {
        $this->nombreCommentaires = $nombreCommentaires;

        return $this;
    }

    public function getTextePost(): ?string
    {
        return $this->textePost;
    }

    public function setTextePost(string $textePost): self
    {
        $this->textePost = $textePost;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNombreVues(): ?int
    {
        return $this->nombreVues;
    }

    public function setNombreVues(int $nombreVues): self
    {
        $this->nombreVues = $nombreVues;

        return $this;
    }
}
