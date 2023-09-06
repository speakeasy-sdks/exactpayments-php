<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * OnboardingNoteOutput - **Created**
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class OnboardingNoteOutput
{
    /**
     * The version number of the Note. Everytime the Document Request is updated the version number will be incremented.
     * 
     * @var ?int $v
     */
	#[\JMS\Serializer\Annotation\SerializedName('__v')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $v = null;
    
    /**
     * The unique identifier created for the new Note.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * The Organization identifier associated with the Onboarding Application used to create the Note.
     * 
     * @var ?string $account
     */
	#[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $account = null;
    
    /**
     * The date and time when the Note was created.
     * 
     * @var ?\DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * The content of the Note posted.
     * 
     * @var ?string $note
     */
	#[\JMS\Serializer\Annotation\SerializedName('note')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $note = null;
    
    /**
     * The Onboarding Application identifier associated with this Note.
     * 
     * @var ?string $onboarding
     */
	#[\JMS\Serializer\Annotation\SerializedName('onboarding')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $onboarding = null;
    
    /**
     * The date and time when the Note was last updated.
     * 
     * @var ?\DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
    /**
     * The identifier of the User who created the Note for the Onboarding Application.
     * 
     * @var ?string $user
     */
	#[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $user = null;
    
    /**
     * The Name of the User who created the Note for the Onboarding Application.
     * 
     * @var ?string $userName
     */
	#[\JMS\Serializer\Annotation\SerializedName('userName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userName = null;
    
	public function __construct()
	{
		$this->v = null;
		$this->id = null;
		$this->account = null;
		$this->createdAt = null;
		$this->note = null;
		$this->onboarding = null;
		$this->updatedAt = null;
		$this->user = null;
		$this->userName = null;
	}
}