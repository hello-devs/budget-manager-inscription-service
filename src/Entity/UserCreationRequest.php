<?php

namespace App\Entity;

use App\Repository\UserCreationRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Exception;

#[ORM\Entity(repositoryClass: UserCreationRequestRepository::class)]
class UserCreationRequest
{


    public function __construct(
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int                $id = null,
        #[ORM\Column(length: 255)]
        private ?string             $email = null,
        #[ORM\Column(type: Types::SMALLINT)]
        private ?int                $verificationCode = null,
        #[ORM\Column]
        private ?\DateTimeImmutable $verificationCodeGeneratedAt = null,
        #[ORM\Column(type: Types::SMALLINT)]
        private ?int $verificationTry = null
    )
    {
    }

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

    /**
     * @throws Exception
     */
    public function setVerificationCode(): self
    {
        $this->verificationCode = random_int(1000, 9999);
        $this->setVerificationCodeGeneratedAt();

        return $this;
    }

    public function getVerificationCodeGeneratedAt(): ?\DateTimeImmutable
    {
        return $this->verificationCodeGeneratedAt;
    }

    public function setVerificationCodeGeneratedAt(): self
    {
        $this->verificationCodeGeneratedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getVerificationTry(): ?int
    {
        return $this->verificationTry;
    }

    public function setVerificationTry(int $verificationTry): self
    {
        $this->verificationTry = $verificationTry;

        return $this;
    }
}
