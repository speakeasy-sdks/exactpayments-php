<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * OnboardingWithPrincipalResponse - **OK**
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class OnboardingWithPrincipalResponse
{
    /**
     * Version of the Onboarding Application, when ever an Onboarding Application is updated or ran through some process the version value will be incremented
     * 
     * @var ?float $v
     */
	#[\JMS\Serializer\Annotation\SerializedName('__v')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $v = null;
    
    /**
     * Onboarding Application identifier.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * Account Identifier assigned by Exact Payments systems when the Workflow checks are passed and account created in Exact Payments system.
     * 
     * @var ?string $account
     */
	#[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $account = null;
    
    /**
     * The date and time when the Onboarding Application was approved.
     * 
     * @var ?string $approvedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('approvedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $approvedAt = null;
    
    /**
     * Bank boarding details of the Onboarded Account. This field will be available only when the Onboarding enters the Bank Boarding state or has already boarded with the ACH and / or Credit card processors.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BankBoarding $bankBoarding
     */
	#[\JMS\Serializer\Annotation\SerializedName('bankBoarding')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\BankBoarding')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BankBoarding $bankBoarding = null;
    
    /**
     * The IP address of the client who sent the Onboarding Application.
     * 
     * @var ?string $clientIp
     */
	#[\JMS\Serializer\Annotation\SerializedName('clientIp')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $clientIp = null;
    
    /**
     * The date and time when the Organization or Account was closed.
     * 
     * @var ?string $closedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('closedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $closedAt = null;
    
    /**
     * The date and time when the Onboarding Application was created.
     * 
     * @var ?string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;
    
    /**
     * List of Document Request sent for the Onboarding Application. This field will be populated only when the Document Requests are made through Exact Payment systems.
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\DocumentRequest> $documentRequest
     */
	#[\JMS\Serializer\Annotation\SerializedName('documentRequest')]
    #[\JMS\Serializer\Annotation\Type('array<TheLogicStudio\ExactPayments\Models\Shared\DocumentRequest>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $documentRequest = null;
    
    /**
     * List of Documents uploaded for the Onboarding Application. This field will be populated only when the Documents are uploaded through Exact Payment systems.
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\Document> $documents
     */
	#[\JMS\Serializer\Annotation\SerializedName('documents')]
    #[\JMS\Serializer\Annotation\Type('array<TheLogicStudio\ExactPayments\Models\Shared\Document>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $documents = null;
    
    /**
     * Indicates whether the Onboarding Application is soft deleted/deactivated.
     * 
     * @var ?bool $isDeleted
     */
	#[\JMS\Serializer\Annotation\SerializedName('isDeleted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isDeleted = null;
    
    /**
     * Indicates whether the Onboarding Application is Locked.
     * 
     * @var ?bool $isLocked
     */
	#[\JMS\Serializer\Annotation\SerializedName('isLocked')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isLocked = null;
    
    /**
     * List of Rules executed or being executed as part of configured Workflow to Onboard the Account.
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\KycResults> $kycResults
     */
	#[\JMS\Serializer\Annotation\SerializedName('kycResults')]
    #[\JMS\Serializer\Annotation\Type('array<TheLogicStudio\ExactPayments\Models\Shared\KycResults>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $kycResults = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('merchant')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\Merchant')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Merchant $merchant = null;
    
    /**
     * The ID of the Organization who onboarded this Organization or the Account.
     * 
     * @var ?string $organization
     */
	#[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $organization = null;
    
    /**
     * The secret associated with the Onboarding Application. This field will be available only when the secret is assigned to the Onboarding Application.
     * 
     * @var ?string $secret
     */
	#[\JMS\Serializer\Annotation\SerializedName('secret')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $secret = null;
    
    /**
     * The status of the Onboarding Application.
     * 
     * @var ?string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
    /**
     * The date and time when the status was last updated.
     * 
     * @var ?string $statusUpdatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('statusUpdatedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $statusUpdatedAt = null;
    
    /**
     * The date and time when the Organization or Account was terminated.
     * 
     * @var ?string $terminatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('terminatedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $terminatedAt = null;
    
    /**
     * The type of the Onboarded entity.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithPrincipalResponseType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithPrincipalResponseType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OnboardingWithPrincipalResponseType $type = null;
    
    /**
     * The date and time when the Onboarding Application was updated.
     * 
     * @var ?string $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $updatedAt = null;
    
    /**
     * The ID of the Workflow used to onboard the Organization or the Account.
     * 
     * @var ?string $workflow
     */
	#[\JMS\Serializer\Annotation\SerializedName('workflow')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $workflow = null;
    
	public function __construct()
	{
		$this->v = null;
		$this->id = null;
		$this->account = null;
		$this->approvedAt = null;
		$this->bankBoarding = null;
		$this->clientIp = null;
		$this->closedAt = null;
		$this->createdAt = null;
		$this->documentRequest = null;
		$this->documents = null;
		$this->isDeleted = null;
		$this->isLocked = null;
		$this->kycResults = null;
		$this->merchant = null;
		$this->organization = null;
		$this->secret = null;
		$this->status = null;
		$this->statusUpdatedAt = null;
		$this->terminatedAt = null;
		$this->type = null;
		$this->updatedAt = null;
		$this->workflow = null;
	}
}
