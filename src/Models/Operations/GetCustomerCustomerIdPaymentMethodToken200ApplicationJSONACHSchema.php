<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class GetCustomerCustomerIdPaymentMethodToken200ApplicationJSONACHSchema
{
    /**
     * The Customer's provided Bank Account Details.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\AchDetailsSchema $ach
     */
	#[\JMS\Serializer\Annotation\SerializedName('ach')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\AchDetailsSchema')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\TheLogicStudio\ExactPayments\Models\Shared\AchDetailsSchema $ach = null;
    
    /**
     * The Customer's provided Billing Details.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BillingDetailsSchema $billingDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('billingDetails')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\BillingDetailsSchema')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\TheLogicStudio\ExactPayments\Models\Shared\BillingDetailsSchema $billingDetails = null;
    
    /**
     * The date and time when the Payment Method was created.
     * 
     * @var ?\DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * Indicates whether this is the default Payment Method associated with the Customer or not.
     * 
     * @var ?bool $isDefault
     */
	#[\JMS\Serializer\Annotation\SerializedName('isDefault')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isDefault = null;
    
    /**
     * When attached to a customer, a Payment Method can be differentiated by label rather than just its last 4-digits representation. This will allow the customers to identify their Payment Methods easily.
     * 
     * @var ?string $label
     */
	#[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $label = null;
    
    /**
     * This is the token value that can be used for future Payments.
     * 
     * @var ?string $token
     */
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $token = null;
    
    /**
     * Indicates the type of Payment Method stored in Exact Payments Vault, `card` value will be returned for Card Payment Methods.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentMethodToken200ApplicationJSONACHSchemaType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentMethodToken200ApplicationJSONACHSchemaType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetCustomerCustomerIdPaymentMethodToken200ApplicationJSONACHSchemaType $type = null;
    
    /**
     * The date and time when the Payment Method was last updated.
     * 
     * @var ?\DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->ach = null;
		$this->billingDetails = null;
		$this->createdAt = null;
		$this->isDefault = null;
		$this->label = null;
		$this->token = null;
		$this->type = null;
		$this->updatedAt = null;
	}
}