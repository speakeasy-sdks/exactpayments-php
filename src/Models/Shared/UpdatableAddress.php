<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class UpdatableAddress
{
    /**
     * The name of the city where the business is located.
     * 
     * @var ?string $city
     */
	#[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $city = null;
    
    /**
     * The three-digit country code where the business is located. Refer to the three-digit country code defined in ISO 3166-1 alpha-3.
     * 
     * @var ?string $country
     */
	#[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $country = null;
    
    /**
     * The two digit country subdivision code where the business is located. Refer to the two-digit country subdivision code defined in ISO 3166-2 for the countries listed in ISO 3166-1.
     * 
     * @var ?string $countrySubdivision
     */
	#[\JMS\Serializer\Annotation\SerializedName('countrySubdivision')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $countrySubdivision = null;
    
    /**
     * Street Address (Building number and Street name).
     * 
     * @var ?string $line1
     */
	#[\JMS\Serializer\Annotation\SerializedName('line1')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $line1 = null;
    
    /**
     * Secondary address unit (For example: apartment, suite, room, or floor numbers).
     * 
     * @var ?string $line2
     */
	#[\JMS\Serializer\Annotation\SerializedName('line2')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $line2 = null;
    
    /**
     * The postal code where the business is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada.
     * 
     * @var ?string $postalCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('postalCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $postalCode = null;
    
	public function __construct()
	{
		$this->city = null;
		$this->country = null;
		$this->countrySubdivision = null;
		$this->line1 = null;
		$this->line2 = null;
		$this->postalCode = null;
	}
}
