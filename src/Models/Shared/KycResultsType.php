<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** The type of Rule executed or being executed. */
enum KycResultsType: string
{
    case BusinessInformation = 'Business Information';
    case MastercardMatch = 'Mastercard Match';
    case Ofac = 'OFAC';
    case PlaidAuth = 'Plaid Auth';
    case PlaidBalance = 'Plaid Balance';
    case PlaidIdentity = 'Plaid Identity';
    case TruliooKYB = 'Trulioo KYB';
    case TruliooKYC = 'Trulioo KYC';
    case TruliooInternationalWatchlist = 'Trulioo International Watchlist';
}
