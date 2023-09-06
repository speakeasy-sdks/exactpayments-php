<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountGetPaymentsResponse
{
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
    /**
     * Example response
     * 
     * @var ?array<mixed> $payments
     */
	
    public ?array $payments = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPayments403ApplicationJSON $accountGetPayments403ApplicationJSONObject
     */
	
    public ?AccountGetPayments403ApplicationJSON $accountGetPayments403ApplicationJSONObject = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - When there are no Accounts/Orders/Payment found.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPayments404ApplicationJSON $accountGetPayments404ApplicationJSONObject
     */
	
    public ?AccountGetPayments404ApplicationJSON $accountGetPayments404ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPayments500ApplicationJSON $accountGetPayments500ApplicationJSONObject
     */
	
    public ?AccountGetPayments500ApplicationJSON $accountGetPayments500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPayments503ApplicationJSON $accountGetPayments503ApplicationJSONObject
     */
	
    public ?AccountGetPayments503ApplicationJSON $accountGetPayments503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->payments = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->accountGetPayments403ApplicationJSONObject = null;
		$this->accountGetPayments404ApplicationJSONObject = null;
		$this->accountGetPayments500ApplicationJSONObject = null;
		$this->accountGetPayments503ApplicationJSONObject = null;
	}
}
