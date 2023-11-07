<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class CreateUserTokenResponse
{
    /**
     * **Bad Request**\
     * 
     * \
     * The request body contains a malformed request or is incomplete.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestZodError $badRequestZodError
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestZodError $badRequestZodError = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * **Forbidden**\
     * 
     * \
     * When you'll get `403 Forbidden` response:
     * - The User's password expired.
     * 
     * 
     * @var ?string $forbidden
     */
	
    public ?string $forbidden = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?string $internalServerError
     */
	
    public ?string $internalServerError = null;
    
    /**
     * **Locked**\
     * 
     * \
     * When you'll get `423 Locked` response:
     * - User Credentials are locked due to more than five consecutive failed login attempts.
     * - A Manager User has locked the User.
     * 
     * @var ?string $locked
     */
	
    public ?string $locked = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `404 Not Found` response:
     * - The provided Application doesn't exist.
     * - User Credential doesn't exist.
     * - The User Role doesn't exist.
     * - The User's Organization or Account doesn't exist.
     * - The User Invitation has not been accepted yet.
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
     * - The Organization or Account the User belongs to is disabled.
     * - Invalid User Credentials are supplied.
     * 
     * 
     * @var ?string $unauthorized
     */
	
    public ?string $unauthorized = null;
    
    /**
     * **Created**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\UserToken $userToken
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\UserToken $userToken = null;
    
	public function __construct()
	{
		$this->badRequestZodError = null;
		$this->contentType = "";
		$this->forbidden = null;
		$this->internalServerError = null;
		$this->locked = null;
		$this->notFound = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->serviceUnavailable = null;
		$this->unauthorized = null;
		$this->userToken = null;
	}
}
