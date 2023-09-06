<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class AccountReportDetailsMerchantAnticipatedTransAmounts
{
	#[\JMS\Serializer\Annotation\SerializedName('anticipatedMonthlyVolume')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $anticipatedMonthlyVolume = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('averageTicketSize')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $averageTicketSize = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('maxTicketSize')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $maxTicketSize = null;
    
	public function __construct()
	{
		$this->anticipatedMonthlyVolume = null;
		$this->averageTicketSize = null;
		$this->maxTicketSize = null;
	}
}