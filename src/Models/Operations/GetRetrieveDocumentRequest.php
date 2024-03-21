<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class GetRetrieveDocumentRequest
{
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
    /**
     * The Onboarding Application identifier.
     * 
     * @var string $onboardingId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=onboardingId')]
    public string $onboardingId;
    
    /**
     * The Document identifier.
     * 
     * @var string $documentId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=documentId')]
    public string $documentId;
    
	public function __construct()
	{
		$this->organizationId = "";
		$this->onboardingId = "";
		$this->documentId = "";
	}
}
