<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * AccountGetCustomerCustomerIdPayments200ApplicationJSONPaymentRefundDetails - The Payment identifiers of any refund transactions.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class AccountGetCustomerCustomerIdPayments200ApplicationJSONPaymentRefundDetails
{
    /**
     * Refund details of the Payment.
     * 
     * @var ?array<string> $refunds
     */
	#[\JMS\Serializer\Annotation\SerializedName('refunds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $refunds = null;
    
    /**
     * Remaining amount of the refund details.
     * 
     * @var ?float $remaining
     */
	#[\JMS\Serializer\Annotation\SerializedName('remaining')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $remaining = null;
    
	public function __construct()
	{
		$this->refunds = null;
		$this->remaining = null;
	}
}
