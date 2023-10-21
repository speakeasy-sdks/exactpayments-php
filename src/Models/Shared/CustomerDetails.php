<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * CustomerDetails - Optional billing details for the customer. If you have enabled AVS filters on your terminal, this becomes mandatory and AVS checks will be performed on the address.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class CustomerDetails
{
    /**
     * The customer's billing address. Will be used for AVS checks so postal/zip code is the minimum data required.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BillingAddress $address
     */
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\BillingAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BillingAddress $address = null;
    
    /**
     * Email of the customer.
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * Name of the customer.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Phone number of the customer.
     * 
     * @var ?string $phone
     */
	#[\JMS\Serializer\Annotation\SerializedName('phone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phone = null;
    
    /**
     * H = Home, W = Work, D = Day, N = Night. Phone type is required when a phone number is supplied.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\CustomerDetailsPhoneType $phoneType
     */
	#[\JMS\Serializer\Annotation\SerializedName('phoneType')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\CustomerDetailsPhoneType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CustomerDetailsPhoneType $phoneType = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->email = null;
		$this->name = null;
		$this->phone = null;
		$this->phoneType = null;
	}
}
