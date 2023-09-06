<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class CreateOnboardingRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \TheLogicStudio\ExactPayments\Models\Shared\OnboardingRequest $onboardingRequest;
    
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
	public function __construct()
	{
		$this->onboardingRequest = new \TheLogicStudio\ExactPayments\Models\Shared\OnboardingRequest();
		$this->organizationId = "";
	}
}