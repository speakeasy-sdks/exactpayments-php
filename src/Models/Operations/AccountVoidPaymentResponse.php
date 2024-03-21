<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountVoidPaymentResponse
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
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
     * **Bad Request**\
     * 
     * When there are errors in the payload.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\PaymentsError400 $paymentsError400
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\PaymentsError400 $paymentsError400 = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - When there are no Accounts/Orders/Payment found.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\PaymentsError404 $paymentsError404
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\PaymentsError404 $paymentsError404 = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->payment = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->error403 = null;
		$this->error500 = null;
		$this->error503 = null;
		$this->paymentsError400 = null;
		$this->paymentsError404 = null;
	}
}
