<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class DeleteApplicationTokenResponse
{
	
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
     * **Not Found**\
     * 
     * \
     * When you'll get `404 Not Found` response:
     * - The Application doesn't exist.
     * - The Application Token doesn't exist.
     * 
     * 
     * @var ?string $notFound
     */
	
    public ?string $notFound = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?string $serviceUnavailable
     */
	
    public ?string $serviceUnavailable = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * **Unauthorized**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - The User or Application Token is invalid.
     * - The User or Application Token doesn't have permission to delete Application Tokens.
     * 
     * 
     * @var ?string $unauthorized
     */
	
    public ?string $unauthorized = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->internalServerError = null;
		$this->notFound = null;
		$this->serviceUnavailable = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->unauthorized = null;
	}
}
