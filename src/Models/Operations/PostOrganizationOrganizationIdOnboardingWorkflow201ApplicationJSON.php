<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * PostOrganizationOrganizationIdOnboardingWorkflow201ApplicationJSON - **Created**
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class PostOrganizationOrganizationIdOnboardingWorkflow201ApplicationJSON
{
    /**
     * The unique identifier assigned to the newly created Underwriting Workflow.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	public function __construct()
	{
		$this->id = null;
	}
}
