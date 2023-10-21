<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssues
{
    /**
     * $details
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesDetails> $details
     */
	#[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesDetails>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $details = null;
    
    /**
     * It shows which field is/are missing.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesField $field
     */
	#[\JMS\Serializer\Annotation\SerializedName('field')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesField>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesField $field = null;
    
    /**
     * It shows what is expecting.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PutAccountAccountIdOrdersOrderId400ApplicationJSONPathIssuesType $type = null;
    
	public function __construct()
	{
		$this->details = null;
		$this->field = null;
		$this->type = null;
	}
}
