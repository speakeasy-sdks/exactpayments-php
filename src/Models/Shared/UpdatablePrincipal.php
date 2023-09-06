<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class UpdatablePrincipal
{
    /**
     * A unique identifier assigned to the Principal by the Exact Payments system.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\UpdatableAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdatableAddress $address = null;
    
    /**
     * Number of months the Principal's ownership in the Business.
     * 
     * @var ?float $currentOwnershipMonths
     */
	#[\JMS\Serializer\Annotation\SerializedName('currentOwnershipMonths')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $currentOwnershipMonths = null;
    
    /**
     * Number of years the Principal's ownership in the Business.
     * 
     * @var ?float $currentOwnershipYears
     */
	#[\JMS\Serializer\Annotation\SerializedName('currentOwnershipYears')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $currentOwnershipYears = null;
    
    /**
     * Birth date of the Principal.
     * 
     * @var ?\DateTime $dateOfBirth
     */
	#[\JMS\Serializer\Annotation\SerializedName('dateOfBirth')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $dateOfBirth = null;
    
    /**
     * Principal's Driver's License number.
     * 
     * @var ?string $driversLicense
     */
	#[\JMS\Serializer\Annotation\SerializedName('driversLicense')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $driversLicense = null;
    
    /**
     * Country where the Principal's Driver's License was issued. Valid values are three digit alpha country codes as defined in ISO 3166-1 alpha-3.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\UpdatablePrincipalDriversLicenseCountry $driversLicenseCountry
     */
	#[\JMS\Serializer\Annotation\SerializedName('driversLicenseCountry')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\UpdatablePrincipalDriversLicenseCountry>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdatablePrincipalDriversLicenseCountry $driversLicenseCountry = null;
    
    /**
     * State or Country Subdivision where the Principal's Driver's License was issued. The two-digit country subdivision code values defined in ISO 3166-2 for the countries listed in ISO 3166-1.
     * 
     * @var ?string $driversLicenseState
     */
	#[\JMS\Serializer\Annotation\SerializedName('driversLicenseState')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $driversLicenseState = null;
    
    /**
     * The Principal's email.
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * The First Name of the Principal owner of the Business.
     * 
     * @var ?string $firstName
     */
	#[\JMS\Serializer\Annotation\SerializedName('firstName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $firstName = null;
    
    /**
     * The Last Name of the Principal owner of the Business.
     * 
     * @var ?string $lastName
     */
	#[\JMS\Serializer\Annotation\SerializedName('lastName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastName = null;
    
    /**
     * Nationality of the Principal. Valid values are three-digit alpha country codes as defined in ISO 3166-1 alpha-3.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\UpdatablePrincipalNationality $nationality
     */
	#[\JMS\Serializer\Annotation\SerializedName('nationality')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\UpdatablePrincipalNationality>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdatablePrincipalNationality $nationality = null;
    
    /**
     * Principal's Percent of ownership in the business.
     * 
     * @var ?float $percentOfOwnership
     */
	#[\JMS\Serializer\Annotation\SerializedName('percentOfOwnership')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $percentOfOwnership = null;
    
    /**
     * Social Security Number (US) or Social Insurance Number (CAN).
     * 
     * @var ?string $ssn
     */
	#[\JMS\Serializer\Annotation\SerializedName('ssn')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ssn = null;
    
    /**
     * Country where the Principal's SSN(USA) or SIN(CAN) was issued. Valid values are three-digit alpha country codes as defined in ISO 3166-1 alpha-3.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\UpdatablePrincipalSsnCountry $ssnCountry
     */
	#[\JMS\Serializer\Annotation\SerializedName('ssnCountry')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\UpdatablePrincipalSsnCountry>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdatablePrincipalSsnCountry $ssnCountry = null;
    
    /**
     * State or Country Subdivision where the Principal's SSN(USA) or SIN(CAN) was issued. The two-digit country subdivision code values defined in ISO 3166-2 for the countries listed in ISO 3166-1.
     * 
     * @var ?string $ssnCountrySubdivision
     */
	#[\JMS\Serializer\Annotation\SerializedName('ssnCountrySubdivision')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ssnCountrySubdivision = null;
    
    /**
     * Principal's telephone number.
     * 
     * @var ?string $telephone
     */
	#[\JMS\Serializer\Annotation\SerializedName('telephone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $telephone = null;
    
    /**
     * The position or title held by the Principal owner or the Authorized Person of the Organization.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\TitleValues $title
     */
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\TitleValues>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TitleValues $title = null;
    
	public function __construct()
	{
		$this->id = null;
		$this->address = null;
		$this->currentOwnershipMonths = null;
		$this->currentOwnershipYears = null;
		$this->dateOfBirth = null;
		$this->driversLicense = null;
		$this->driversLicenseCountry = null;
		$this->driversLicenseState = null;
		$this->email = null;
		$this->firstName = null;
		$this->lastName = null;
		$this->nationality = null;
		$this->percentOfOwnership = null;
		$this->ssn = null;
		$this->ssnCountry = null;
		$this->ssnCountrySubdivision = null;
		$this->telephone = null;
		$this->title = null;
	}
}