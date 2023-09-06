<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class KycResults
{
    /**
     * The unique identifier assigned to the Rule in Exact Payment's system.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * The name of the Rule in the Workflow configured to run against this Onboarding.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * The date and time when the rule was executed.
     * 
     * @var ?\DateTime $performedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('performedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $performedAt = null;
    
    /**
     * The Status of the Rule executed or being executed.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\RuleStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\RuleStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?RuleStatus $status = null;
    
    /**
     * The type of Rule executed or being executed.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\KycResultsType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\KycResultsType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?KycResultsType $type = null;
    
	public function __construct()
	{
		$this->id = null;
		$this->name = null;
		$this->performedAt = null;
		$this->status = null;
		$this->type = null;
	}
}