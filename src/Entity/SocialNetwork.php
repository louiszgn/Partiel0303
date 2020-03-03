<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SocialNetworkRepository")
 */
class SocialNetwork
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
    private $SNetworkName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SNToken;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SNApiLink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSNetworkName(): ?string
    {
        return $this->SNetworkName;
    }

    public function setSNetworkName(string $SNetworkName): self
    {
        $this->SNetworkName = $SNetworkName;

        return $this;
    }

    public function getSNToken(): ?string
    {
        return $this->SNToken;
    }

    public function setSNToken(string $SNToken): self
    {
        $this->SNToken = $SNToken;

        return $this;
    }

    public function getSNApiLink(): ?string
    {
        return $this->SNApiLink;
    }

    public function setSNApiLink(string $SNApiLink): self
    {
        $this->SNApiLink = $SNApiLink;

        return $this;
    }
}
