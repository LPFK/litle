<?php

namespace App\Entity;

use App\Repository\LikeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LikeRepository::class)
 * @ORM\Table(name="`like`")
 */
class Like
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=UtilisateurConnecte::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idLikeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLikeur(): ?UtilisateurConnecte
    {
        return $this->idLikeur;
    }

    public function setIdLikeur(?UtilisateurConnecte $idLikeur): self
    {
        $this->idLikeur = $idLikeur;

        return $this;
    }

}
