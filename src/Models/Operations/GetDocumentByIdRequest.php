<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class GetDocumentByIdRequest
{
    /**
     * The Document identifier.
     * 
     * @var string $documentId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=documentId')]
    public string $documentId;
    
    /**
     * Indicates whether to download the Document for deleted Onboarding or not. If not sent, it will download the Document for currently active Onboardings under your Organization.
     * 
     * @var ?bool $isDeleted
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=isDeleted')]
    public ?bool $isDeleted = null;
    
    /**
     * The Onboarding Application identifier.
     * 
     * @var string $onboardingId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=onboardingId')]
    public string $onboardingId;
    
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
	public function __construct()
	{
		$this->documentId = "";
		$this->isDeleted = null;
		$this->onboardingId = "";
		$this->organizationId = "";
	}
}
