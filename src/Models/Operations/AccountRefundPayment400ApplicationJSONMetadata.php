<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountRefundPayment400ApplicationJSONMetadata
{
    /**
     * Message explaining what type of error it is.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment400ApplicationJSONMetadataMessage $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment400ApplicationJSONMetadataMessage')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment400ApplicationJSONMetadataMessage $message = null;
    
    /**
     * It shows what type it is.
     * 
     * @var ?string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->type = null;
	}
}