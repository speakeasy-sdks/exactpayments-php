<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class PutCustomerIdRequest
{
    /**
     * The Customer identifier. Represents the Customer that this operation is going to be executed for.
     * 
     * @var string $customerId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=customerId')]
    public string $customerId;
    
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\TheLogicStudio\ExactPayments\Models\Shared\NewCustomer $newCustomer = null;
    
	public function __construct()
	{
		$this->customerId = "";
		$this->newCustomer = null;
	}
}
