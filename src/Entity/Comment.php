<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $CommentDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Publisher;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentDate(): ?\DateTimeInterface
    {
        return $this->CommentDate;
    }

    public function setCommentDate(\DateTimeInterface $CommentDate): self
    {
        $this->CommentDate = $CommentDate;

        return $this;
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

    public function getPublisher(): ?string
    {
        return $this->Publisher;
    }

    public function setPublisher(string $Publisher): self
    {
        $this->Publisher = $Publisher;

        return $this;
    }
}
