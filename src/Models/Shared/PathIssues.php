<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class PathIssues
{
    /**
     * $details
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\Details> $details
     */
	#[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Shared\Details>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $details = null;
    
    /**
     * It shows which field is/are missing.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Field $field
     */
	#[\JMS\Serializer\Annotation\SerializedName('field')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\Field>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Field $field = null;
    
    /**
     * It shows what is expecting.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Error400Type $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\Error400Type>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Error400Type $type = null;
    
	public function __construct()
	{
		$this->details = null;
		$this->field = null;
		$this->type = null;
	}
}
