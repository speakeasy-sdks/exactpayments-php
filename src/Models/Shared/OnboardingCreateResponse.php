<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * OnboardingCreateResponse - **Created**
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class OnboardingCreateResponse
{
    /**
     * The Unique identifier assigned to the Onboarding Application. Keep this as a reference to talk to our Customer Support team if you have any questions regarding this Application.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * The date and time when the Onboarding Application is submitted.
     * 
     * @var ?string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;
    
    /**
     * List of Principals added to the Business in Exact Payment system.
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\PrincipalCreateOnboardingResponse> $principals
     */
	#[\JMS\Serializer\Annotation\SerializedName('principals')]
    #[\JMS\Serializer\Annotation\Type('array<TheLogicStudio\ExactPayments\Models\Shared\PrincipalCreateOnboardingResponse>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $principals = null;
    
    /**
     * Current status of the Onboarding Application.
     * 
     * @var ?string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
    /**
     * This Onboarding Token value can be used to [Upload Documents](/operations/uploadDocumentByToken), allowing a Merchant to authenticate and upload documentation for the Onboarding Application. This token expires 10 minutes from the submission of the Onboarding Application.
     * 
     * @var ?string $tokenValueRaw
     */
	#[\JMS\Serializer\Annotation\SerializedName('tokenValueRaw')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tokenValueRaw = null;
    
	public function __construct()
	{
		$this->id = null;
		$this->createdAt = null;
		$this->principals = null;
		$this->status = null;
		$this->tokenValueRaw = null;
	}
}
