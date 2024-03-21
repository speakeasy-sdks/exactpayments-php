<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class GetOrganizationOrganizationIdOnboardingWorkflowRequest
{
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
    /**
     * Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending.
     * 
     * @var ?string $dollarSort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=$sort')]
    public ?string $dollarSort = null;
    
    /**
     * The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
     * 
     * @var ?int $dollarSkip
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=$skip')]
    public ?int $dollarSkip = null;
    
    /**
     * The maximum number of items to retrieve within the current page of results.
     * 
     * @var ?int $dollarLimit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=$limit')]
    public ?int $dollarLimit = null;
    
	public function __construct()
	{
		$this->organizationId = "";
		$this->dollarSort = null;
		$this->dollarSkip = null;
		$this->dollarLimit = null;
	}
}
