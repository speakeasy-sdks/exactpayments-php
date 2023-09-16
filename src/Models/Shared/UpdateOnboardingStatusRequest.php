<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class UpdateOnboardingStatusRequest
{
	#[\JMS\Serializer\Annotation\SerializedName('isDeleted')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $isDeleted = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequestStatus>')]
    public UpdateOnboardingStatusRequestStatus $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('statusChangeReason')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequestStatusChangeReason>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateOnboardingStatusRequestStatusChangeReason $statusChangeReason = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('statusChangeReasonNote')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $statusChangeReasonNote = null;
    
	public function __construct()
	{
		$this->isDeleted = null;
		$this->status = \TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequestStatus::InProgress;
		$this->statusChangeReason = null;
		$this->statusChangeReasonNote = null;
	}
}
