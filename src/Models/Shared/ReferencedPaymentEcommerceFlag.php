<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** Used to classify the style of transaction being performed. 2 = Recurring, 3 = Installment. */
enum ReferencedPaymentEcommerceFlag: string
{
    case One = '1';
    case Two = '2';
    case Three = '3';
    case Four = '4';
    case Five = '5';
    case Six = '6';
    case Seven = '7';
    case Eight = '8';
    case R = 'R';
    case I = 'I';
    case X = 'X';
}
