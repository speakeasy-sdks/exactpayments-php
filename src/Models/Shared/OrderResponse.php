<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class OrderResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('accessToken')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\AccessToken')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccessToken $accessToken = null;
    
    /**
     * Amount in smallest currency unit, eg: cents, including all surcharges, taxes etc.
     * 
     * @var ?int $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $amount = null;
    
    /**
     * Optional billing details for the customer.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Billing $billing
     */
	#[\JMS\Serializer\Annotation\SerializedName('billing')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\Billing')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Billing $billing = null;
    
    /**
     * Set this to false if you only want to authorize for the amount. Defaults to true.
     * 
     * @var ?bool $capture
     */
	#[\JMS\Serializer\Annotation\SerializedName('capture')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $capture = null;
    
    /**
     * This will give some description about the order description.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * Order identifier which is created.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('level3')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\OrderResponseLevel3')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderResponseLevel3 $level3 = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\OrderResponseOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderResponseOptions $options = null;
    
    /**
     * Merchant defined values which can be used to internally identify the transaction.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\OrderResponseReference $reference
     */
	#[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\OrderResponseReference')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderResponseReference $reference = null;
    
    /**
     * Override business information which would normally appear on a customer's statement, making it easier for customers to identify transactions.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\OrderResponseSoftDescriptor $softDescriptor
     */
	#[\JMS\Serializer\Annotation\SerializedName('softDescriptor')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\OrderResponseSoftDescriptor')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderResponseSoftDescriptor $softDescriptor = null;
    
    /**
     * Status of the Order.
     * 
     * @var ?string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
    /**
     * This is assumed to already be included in the amount. (Available for Elavon processing only)
     * 
     * @var ?int $surchargeAmount
     */
	#[\JMS\Serializer\Annotation\SerializedName('surchargeAmount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $surchargeAmount = null;
    
    /**
     * Tax value included in total amount. Sales tax in the US, or PST for Canadian merchants. The smallest currency units, for example, cents in USD. This is assumed to already be included in the amount.
     * 
     * @var ?int $taxAmount
     */
	#[\JMS\Serializer\Annotation\SerializedName('taxAmount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $taxAmount = null;
    
	public function __construct()
	{
		$this->accessToken = null;
		$this->amount = null;
		$this->billing = null;
		$this->capture = null;
		$this->description = null;
		$this->id = null;
		$this->level3 = null;
		$this->options = null;
		$this->reference = null;
		$this->softDescriptor = null;
		$this->status = null;
		$this->surchargeAmount = null;
		$this->taxAmount = null;
	}
}
