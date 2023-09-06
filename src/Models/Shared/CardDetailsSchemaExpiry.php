<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class CardDetailsSchemaExpiry
{
    /**
     * Card expiry month.
     * 
     * @var ?int $month
     */
	#[\JMS\Serializer\Annotation\SerializedName('month')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $month = null;
    
    /**
     * Card expiry year.
     * 
     * @var ?int $year
     */
	#[\JMS\Serializer\Annotation\SerializedName('year')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $year = null;
    
	public function __construct()
	{
		$this->month = null;
		$this->year = null;
	}
}
