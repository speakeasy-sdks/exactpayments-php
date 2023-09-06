<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class CreateDocumentRequestRequestBodyInput
{
    /**
     * The content of the Document Request.
     * 
     * @var string $body
     */
	#[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $body;
    
    /**
     * Set to `true` if you're creating a Document Request for an already deleted Onboarding Application.
     * 
     * @var ?bool $onboardingIsDeleted
     */
	#[\JMS\Serializer\Annotation\SerializedName('onboardingIsDeleted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $onboardingIsDeleted = null;
    
    /**
     * Subject for the Document Request email.
     * 
     * @var string $subject
     */
	#[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $subject;
    
    /**
     * The Template to use for the Document Request.
     * 
     * @var \TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequestBodyType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequestBodyType>')]
    public CreateDocumentRequestRequestBodyType $type;
    
	public function __construct()
	{
		$this->body = "";
		$this->onboardingIsDeleted = null;
		$this->subject = "";
		$this->type = \TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequestBodyType::ApplicationReceived;
	}
}
