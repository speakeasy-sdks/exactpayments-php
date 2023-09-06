<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountPostPaymentResponse
{
	
    public string $contentType;
    
    /**
     * Payment Created
     * 
     * @var mixed $payment
     */
	
    public mixed $payment = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * **Bad Request**\
     * 
     * When there are errors in the payload
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment400ApplicationJSON $accountPostPayment400ApplicationJSONObject
     */
	
    public ?AccountPostPayment400ApplicationJSON $accountPostPayment400ApplicationJSONObject = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment403ApplicationJSON $accountPostPayment403ApplicationJSONObject
     */
	
    public ?AccountPostPayment403ApplicationJSON $accountPostPayment403ApplicationJSONObject = null;
    
    /**
     * **Unprocessable Content**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment422ApplicationJSON $accountPostPayment422ApplicationJSONObject
     */
	
    public ?AccountPostPayment422ApplicationJSON $accountPostPayment422ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment500ApplicationJSON $accountPostPayment500ApplicationJSONObject
     */
	
    public ?AccountPostPayment500ApplicationJSON $accountPostPayment500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment503ApplicationJSON $accountPostPayment503ApplicationJSONObject
     */
	
    public ?AccountPostPayment503ApplicationJSON $accountPostPayment503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->payment = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->accountPostPayment400ApplicationJSONObject = null;
		$this->accountPostPayment403ApplicationJSONObject = null;
		$this->accountPostPayment422ApplicationJSONObject = null;
		$this->accountPostPayment500ApplicationJSONObject = null;
		$this->accountPostPayment503ApplicationJSONObject = null;
	}
}
