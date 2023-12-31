<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * Elavon - Information about Onboarding details with Elavon for Card Payment processing. Only Accounts are onboarded with Elavon. Organizations are not onboarded with Elavon and the status will always be `na` for Organizations.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class Elavon
{
    /**
     * The Terminal BIN  received from Elavon for the onboarded Account. This field will be populated when the Account is onboarded with Elavon for card payment processing and Terminal BIN is received from Elavon.
     * 
     * @var ?string $bankNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('bankNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $bankNumber = null;
    
    /**
     * The Onboarding Identifier received from Elavon for the onboarded Account. This field will be populated when the Account is onboarded with Elavon for card payment processing and Boarding Identifier is received from Elavon.
     * 
     * @var ?string $boardingId
     */
	#[\JMS\Serializer\Annotation\SerializedName('boardingId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $boardingId = null;
    
    /**
     * The merchant identifier received from Elavon for the onboarded Account. This field will be populated when the Account is onboarded with Elavon for card payment processing and the merchant identifier is created by Elavon.
     * 
     * @var ?string $mid
     */
	#[\JMS\Serializer\Annotation\SerializedName('mid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mid = null;
    
    /**
     * Status of Onboarding with Elavon when a card payment is enabled for the onboarded Account. When card payment enablement is not needed for the Account or if the onboarded entity is an organization then the status will be updated as `na` (Not Applicable).
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\ElavonStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\ElavonStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ElavonStatus $status = null;
    
    /**
     * The terminal identifier received from Elavon for the onboarded Account. This field will be populated when the Account is onboarded with Elavon for card payment processing and the Terminal Identifier is created by Elavon.
     * 
     * @var ?string $tid
     */
	#[\JMS\Serializer\Annotation\SerializedName('tid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tid = null;
    
	public function __construct()
	{
		$this->bankNumber = null;
		$this->boardingId = null;
		$this->mid = null;
		$this->status = null;
		$this->tid = null;
	}
}
