<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * PostAccountAccountIdOrders403ApplicationJSON - **Access Denied**\
 * 
 * Credentials supplied do not grant access to the requested resource.
 * 
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class PostAccountAccountIdOrders403ApplicationJSON
{
    /**
     * Code of the authorization error.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrders403ApplicationJSONCode $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrders403ApplicationJSONCode>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostAccountAccountIdOrders403ApplicationJSONCode $code = null;
    
    /**
     * Message explaining the authorization error.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrders403ApplicationJSONMessage $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrders403ApplicationJSONMessage>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostAccountAccountIdOrders403ApplicationJSONMessage $message = null;
    
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
     * It shows as authorization error.
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
		$this->requestId = null;
		$this->type = null;
	}
}
