<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class Metadata
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\Error404MetadataMessage')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Error404MetadataMessage $message = null;
    
	public function __construct()
	{
		$this->message = null;
	}
}
