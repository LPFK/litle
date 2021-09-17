<?php

namespace App\Entity;

use App\Repository\LikePostRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Like;

/**
 * @ORM\Entity(repositoryClass=LikePostRepository::class)
 */
class LikePost extends Like
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Post::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPost(): ?Post
    {
        return $this->idPost;
    }

    public function setIdPost(?Post $idPost): self
    {
        $this->idPost = $idPost;

        return $this;
    }
}
