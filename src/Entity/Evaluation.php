<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvaluationRepository::class)
 */
class Evaluation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="json")
     */
    private $note = [];

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="evaluations")
     */
    private $evaluateur;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="evaluations")
     */
    private $evaluer;

    /**
     * @ORM\Column(type="json")
     */
    private $critere = [];

    /**
     * @ORM\ManyToOne(targetEntity=AllSession::class, inversedBy="evaluations")
     */
    private $allsession;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNote(): ?array
    {
        return $this->note;
    }

    public function setNote(array $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getEvaluateur(): ?User
    {
        return $this->evaluateur;
    }

    public function setEvaluateur(?User $evaluateur): self
    {
        $this->evaluateur = $evaluateur;

        return $this;
    }

    public function getEvaluer(): ?User
    {
        return $this->evaluer;
    }

    public function setEvaluer(?User $evaluer): self
    {
        $this->evaluer = $evaluer;

        return $this;
    }

    public function getCritere(): ?array
    {
        return $this->critere;
    }

    public function setCritere(array $critere): self
    {
        $this->critere = $critere;

        return $this;
    }

    public function getAllsession(): ?AllSession
    {
        return $this->allsession;
    }

    public function setAllsession(?AllSession $allsession): self
    {
        $this->allsession = $allsession;

        return $this;
    }
}
