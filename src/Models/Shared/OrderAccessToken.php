<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class OrderAccessToken
{
	#[\JMS\Serializer\Annotation\SerializedName('accessToken')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\OrderAccessTokenDetail')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderAccessTokenDetail $accessToken = null;
    
	public function __construct()
	{
		$this->accessToken = null;
	}
}
