<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountGetListWebhooksResponse
{
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?string $internalServerError
     */
	
    public ?string $internalServerError = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * The webhooks list.
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\WebhookResponse> $webhookResponses
     */
	
    public ?array $webhookResponses = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->internalServerError = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->webhookResponses = null;
	}
}
