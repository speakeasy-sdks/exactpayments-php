<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** Entity type of the Business. */
enum OnboardingMerchantEntityType: string
{
    case Llc = 'LLC';
    case Org = 'Org';
    case SoleProp = 'Sole prop';
    case NonProfit = 'Non - Profit';
    case PublicCorp = 'Public Corp';
}
