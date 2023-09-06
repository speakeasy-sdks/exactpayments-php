<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountVoidPayment201ApplicationJSONPayment1
{
    /**
     * Account identifier.
     * 
     * @var ?string $accountId
     */
	#[\JMS\Serializer\Annotation\SerializedName('accountId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $accountId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('ach')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPayment201ApplicationJSONPaymentAch')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountVoidPayment201ApplicationJSONPaymentAch $ach = null;
    
    /**
     * It shows the amount for the Payment.
     * 
     * @var ?float $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $amount = null;
    
    /**
     * Indicates if the Payment was approved or not.
     * 
     * @var ?bool $approved
     */
	#[\JMS\Serializer\Annotation\SerializedName('approved')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $approved = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('authorization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $authorization = null;
    
    /**
     * It shows bank response details.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPayment201ApplicationJSONPaymentBankResponse $bankResponse
     */
	#[\JMS\Serializer\Annotation\SerializedName('bankResponse')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPayment201ApplicationJSONPaymentBankResponse')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountVoidPayment201ApplicationJSONPaymentBankResponse $bankResponse = null;
    
    /**
     * Set this to `false` if you only want to authorize the amount. Defaults to `true`.
     * 
     * @var ?bool $captured
     */
	#[\JMS\Serializer\Annotation\SerializedName('captured')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $captured = null;
    
    /**
     * It shows the date and time when it was created.
     * 
     * @var ?string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;
    
    /**
     * It shows the currency code of the country.
     * 
     * @var ?string $currencyCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('currencyCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currencyCode = null;
    
    /**
     * Payment identifier.
     * 
     * @var ?string $paymentId
     */
	#[\JMS\Serializer\Annotation\SerializedName('paymentId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $paymentId = null;
    
    /**
     * Payment refunded value will be `true` or `false`.
     * 
     * @var ?bool $refunded
     */
	#[\JMS\Serializer\Annotation\SerializedName('refunded')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $refunded = null;
    
    /**
     * It shows `true` or `false` based on the status of the bank response.
     * 
     * @var ?bool $sentToBank
     */
	#[\JMS\Serializer\Annotation\SerializedName('sentToBank')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $sentToBank = null;
    
    /**
     * It shows transaction is settled or not.
     * 
     * @var ?bool $settled
     */
	#[\JMS\Serializer\Annotation\SerializedName('settled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $settled = null;
    
    /**
     * It shows the date and time if the transaction is settled.
     * 
     * @var ?string $settledAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('settledAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $settledAt = null;
    
    /**
     * It shows Payment void details if Payment is voided
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPayment201ApplicationJSONPaymentVoidDetails $voidDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('voidDetails')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPayment201ApplicationJSONPaymentVoidDetails')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountVoidPayment201ApplicationJSONPaymentVoidDetails $voidDetails = null;
    
    /**
     * Payment voided value will be `true` or `false`.
     * 
     * @var ?bool $voided
     */
	#[\JMS\Serializer\Annotation\SerializedName('voided')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $voided = null;
    
	public function __construct()
	{
		$this->accountId = null;
		$this->ach = null;
		$this->amount = null;
		$this->approved = null;
		$this->authorization = null;
		$this->bankResponse = null;
		$this->captured = null;
		$this->createdAt = null;
		$this->currencyCode = null;
		$this->paymentId = null;
		$this->refunded = null;
		$this->sentToBank = null;
		$this->settled = null;
		$this->settledAt = null;
		$this->voidDetails = null;
		$this->voided = null;
	}
}
