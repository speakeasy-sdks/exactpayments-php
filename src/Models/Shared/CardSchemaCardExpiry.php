<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class CardSchemaCardExpiry
{
	#[\JMS\Serializer\Annotation\SerializedName('month')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $month;
    
	#[\JMS\Serializer\Annotation\SerializedName('year')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $year;
    
	public function __construct()
	{
		$this->month = 0;
		$this->year = 0;
	}
}