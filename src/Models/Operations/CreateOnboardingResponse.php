<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class CreateOnboardingResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?string $internalServerError
     */
	
    public ?string $internalServerError = null;
    
    /**
     * **Created**
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\OnboardingCreateResponse $onboardingCreateResponse
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\OnboardingCreateResponse $onboardingCreateResponse = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?string $serviceUnavailable
     */
	
    public ?string $serviceUnavailable = null;
    
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
     * **Not Found**\
     * 
     * \
     * When you'll get `404 Not Found` response:
     * - The default Workflow doesn't exist.
     * - The system token associated to the Workflow doesn't exist.
     * - The Organization doesn't exist.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingResponseBody $object
     */
	
    public ?CreateOnboardingResponseBody $object = null;
    
    /**
     * **Bad Request**\
     * 
     * \
     * The request body contains a malformed request or is incomplete.
     * 
     * 
     * @var mixed $oneOf
     */
	
    public mixed $oneOf = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->internalServerError = null;
		$this->onboardingCreateResponse = null;
		$this->serviceUnavailable = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->object = null;
		$this->oneOf = null;
	}
}
