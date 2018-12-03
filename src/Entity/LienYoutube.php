<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LienYoutubeRepository")
 */
class LienYoutube
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lien;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isTreated;

    /**
     * @ORM\Column(type="integer")
     */
    private $hasFailed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLien(): ?string
    {
        return $this->Lien;
    }

    public function setLien(string $Lien): self
    {
        $this->Lien = $Lien;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getIsTreated(): ?bool
    {
        return $this->isTreated;
    }

    public function setIsTreated(bool $isTreated): self
    {
        $this->isTreated = $isTreated;

        return $this;
    }

    public function getHasFailed(): ?int
    {
        return $this->hasFailed;
    }

    public function setHasFailed(int $hasFailed): self
    {
        $this->hasFailed = $hasFailed;

        return $this;
    }
}
