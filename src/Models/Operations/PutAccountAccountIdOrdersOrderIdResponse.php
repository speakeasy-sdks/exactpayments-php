<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PutAccountAccountIdOrdersOrderIdResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
    /**
     * **Bad Request**\
     * 
     * When there are errors in the payload
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Error400 $error400
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\Error400 $error400 = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Error403 $error403
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\Error403 $error403 = null;
    
    /**
     * **Not found**\
     * 
     * When there are no accounts/orders/payment found
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Error404 $error404
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\Error404 $error404 = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Error500 $error500
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\Error500 $error500 = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Error503 $error503
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\Error503 $error503 = null;
    
    /**
     * Order Updated.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\OrderResponse $orderResponse
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\OrderResponse $orderResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->error400 = null;
		$this->error403 = null;
		$this->error404 = null;
		$this->error500 = null;
		$this->error503 = null;
		$this->orderResponse = null;
	}
}
