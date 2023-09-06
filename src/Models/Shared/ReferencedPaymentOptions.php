<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class ReferencedPaymentOptions
{
    /**
     * IP of the customer.
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
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\ReferencedPaymentOptionsEcommerceFlag $ecommerceFlag
     */
	#[\JMS\Serializer\Annotation\SerializedName('ecommerceFlag')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\ReferencedPaymentOptionsEcommerceFlag>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ReferencedPaymentOptionsEcommerceFlag $ecommerceFlag = null;
    
    /**
     * Receipt generated or not will be shown in `true` or `false`.
     * 
     * @var ?bool $generateReceipt
     */
	#[\JMS\Serializer\Annotation\SerializedName('generateReceipt')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $generateReceipt = null;
    
    /**
     * Number for the installment.
     * 
     * @var ?string $installmentNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('installmentNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $installmentNumber = null;
    
    /**
     * Identification number of the third party.
     * 
     * @var ?string $thirdPartyId
     */
	#[\JMS\Serializer\Annotation\SerializedName('thirdPartyId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $thirdPartyId = null;
    
	public function __construct()
	{
		$this->customerIp = null;
		$this->ecommerceFlag = null;
		$this->generateReceipt = null;
		$this->installmentNumber = null;
		$this->thirdPartyId = null;
	}
}
