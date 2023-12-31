<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * OrderResponseSoftDescriptor - Override business information which would normally appear on a customer's statement, making it easier for customers to identify transactions.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class OrderResponseSoftDescriptor
{
    /**
     * City name of the customer.
     * 
     * @var ?string $city
     */
	#[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $city = null;
    
    /**
     * 3-character alphabetical country code according to ISO 3166-1, eg: USA, CAN etc.
     * 
     * @var ?string $countryCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('countryCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $countryCode = null;
    
    /**
     * Name of the customer.
     * 
     * @var ?string $dbaName
     */
	#[\JMS\Serializer\Annotation\SerializedName('dbaName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $dbaName = null;
    
    /**
     * Merchant category code (MCCs) is four-digit numbers that describe a business's primary business activities. Please refer to the endpoint [Merchant Category Codes](https://dev.exactpay.dev/api#/operations/listMerchantCategoryCodes) to get the list of acceptable MCC codes by Exact Payments.
     * 
     * @var ?string $mcc
     */
	#[\JMS\Serializer\Annotation\SerializedName('mcc')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mcc = null;
    
    /**
     * Phone number of the merchant.
     * 
     * @var ?string $merchantContactInfo
     */
	#[\JMS\Serializer\Annotation\SerializedName('merchantContactInfo')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $merchantContactInfo = null;
    
    /**
     * The postal code where the customer is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada.
     * 
     * @var ?string $postalCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('postalCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $postalCode = null;
    
    /**
     * State name of tghe customer.
     * 
     * @var ?string $state
     */
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $state = null;
    
    /**
     * Street name of the customer.
     * 
     * @var ?string $street
     */
	#[\JMS\Serializer\Annotation\SerializedName('street')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $street = null;
    
	public function __construct()
	{
		$this->city = null;
		$this->countryCode = null;
		$this->dbaName = null;
		$this->mcc = null;
		$this->merchantContactInfo = null;
		$this->postalCode = null;
		$this->state = null;
		$this->street = null;
	}
}
