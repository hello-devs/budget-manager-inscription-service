<?php

namespace App\Tests;

use App\Entity\UserCreationRequest;
use Exception;
use PHPUnit\Framework\TestCase;

class UserCreationRequestTest extends TestCase
{
    /** @test */
    public function that_we_can_instantiate_object(): void
    {
        $userCreationRequest = new UserCreationRequest();

        $this->assertInstanceOf(UserCreationRequest::class, $userCreationRequest);
    }

    /**
     * @test
     * @throws Exception
     */
    public function object_property_can_be_set(): void
    {
        $userCreationRequest = new UserCreationRequest();

        $userCreationRequest
            ->setEmail('u1@email.com')
            ->setVerificationCode();

        $this->assertNotNull($userCreationRequest->getVerificationCode());
        $this->assertNotNull($userCreationRequest->getEmail());
        $this->assertNotNull($userCreationRequest->getVerificationCodeGeneratedAt());
        $this->assertNull($userCreationRequest->getVerificationTry());
    }
}
