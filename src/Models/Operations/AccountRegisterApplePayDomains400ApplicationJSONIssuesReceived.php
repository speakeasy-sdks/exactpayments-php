<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/** Field type received. It is only retrieved when `code = invalid_type`. */
enum AccountRegisterApplePayDomains400ApplicationJSONIssuesReceived: string
{
    case String = 'string';
    case Number = 'number';
    case Object = 'object';
    case Boolean = 'boolean';
    case Null = 'null';
    case Undefined = 'undefined';
    case Nan = 'nan';
    case Integer = 'integer';
    case Float = 'float';
    case Date = 'date';
    case Bigint = 'bigint';
    case Map = 'map';
    case Set = 'set';
}
