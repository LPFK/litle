<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=UtilisateurConnecte::class, inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCommentateur;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    private $textCommentaire;

    /**
     * @ORM\OneToMany(targetEntity=LikeCommentaire::class, mappedBy="idCom")
     */
    private $listeIdLikeurs;

    public function __construct()
    {
        $this->listeIdLikeurs = new ArrayCollection();
    }

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

    public function getIdCommentateur(): ?UtilisateurConnecte
    {
        return $this->idCommentateur;
    }

    public function setIdCommentateur(?UtilisateurConnecte $idCommentateur): self
    {
        $this->idCommentateur = $idCommentateur;

        return $this;
    }

    public function getTextCommentaire(): ?string
    {
        return $this->textCommentaire;
    }

    public function setTextCommentaire(string $textCommentaire): self
    {
        $this->textCommentaire = $textCommentaire;

        return $this;
    }

    /**
     * @return Collection|LikeCommentaire[]
     */
    public function getListeIdLikeurs(): Collection
    {
        return $this->listeIdLikeurs;
    }

    public function addListeIdLikeur(LikeCommentaire $listeIdLikeur): self
    {
        if (!$this->listeIdLikeurs->contains($listeIdLikeur)) {
            $this->listeIdLikeurs[] = $listeIdLikeur;
            $listeIdLikeur->setIdCom($this);
        }

        return $this;
    }

    public function removeListeIdLikeur(LikeCommentaire $listeIdLikeur): self
    {
        if ($this->listeIdLikeurs->removeElement($listeIdLikeur)) {
            // set the owning side to null (unless already changed)
            if ($listeIdLikeur->getIdCom() === $this) {
                $listeIdLikeur->setIdCom(null);
            }
        }

        return $this;
    }


}
