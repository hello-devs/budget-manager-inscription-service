<?php

namespace App\Entity;

use App\Repository\UserCreationRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserCreationRequestRepository::class)]
class UserCreationRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $verificationCode = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $validationCodeGeneratedAt = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $validationTry = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getVerificationCode(): ?int
    {
        return $this->verificationCode;
    }

    public function setVerificationCode(int $verificationCode): self
    {
        $this->verificationCode = $verificationCode;

        return $this;
    }

    public function getValidationCodeGeneratedAt(): ?\DateTimeImmutable
    {
        return $this->validationCodeGeneratedAt;
    }

    public function setValidationCodeGeneratedAt(\DateTimeImmutable $validationCodeGeneratedAt): self
    {
        $this->validationCodeGeneratedAt = $validationCodeGeneratedAt;

        return $this;
    }

    public function getValidationTry(): ?int
    {
        return $this->validationTry;
    }

    public function setValidationTry(int $validationTry): self
    {
        $this->validationTry = $validationTry;

        return $this;
    }
}
