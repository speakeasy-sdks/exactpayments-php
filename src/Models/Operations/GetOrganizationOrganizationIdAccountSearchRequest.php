<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class GetOrganizationOrganizationIdAccountSearchRequest
{
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
    /**
     * Search text on name, dbaName, phone, email and onlinePresence fields
     * 
     * @var ?string $q
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=q')]
    public ?string $q = null;
    
	public function __construct()
	{
		$this->organizationId = "";
		$this->q = null;
	}
}