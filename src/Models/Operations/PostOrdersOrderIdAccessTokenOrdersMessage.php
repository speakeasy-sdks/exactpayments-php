<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/** Message explaining the error. */
enum PostOrdersOrderIdAccessTokenOrdersMessage: string
{
    case FailedToGetOrderDetails = 'Failed to get order details.';
    case FailedToCreateAnAccessToken = 'Failed to create an access token.';
}