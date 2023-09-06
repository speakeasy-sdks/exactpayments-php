<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * PostAccountAccountIdOrdersOrderIdPay404ApplicationJSON - **Not found**\
 * 
 * When there are no accounts/orders/payment found
 * 
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class PostAccountAccountIdOrdersOrderIdPay404ApplicationJSON
{
    /**
     * Code of the api error.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
    /**
     * Message explaining the error.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPay404ApplicationJSONMessage $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPay404ApplicationJSONMessage>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostAccountAccountIdOrdersOrderIdPay404ApplicationJSONMessage $message = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPay404ApplicationJSONMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostAccountAccountIdOrdersOrderIdPay404ApplicationJSONMetadata $metadata = null;
    
    /**
     * Request identifier in UUID format.
     * 
     * @var ?string $requestId
     */
	#[\JMS\Serializer\Annotation\SerializedName('requestId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $requestId = null;
    
    /**
     * Type of the external error.
     * 
     * @var ?string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	public function __construct()
	{
		$this->code = null;
		$this->message = null;
		$this->metadata = null;
		$this->requestId = null;
		$this->type = null;
	}
}