<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class UnderwritingWorkflowRequestCreateWorkflow
{
    /**
     * The name of the entry rule in the ruleset of this Underwriting Workflow to start evaluating the Onboarding Application.
     * 
     * @var string $entryRule
     */
	#[\JMS\Serializer\Annotation\SerializedName('entryRule')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $entryRule;
    
    /**
     * Extra information related to a Workflow. It is usually used for display purposes on the web application and not applicable to API users. This data can be used to construct the visual view of the workflow using [React Flow](https://reactflow.dev/) component library.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflowMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflowMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UnderwritingWorkflowRequestCreateWorkflowMetadata $metadata = null;
    
    /**
     * The name of the Workflow.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The list of rules available for the Underwriting Workflow process that can be used to evaluate the Onboarding Application.
     * 
     * @var array<mixed> $rules
     */
	#[\JMS\Serializer\Annotation\SerializedName('rules')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    public array $rules;
    
	public function __construct()
	{
		$this->entryRule = "";
		$this->metadata = null;
		$this->name = "";
		$this->rules = [];
	}
}
