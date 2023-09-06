<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class AccountGetListWebhooksSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=Authorization')]
    public string $apiKey;
    
	public function __construct()
	{
		$this->apiKey = "";
	}
}
