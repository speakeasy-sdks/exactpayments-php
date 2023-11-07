<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class GetPaymentsResponse
{
    /**
     * Example response
     * 
     * @var ?array<mixed> $twoHundredApplicationJsonAnies
     */
	
    public ?array $twoHundredApplicationJsonAnies = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentsResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?GetPaymentsResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - When there are no Accounts/Orders/Payment found.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentsPaymentsResponseBody $fourHundredAndFourApplicationJsonObject
     */
	
    public ?GetPaymentsPaymentsResponseBody $fourHundredAndFourApplicationJsonObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentsPaymentsResponseResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?GetPaymentsPaymentsResponseResponseBody $fiveHundredApplicationJsonObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentsPaymentsResponse503ResponseBody $fiveHundredAndThreeApplicationJsonObject
     */
	
    public ?GetPaymentsPaymentsResponse503ResponseBody $fiveHundredAndThreeApplicationJsonObject = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
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
    
	public function __construct()
	{
		$this->twoHundredApplicationJsonAnies = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->fourHundredAndFourApplicationJsonObject = null;
		$this->fiveHundredApplicationJsonObject = null;
		$this->fiveHundredAndThreeApplicationJsonObject = null;
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
