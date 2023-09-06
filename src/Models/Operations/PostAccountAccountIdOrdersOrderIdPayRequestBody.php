<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PostAccountAccountIdOrdersOrderIdPayRequestBody
{
    /**
     * Payment Method of the Order.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequestBodyPaymentMethod $paymentMethod
     */
	#[\JMS\Serializer\Annotation\SerializedName('paymentMethod')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequestBodyPaymentMethod')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostAccountAccountIdOrdersOrderIdPayRequestBodyPaymentMethod $paymentMethod = null;
    
	public function __construct()
	{
		$this->paymentMethod = null;
	}
}
