<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class ReferencedPayment
{
    /**
     * Amount in smallest currency unit, for example, cents, including all
     * 
     *  surcharges, taxes etc.
     * 
     * @var int $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $amount;
    
    /**
     * Authorization code given in the payment response, required for card transaction captures.
     * 
     * @var ?string $authorization
     */
	#[\JMS\Serializer\Annotation\SerializedName('authorization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $authorization = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\ReferencedPaymentOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ReferencedPaymentOptions $options = null;
    
    /**
     * Merchant defined values which can be used to internally identify the transaction.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\ReferencedPaymentReference $reference
     */
	#[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\ReferencedPaymentReference')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ReferencedPaymentReference $reference = null;
    
    /**
     * Override business information which would normally appear on a customer's statement, making it easier for customers to identify transactions.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\ReferencedPaymentSoftDescriptor $softDescriptor
     */
	#[\JMS\Serializer\Annotation\SerializedName('softDescriptor')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\ReferencedPaymentSoftDescriptor')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ReferencedPaymentSoftDescriptor $softDescriptor = null;
    
	public function __construct()
	{
		$this->amount = 0;
		$this->authorization = null;
		$this->options = null;
		$this->reference = null;
		$this->softDescriptor = null;
	}
}
