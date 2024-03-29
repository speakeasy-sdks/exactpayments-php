<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** Type of the validation error. */
enum Type: string
{
    case ApiError = 'api-error';
    case InvalidRequestError = 'invalid-request-error';
}
