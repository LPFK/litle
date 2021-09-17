<?php

namespace App\Entity;

use App\Repository\LikeCommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Like;

/**
 * @ORM\Entity(repositoryClass=LikeCommentaireRepository::class)
 */
class LikeCommentaire extends Like
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Commentaire::class, inversedBy="listeIdLikeurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCom(): ?Commentaire
    {
        return $this->idCom;
    }

    public function setIdCom(?Commentaire $idCom): self
    {
        $this->idCom = $idCom;

        return $this;
    }
}
