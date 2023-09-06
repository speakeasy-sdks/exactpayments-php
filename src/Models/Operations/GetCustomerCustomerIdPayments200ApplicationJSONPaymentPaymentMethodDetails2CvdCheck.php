<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class GetCustomerCustomerIdPayments200ApplicationJSONPaymentPaymentMethodDetails2CvdCheck
{
    /**
     * Code for the CVD check.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
    /**
     * Description about the CVD check.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	public function __construct()
	{
		$this->code = null;
		$this->description = null;
	}
}
