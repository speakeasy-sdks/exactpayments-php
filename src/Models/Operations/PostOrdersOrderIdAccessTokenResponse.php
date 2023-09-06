<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PostOrdersOrderIdAccessTokenResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * New order access token created.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\OrderAccessToken $orderAccessToken
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\OrderAccessToken $orderAccessToken = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessToken403ApplicationJSON $postOrdersOrderIdAccessToken403ApplicationJSONObject
     */
	
    public ?PostOrdersOrderIdAccessToken403ApplicationJSON $postOrdersOrderIdAccessToken403ApplicationJSONObject = null;
    
    /**
     * **Not found**\
     * 
     * When there are no accounts/orders/payment found
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessToken404ApplicationJSON $postOrdersOrderIdAccessToken404ApplicationJSONObject
     */
	
    public ?PostOrdersOrderIdAccessToken404ApplicationJSON $postOrdersOrderIdAccessToken404ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessToken500ApplicationJSON $postOrdersOrderIdAccessToken500ApplicationJSONObject
     */
	
    public ?PostOrdersOrderIdAccessToken500ApplicationJSON $postOrdersOrderIdAccessToken500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessToken503ApplicationJSON $postOrdersOrderIdAccessToken503ApplicationJSONObject
     */
	
    public ?PostOrdersOrderIdAccessToken503ApplicationJSON $postOrdersOrderIdAccessToken503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->orderAccessToken = null;
		$this->postOrdersOrderIdAccessToken403ApplicationJSONObject = null;
		$this->postOrdersOrderIdAccessToken404ApplicationJSONObject = null;
		$this->postOrdersOrderIdAccessToken500ApplicationJSONObject = null;
		$this->postOrdersOrderIdAccessToken503ApplicationJSONObject = null;
	}
}