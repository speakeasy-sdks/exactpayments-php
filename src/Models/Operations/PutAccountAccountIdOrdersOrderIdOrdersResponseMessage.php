<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PutAccountAccountIdOrdersOrderIdOrdersResponseMessage
{
    /**
     * $messages
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdMessages> $messages
     */
	#[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdMessages>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;
    
	public function __construct()
	{
		$this->messages = null;
	}
}
