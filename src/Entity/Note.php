<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoteRepository::class)
 */
class Note
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
    private $idProjet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $note;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=EtatNote::class, inversedBy="notes")
     */
    private $etatNote;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProjet(): ?string
    {
        return $this->idProjet;
    }

    public function setIdProjet(string $idProjet): self
    {
        $this->idProjet = $idProjet;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEtatNote(): ?EtatNote
    {
        return $this->etatNote;
    }

    public function setEtatNote(?EtatNote $etatNote): self
    {
        $this->etatNote = $etatNote;

        return $this;
    }
}
