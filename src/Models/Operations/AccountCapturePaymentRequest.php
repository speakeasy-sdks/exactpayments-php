<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class AccountCapturePaymentRequest
{
    /**
     * The Account identifier. Represents the Merchant that this operation is going to be executed for.
     * 
     * @var string $accountId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountId')]
    public string $accountId;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=paymentId')]
    public string $paymentId;
    
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\TheLogicStudio\ExactPayments\Models\Shared\ReferencedPayment $referencedPayment = null;
    
	public function __construct()
	{
		$this->accountId = "";
		$this->paymentId = "";
		$this->referencedPayment = null;
	}
}
