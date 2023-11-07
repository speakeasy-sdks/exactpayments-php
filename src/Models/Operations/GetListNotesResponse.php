<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class GetListNotesResponse
{
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
     * **Internal Server Error**\
     * 
     * \
     * When you'll get `500 Internal Server Error` response:
     * - An internal process has failed due to a system error.
     * - One or more unique identifiers supplied in the path parameter are not valid 24-character hexadecimal value.
     * 
     * 
     * @var ?string $internalServerError
     */
	
    public ?string $internalServerError = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `404 Not Found` response:
     * - The Organization doesn't exist.
     * 
     * 
     * @var ?string $notFound
     */
	
    public ?string $notFound = null;
    
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
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?string $serviceUnavailable
     */
	
    public ?string $serviceUnavailable = null;
    
    /**
     * **Unauthorized**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - The User or Application Token is invalid.
     * - The User or Application Token doesn't have permission to read Notes.
     * 
     * 
     * @var ?string $unauthorized
     */
	
    public ?string $unauthorized = null;
    
    /**
     * **OK**
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\OnboardingNote> $classes
     */
	
    public ?array $classes = null;
    
    /**
     * **Internal Server Error**\
     * 
     * \
     * When you'll get `500 Internal Server Error` response:
     * - An internal process has failed due to a system error.
     * - One or more unique identifiers supplied in the path parameter are not valid 24-character hexadecimal value.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\ContextErrorResponseSystemError $contextErrorResponseSystemError
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\ContextErrorResponseSystemError $contextErrorResponseSystemError = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->internalServerError = null;
		$this->notFound = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->serviceUnavailable = null;
		$this->unauthorized = null;
		$this->classes = null;
		$this->contextErrorResponseSystemError = null;
	}
}
