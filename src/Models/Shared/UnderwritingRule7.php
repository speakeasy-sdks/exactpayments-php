<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * UnderwritingRule7 - This verification service allows Exact Payments to authenticate the account holder's identity of the associated depository or checking account through Plaid, thus reducing fraud and account errors.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class UnderwritingRule7
{
    /**
     * The name assigned to the rule check.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Indicates what action the decision engine will take if the rule does not match its criteria.\
     * 
     * The possible values are *accept*, *reject*, *review*, or the name of another rule which should be executed for further evaluation in this ruleset.
     * 
     * @var string $onFail
     */
	#[\JMS\Serializer\Annotation\SerializedName('onFail')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $onFail;
    
    /**
     * Indicates the decision engine's action if the rule matches its criteria.\
     * 
     * The possible values are *accept*, *reject*, *review*, or the name of another rule which should be executed for further evaluation in this ruleset.
     * 
     * @var string $onPass
     */
	#[\JMS\Serializer\Annotation\SerializedName('onPass')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $onPass;
    
    /**
     * This rule has no options so it can be defined as an empty object.
     * 
     * @var \TheLogicStudio\ExactPayments\Models\Shared\EmptyRuleOptionsField $options
     */
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\EmptyRuleOptionsField')]
    public EmptyRuleOptionsField $options;
    
    /**
     * Type of rule that will be evaluated by the decision engine
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\UnderwritingRuleType7 $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\UnderwritingRuleType7>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UnderwritingRuleType7 $type = null;
    
	public function __construct()
	{
		$this->name = "";
		$this->onFail = "";
		$this->onPass = "";
		$this->options = new \TheLogicStudio\ExactPayments\Models\Shared\EmptyRuleOptionsField();
		$this->type = null;
	}
}
