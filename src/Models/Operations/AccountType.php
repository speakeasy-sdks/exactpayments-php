<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/** `organization` for Partner and `account` for Merchant. */
enum AccountType: string
{
    case Organization = 'organization';
    case Account = 'account';
}
