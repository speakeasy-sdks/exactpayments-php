<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class ListMerchantCategoryCodesResponse
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
     * **OK**
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\Mcc> $mccs
     */
	
    public ?array $mccs = null;
    
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
    
	public function __construct()
	{
		$this->contentType = "";
		$this->internalServerError = null;
		$this->mccs = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->serviceUnavailable = null;
	}
}
