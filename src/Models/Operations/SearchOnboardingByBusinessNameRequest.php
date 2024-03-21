<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class SearchOnboardingByBusinessNameRequest
{
    /**
     * The text to match with the Business Name of the Organization or Account.
     * 
     * @var string $businessName
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=businessName')]
    public string $businessName;
    
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
    
    /**
     * Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.
     * 
     * @var ?string $dollarSort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=$sort')]
    public ?string $dollarSort = null;
    
	public function __construct()
	{
		$this->businessName = "";
		$this->dollarSkip = null;
		$this->dollarLimit = null;
		$this->dollarSort = null;
	}
}
