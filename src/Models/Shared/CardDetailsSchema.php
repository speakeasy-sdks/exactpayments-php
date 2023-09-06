<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * CardDetailsSchema - The Customer's provided Card Details.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class CardDetailsSchema
{
    /**
     * The brand name of the credit card. It must be in lowercase.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\CardDetailsSchemaBrand $brand
     */
	#[\JMS\Serializer\Annotation\SerializedName('brand')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\CardDetailsSchemaBrand>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CardDetailsSchemaBrand $brand = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('checks')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\CardDetailsSchemaChecks')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CardDetailsSchemaChecks $checks = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('expiry')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\CardDetailsSchemaExpiry')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CardDetailsSchemaExpiry $expiry = null;
    
    /**
     * The last 4 digits of the supplied credit card.
     * 
     * @var ?string $lastFour
     */
	#[\JMS\Serializer\Annotation\SerializedName('lastFour')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastFour = null;
    
    /**
     * Indicates whether this card token is a `platform token` or a `network token`.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\CardDetailsSchemaTokenType $tokenType
     */
	#[\JMS\Serializer\Annotation\SerializedName('tokenType')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\CardDetailsSchemaTokenType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CardDetailsSchemaTokenType $tokenType = null;
    
	public function __construct()
	{
		$this->brand = null;
		$this->checks = null;
		$this->expiry = null;
		$this->lastFour = null;
		$this->tokenType = null;
	}
}
