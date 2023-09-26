<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PostPaymentResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Payment Created
     * 
     * @var mixed $payment
     */
	
    public mixed $payment = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * **Bad Request**\
     * 
     * When there are errors in the payload
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPayment400ApplicationJSON $postPayment400ApplicationJSONObject
     */
	
    public ?PostPayment400ApplicationJSON $postPayment400ApplicationJSONObject = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPayment403ApplicationJSON $postPayment403ApplicationJSONObject
     */
	
    public ?PostPayment403ApplicationJSON $postPayment403ApplicationJSONObject = null;
    
    /**
     * **Unprocessable Content**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPayment422ApplicationJSON $postPayment422ApplicationJSONObject
     */
	
    public ?PostPayment422ApplicationJSON $postPayment422ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPayment500ApplicationJSON $postPayment500ApplicationJSONObject
     */
	
    public ?PostPayment500ApplicationJSON $postPayment500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPayment503ApplicationJSON $postPayment503ApplicationJSONObject
     */
	
    public ?PostPayment503ApplicationJSON $postPayment503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->payment = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postPayment400ApplicationJSONObject = null;
		$this->postPayment403ApplicationJSONObject = null;
		$this->postPayment422ApplicationJSONObject = null;
		$this->postPayment500ApplicationJSONObject = null;
		$this->postPayment503ApplicationJSONObject = null;
	}
}
