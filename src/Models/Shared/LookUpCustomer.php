<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class LookUpCustomer
{
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('customerId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $token = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $updatedAt = null;
    
	public function __construct()
	{
		$this->createdAt = null;
		$this->customerId = null;
		$this->token = null;
		$this->type = null;
		$this->updatedAt = null;
	}
}
