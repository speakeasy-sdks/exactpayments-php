<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class ListFilterOptionsRequest
{
    /**
     * Indicates whether to bring the allowed Organizations for deleted Onboarding or not. If not sent, it will bring the allowed Organizations for currently active Onboardings under your Organization into the system.
     * 
     * @var ?bool $isDeleted
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=isDeleted')]
    public ?bool $isDeleted = null;
    
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
	public function __construct()
	{
		$this->isDeleted = null;
		$this->organizationId = "";
	}
}
