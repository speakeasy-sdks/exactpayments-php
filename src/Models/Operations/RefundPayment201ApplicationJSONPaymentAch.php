<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class RefundPayment201ApplicationJSONPaymentAch
{
    /**
     * Some description about ACH clearing.
     * 
     * @var ?string $clearing
     */
	#[\JMS\Serializer\Annotation\SerializedName('clearing')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $clearing = null;
    
	public function __construct()
	{
		$this->clearing = null;
	}
}
