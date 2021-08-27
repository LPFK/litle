<?php

namespace App\Entity;

use App\Repository\UtilisateurConnecteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurConnecteRepository::class)
 */
class UtilisateurConnecte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pseudonyme;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estConnecte;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateInscritpion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estModerateur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estAdmin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoProfil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Favoris;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $listeFavoris;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eMail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudonyme(): ?string
    {
        return $this->Pseudonyme;
    }

    public function setPseudonyme(string $Pseudonyme): self
    {
        $this->Pseudonyme = $Pseudonyme;

        return $this;
    }

    public function getEstConnecte(): ?bool
    {
        return $this->estConnecte;
    }

    public function setEstConnecte(bool $estConnecte): self
    {
        $this->estConnecte = $estConnecte;

        return $this;
    }

    public function getDateInscritpion(): ?\DateTimeInterface
    {
        return $this->DateInscritpion;
    }

    public function setDateInscritpion(\DateTimeInterface $DateInscritpion): self
    {
        $this->DateInscritpion = $DateInscritpion;

        return $this;
    }

    public function getEstModerateur(): ?bool
    {
        return $this->estModerateur;
    }

    public function setEstModerateur(bool $estModerateur): self
    {
        $this->estModerateur = $estModerateur;

        return $this;
    }

    public function getEstAdmin(): ?bool
    {
        return $this->estAdmin;
    }

    public function setEstAdmin(bool $estAdmin): self
    {
        $this->estAdmin = $estAdmin;

        return $this;
    }

    public function getPhotoProfil(): ?string
    {
        return $this->photoProfil;
    }

    public function setPhotoProfil(?string $photoProfil): self
    {
        $this->photoProfil = $photoProfil;

        return $this;
    }

    public function getFavoris(): ?string
    {
        return $this->Favoris;
    }

    public function setFavoris(string $Favoris): self
    {
        $this->Favoris = $Favoris;

        return $this;
    }

    public function getListeFavoris(): ?string
    {
        return $this->listeFavoris;
    }

    public function setListeFavoris(string $listeFavoris): self
    {
        $this->listeFavoris = $listeFavoris;

        return $this;
    }

    public function getEMail(): ?string
    {
        return $this->eMail;
    }

    public function setEMail(string $eMail): self
    {
        $this->eMail = $eMail;

        return $this;
    }
}
