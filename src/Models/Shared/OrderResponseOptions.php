<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class OrderResponseOptions
{
    /**
     * IP address of the customer.
     * 
     * @var ?string $customerIp
     */
	#[\JMS\Serializer\Annotation\SerializedName('customerIp')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerIp = null;
    
    /**
     * Used to classify the style of transaction being performed. 2 = Recurring, 3 = Installment.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\OrderResponseEcommerceFlag $ecommerceFlag
     */
	#[\JMS\Serializer\Annotation\SerializedName('ecommerceFlag')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\OrderResponseEcommerceFlag>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderResponseEcommerceFlag $ecommerceFlag = null;
    
    /**
     * Tracking number for the Order.
     * 
     * @var ?string $orderTrackingNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('orderTrackingNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $orderTrackingNumber = null;
    
	public function __construct()
	{
		$this->customerIp = null;
		$this->ecommerceFlag = null;
		$this->orderTrackingNumber = null;
	}
}
