<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class QueryApplicationTokenRequest
{
    /**
     * The maximum number of items to retrieve within the current page of results.
     * 
     * @var ?int $dollarLimit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=$limit')]
    public ?int $dollarLimit = null;
    
    /**
     * The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
     * 
     * @var ?int $dollarSkip
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=$skip')]
    public ?int $dollarSkip = null;
    
    /**
     * Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.
     * 
     * @var ?string $dollarSort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=$sort')]
    public ?string $dollarSort = null;
    
    /**
     * Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value if you are not assigned any Application ID. If you're building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID.
     * 
     * @var string $applicationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=applicationId')]
    public string $applicationId;
    
	public function __construct()
	{
		$this->dollarLimit = null;
		$this->dollarSkip = null;
		$this->dollarSort = null;
		$this->applicationId = "";
	}
}
