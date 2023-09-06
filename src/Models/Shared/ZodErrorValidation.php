<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** String-specific format validator failed. It is only retrieved when `code = invalid_string`. */
enum ZodErrorValidation: string
{
    case Url = 'url';
    case Email = 'email';
    case Uuid = 'uuid';
}