<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class AccountPostCreateWebhookRequest
{
    /**
     * Fields that compose a webhook definition inside Exact Payments ecosystem.
     * 
     * @var \TheLogicStudio\ExactPayments\Models\Shared\WebhookRequest $webhookRequest
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \TheLogicStudio\ExactPayments\Models\Shared\WebhookRequest $webhookRequest;
    
    /**
     * The Account identifier. Represents the Merchant that this operation is going to be executed for.
     * 
     * @var string $accountId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountId')]
    public string $accountId;
    
	public function __construct()
	{
		$this->webhookRequest = new \TheLogicStudio\ExactPayments\Models\Shared\WebhookRequest();
		$this->accountId = "";
	}
}