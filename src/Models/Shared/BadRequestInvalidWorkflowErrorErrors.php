<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class BadRequestInvalidWorkflowErrorErrors
{
    /**
     * Validation error code. This is used to indicate the possible error presented by a specific rule.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestInvalidWorkflowErrorErrorsCode $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\BadRequestInvalidWorkflowErrorErrorsCode>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BadRequestInvalidWorkflowErrorErrorsCode $code = null;
    
    /**
     * It indicates the name of the rule that contains the error.
     * 
     * @var ?string $rule
     */
	#[\JMS\Serializer\Annotation\SerializedName('rule')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $rule = null;
    
	public function __construct()
	{
		$this->code = null;
		$this->rule = null;
	}
}
