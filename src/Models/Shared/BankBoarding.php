<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * BankBoarding - Bank boarding details of the Onboarded Account. This field will be available only when the Onboarding enters the Bank Boarding state or has already boarded with the ACH and / or Credit card processors.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class BankBoarding
{
    /**
     * Information about Onboarding details with Dwolla for ACH Payment enablement. Only Accounts are onboarded with Dwolla. Organizations are not onboarded with Dwolla and the status will always be `na` for Organizations.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Dwolla $dwolla
     */
	#[\JMS\Serializer\Annotation\SerializedName('dwolla')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\Dwolla')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Dwolla $dwolla = null;
    
    /**
     * Information about Onboarding details with Elavon for Card Payment processing. Only Accounts are onboarded with Elavon. Organizations are not onboarded with Elavon and the status will always be `na` for Organizations.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\Elavon $elavon
     */
	#[\JMS\Serializer\Annotation\SerializedName('elavon')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\Elavon')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Elavon $elavon = null;
    
	public function __construct()
	{
		$this->dwolla = null;
		$this->elavon = null;
	}
}
