<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class CreateUserTokenRequest
{
    /**
     * Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value or leave it empty if you aren't assigned any Application ID. It can be specified in the header or in the body. If you're building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID.
     * 
     * @var ?string $xApplicationId
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=x-application-id')]
    public ?string $xApplicationId = null;
    
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public CreateUserTokenRequestBody $requestBody;
    
	public function __construct()
	{
		$this->xApplicationId = null;
		$this->requestBody = new \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequestBody();
	}
}
