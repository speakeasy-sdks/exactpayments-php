<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** The certification status of the Beneficial Owner (Principal) with Dwolla. This field will be populated when the Beneficial Owner's certification status is set or updated in Dwolla's system. */
enum DwollaBeneficialOwnershipCertifyStatus: string
{
    case Uncertified = 'uncertified';
    case Certified = 'certified';
    case Rectify = 'rectify';
}
