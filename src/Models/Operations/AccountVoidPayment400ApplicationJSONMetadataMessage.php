<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * AccountVoidPayment400ApplicationJSONMetadataMessage - Message explaining what type of error it is.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class AccountVoidPayment400ApplicationJSONMetadataMessage
{
    /**
     * $messages
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPayment400ApplicationJSONMetadataMessageMessages> $messages
     */
	#[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPayment400ApplicationJSONMetadataMessageMessages>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;
    
	public function __construct()
	{
		$this->messages = null;
	}
}
