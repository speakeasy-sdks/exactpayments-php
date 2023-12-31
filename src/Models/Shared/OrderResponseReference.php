<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * OrderResponseReference - Merchant defined values which can be used to internally identify the transaction.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class OrderResponseReference
{
    /**
     * A merchant defined value that can be used to reverse a transaction which times out without returning a payment identifier.
     * 
     * @var ?string $correlationId
     */
	#[\JMS\Serializer\Annotation\SerializedName('correlationId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $correlationId = null;
    
    /**
     * Identification number of customer.
     * 
     * @var ?string $customerRef
     */
	#[\JMS\Serializer\Annotation\SerializedName('customerRef')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerRef = null;
    
    /**
     * Reference3 number for the Order.
     * 
     * @var ?string $reference3
     */
	#[\JMS\Serializer\Annotation\SerializedName('reference3')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reference3 = null;
    
    /**
     * Reference number for the Order.
     * 
     * @var ?string $referenceNo
     */
	#[\JMS\Serializer\Annotation\SerializedName('referenceNo')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $referenceNo = null;
    
	public function __construct()
	{
		$this->correlationId = null;
		$this->customerRef = null;
		$this->reference3 = null;
		$this->referenceNo = null;
	}
}
