<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PostPayment400ApplicationJSONPathIssues
{
    /**
     * $details
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Operations\PostPayment400ApplicationJSONPathIssuesDetails> $details
     */
	#[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Operations\PostPayment400ApplicationJSONPathIssuesDetails>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $details = null;
    
    /**
     * It shows which field is/are missing.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPayment400ApplicationJSONPathIssuesField $field
     */
	#[\JMS\Serializer\Annotation\SerializedName('field')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PostPayment400ApplicationJSONPathIssuesField>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostPayment400ApplicationJSONPathIssuesField $field = null;
    
    /**
     * It shows what is expecting.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPayment400ApplicationJSONPathIssuesType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PostPayment400ApplicationJSONPathIssuesType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostPayment400ApplicationJSONPathIssuesType $type = null;
    
	public function __construct()
	{
		$this->details = null;
		$this->field = null;
		$this->type = null;
	}
}