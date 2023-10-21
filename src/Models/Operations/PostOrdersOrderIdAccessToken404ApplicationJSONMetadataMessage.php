<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PostOrdersOrderIdAccessToken404ApplicationJSONMetadataMessage
{
    /**
     * $messages
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessToken404ApplicationJSONMetadataMessageMessages> $messages
     */
	#[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessToken404ApplicationJSONMetadataMessageMessages>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;
    
	public function __construct()
	{
		$this->messages = null;
	}
}
