<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * NotFoundError - **Not Found**\
 * 
 * The requested resource can not be found.
 * 
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class NotFoundError
{
    /**
     * Error code that shows what kind of error occur during the execution of the endpoint.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
    /**
     * Contains a detailed message on the actual error.
     * 
     * @var ?string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
    /**
     * UUID that represents the id in Exact Payments system, you can use this when contacting support team to provide more information of an specific failure.
     * 
     * @var ?string $requestId
     */
	#[\JMS\Serializer\Annotation\SerializedName('requestId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $requestId = null;
    
    /**
     * Specifies the type of error that ocurred in the API, this will give you more insight on what failed during the execution of the endpoint.
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
