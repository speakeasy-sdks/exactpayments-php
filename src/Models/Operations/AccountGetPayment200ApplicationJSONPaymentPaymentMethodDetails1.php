<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountGetPayment200ApplicationJSONPaymentPaymentMethodDetails1
{
	#[\JMS\Serializer\Annotation\SerializedName('avsCheck')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountGetPayment200ApplicationJSONPaymentPaymentMethodDetails1AvsCheck')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountGetPayment200ApplicationJSONPaymentPaymentMethodDetails1AvsCheck $avsCheck = null;
    
    /**
     * Card brand of the card, for example, visa, master.
     * 
     * @var ?string $cardBrand
     */
	#[\JMS\Serializer\Annotation\SerializedName('cardBrand')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cardBrand = null;
    
    /**
     * Card holder name.
     * 
     * @var ?string $cardholder
     */
	#[\JMS\Serializer\Annotation\SerializedName('cardholder')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cardholder = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('cvdCheck')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountGetPayment200ApplicationJSONPaymentPaymentMethodDetails1CvdCheck')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountGetPayment200ApplicationJSONPaymentPaymentMethodDetails1CvdCheck $cvdCheck = null;
    
    /**
     * Expiration month for the card.
     * 
     * @var ?string $expiryMonth
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryMonth')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $expiryMonth = null;
    
    /**
     * Expiration year for the card.
     * 
     * @var ?string $expiryYear
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryYear')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $expiryYear = null;
    
    /**
     * Last 4 digits of the card.
     * 
     * @var ?string $last4
     */
	#[\JMS\Serializer\Annotation\SerializedName('last4')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $last4 = null;
    
	public function __construct()
	{
		$this->avsCheck = null;
		$this->cardBrand = null;
		$this->cardholder = null;
		$this->cvdCheck = null;
		$this->expiryMonth = null;
		$this->expiryYear = null;
		$this->last4 = null;
	}
}
