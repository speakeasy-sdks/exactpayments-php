<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * RefundPayment201ApplicationJSONPaymentBankResponse - It shows bank response details.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class RefundPayment201ApplicationJSONPaymentBankResponse
{
    /**
     * Code of the bank response.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
    /**
     * Message of the bank response.
     * 
     * @var ?string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	public function __construct()
	{
		$this->code = null;
		$this->message = null;
	}
}
