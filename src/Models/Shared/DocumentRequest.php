<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class DocumentRequest
{
    /**
     * The version number of the Document Request. Everytime the Document Request is updated the version number will be incremented.
     * 
     * @var ?int $v
     */
	#[\JMS\Serializer\Annotation\SerializedName('__v')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $v = null;
    
    /**
     * Unique identifier created for the Document Requests made for the Onboarding Application.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * The body of the email sent
     * 
     * @var ?string $body
     */
	#[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $body = null;
    
    /**
     * The date and time when the Document Request was sent.
     * 
     * @var ?\DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * The Onboarding Application identifier for which the Document Request was sent.
     * 
     * @var ?string $onboarding
     */
	#[\JMS\Serializer\Annotation\SerializedName('onboarding')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $onboarding = null;
    
    /**
     * The requesting Organization who requested the Document.
     * 
     * @var ?string $requestor
     */
	#[\JMS\Serializer\Annotation\SerializedName('requestor')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $requestor = null;
    
    /**
     * The subject of the email sent.
     * 
     * @var ?string $subject
     */
	#[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subject = null;
    
    /**
     * The type of Document Request email sent.
     * 
     * @var ?string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
    /**
     * The date and time when the Document Request was lastly updated.
     * 
     * @var ?\DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
    /**
     * The unique identifier of the User who requested the Document.
     * 
     * @var ?string $user
     */
	#[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->v = null;
		$this->id = null;
		$this->body = null;
		$this->createdAt = null;
		$this->onboarding = null;
		$this->requestor = null;
		$this->subject = null;
		$this->type = null;
		$this->updatedAt = null;
		$this->user = null;
	}
}
