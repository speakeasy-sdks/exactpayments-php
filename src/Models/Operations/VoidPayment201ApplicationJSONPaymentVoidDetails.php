<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * VoidPayment201ApplicationJSONPaymentVoidDetails - The Payment identifiers of any void transactions.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class VoidPayment201ApplicationJSONPaymentVoidDetails
{
    /**
     * Void details of the Payment.
     * 
     * @var ?array<string> $voids
     */
	#[\JMS\Serializer\Annotation\SerializedName('voids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $voids = null;
    
	public function __construct()
	{
		$this->voids = null;
	}
}
