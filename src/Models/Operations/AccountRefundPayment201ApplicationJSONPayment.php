<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountRefundPayment201ApplicationJSONPayment
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
     * Payment approved or not.
     * 
     * @var ?bool $approved
     */
	#[\JMS\Serializer\Annotation\SerializedName('approved')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $approved = null;
    
    /**
     * Authorization Identification of the Payment.
     * 
     * @var ?string $authorization
     */
	#[\JMS\Serializer\Annotation\SerializedName('authorization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $authorization = null;
    
    /**
     * It shows bank response details.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentBankResponse $bankResponse
     */
	#[\JMS\Serializer\Annotation\SerializedName('bankResponse')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentBankResponse')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment201ApplicationJSONPaymentBankResponse $bankResponse = null;
    
    /**
     * The Payment identifiers of any capture transactions.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentCaptureDetails $captureDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('captureDetails')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentCaptureDetails')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment201ApplicationJSONPaymentCaptureDetails $captureDetails = null;
    
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
     * Date and time when the Payment is created.
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
     * It shows the exact response details
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentExactResponse $exactResponse
     */
	#[\JMS\Serializer\Annotation\SerializedName('exactResponse')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentExactResponse')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment201ApplicationJSONPaymentExactResponse $exactResponse = null;
    
    /**
     * It shows the merchant details.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentMerchant $merchant
     */
	#[\JMS\Serializer\Annotation\SerializedName('merchant')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentMerchant')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment201ApplicationJSONPaymentMerchant $merchant = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment201ApplicationJSONPaymentOptions $options = null;
    
    /**
     * Payment identifier.
     * 
     * @var ?string $paymentId
     */
	#[\JMS\Serializer\Annotation\SerializedName('paymentId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $paymentId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('paymentMethodDetails')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $paymentMethodDetails = null;
    
    /**
     * Receipt of the Payment.
     * 
     * @var ?string $receipt
     */
	#[\JMS\Serializer\Annotation\SerializedName('receipt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $receipt = null;
    
    /**
     * The Payment identifiers of any refund transactions.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentRefundDetails $refundDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('refundDetails')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentRefundDetails')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment201ApplicationJSONPaymentRefundDetails $refundDetails = null;
    
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
     * It shows `true` or `false` based on the status of bank response.
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
     * It shows the surchargeAmount for the Payment.
     * 
     * @var ?float $surchargeAmount
     */
	#[\JMS\Serializer\Annotation\SerializedName('surchargeAmount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $surchargeAmount = null;
    
    /**
     * The Payment identifiers of any void transactions.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentVoidDetails $voidDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('voidDetails')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPayment201ApplicationJSONPaymentVoidDetails')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountRefundPayment201ApplicationJSONPaymentVoidDetails $voidDetails = null;
    
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
		$this->amount = null;
		$this->approved = null;
		$this->authorization = null;
		$this->bankResponse = null;
		$this->captureDetails = null;
		$this->captured = null;
		$this->createdAt = null;
		$this->currencyCode = null;
		$this->exactResponse = null;
		$this->merchant = null;
		$this->options = null;
		$this->paymentId = null;
		$this->paymentMethodDetails = null;
		$this->receipt = null;
		$this->refundDetails = null;
		$this->refunded = null;
		$this->sentToBank = null;
		$this->settled = null;
		$this->settledAt = null;
		$this->surchargeAmount = null;
		$this->voidDetails = null;
		$this->voided = null;
	}
}
