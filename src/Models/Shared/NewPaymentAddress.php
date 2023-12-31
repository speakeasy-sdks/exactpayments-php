<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * NewPaymentAddress - The customer's billing address. Will be used for AVS checks so postal/zip code is the minimum data required.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class NewPaymentAddress
{
    /**
     * City name.
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
     * Line1 of the address.
     * 
     * @var ?string $line1
     */
	#[\JMS\Serializer\Annotation\SerializedName('line1')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $line1 = null;
    
    /**
     * line2 of the address.
     * 
     * @var ?string $line2
     */
	#[\JMS\Serializer\Annotation\SerializedName('line2')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $line2 = null;
    
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
     * The two-digit country subdivision code where the customer is located. Refer to the two-digit country subdivision code defined in ISO 3166-2 for the countries listed in ISO 3166-1.
     * 
     * @var ?string $state
     */
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $state = null;
    
	public function __construct()
	{
		$this->city = null;
		$this->countryCode = null;
		$this->line1 = null;
		$this->line2 = null;
		$this->postalCode = null;
		$this->state = null;
	}
}
