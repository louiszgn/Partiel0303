<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContentRepository")
 */
class Content
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
    private $Text;

    /**
     * @ORM\Column(type="date")
     */
    private $ContentDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ContentStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }

    public function getContentDate(): ?\DateTimeInterface
    {
        return $this->ContentDate;
    }

    public function setContentDate(\DateTimeInterface $ContentDate): self
    {
        $this->ContentDate = $ContentDate;

        return $this;
    }

    public function getContentStatus(): ?bool
    {
        return $this->ContentStatus;
    }

    public function setContentStatus(bool $ContentStatus): self
    {
        $this->ContentStatus = $ContentStatus;

        return $this;
    }
}
