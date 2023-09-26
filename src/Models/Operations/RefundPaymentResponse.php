<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class RefundPaymentResponse
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
     * When there are errors in the payload.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\RefundPayment400ApplicationJSON $refundPayment400ApplicationJSONObject
     */
	
    public ?RefundPayment400ApplicationJSON $refundPayment400ApplicationJSONObject = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\RefundPayment403ApplicationJSON $refundPayment403ApplicationJSONObject
     */
	
    public ?RefundPayment403ApplicationJSON $refundPayment403ApplicationJSONObject = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - When there are no Accounts/Orders/Payment found.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\RefundPayment404ApplicationJSON $refundPayment404ApplicationJSONObject
     */
	
    public ?RefundPayment404ApplicationJSON $refundPayment404ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\RefundPayment500ApplicationJSON $refundPayment500ApplicationJSONObject
     */
	
    public ?RefundPayment500ApplicationJSON $refundPayment500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\RefundPayment503ApplicationJSON $refundPayment503ApplicationJSONObject
     */
	
    public ?RefundPayment503ApplicationJSON $refundPayment503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->payment = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->refundPayment400ApplicationJSONObject = null;
		$this->refundPayment403ApplicationJSONObject = null;
		$this->refundPayment404ApplicationJSONObject = null;
		$this->refundPayment500ApplicationJSONObject = null;
		$this->refundPayment503ApplicationJSONObject = null;
	}
}
