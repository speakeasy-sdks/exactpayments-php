<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments;

class AccountManagement 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Register Domain for Apple Pay
     * 
     * This endpoint allows you to register one or more of your domains for use with Apple Pay &amp; ExactJS.
     * 
     * Please [read our guide](./docs/ExactJS-ApplePay) on the setup steps required before you can use this endpoint.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsResponse
     */
	public function accountRegisterApplePayDomains(
        \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/account/{accountId}/apple-pay', \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "applePayDomains", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->applePayDomains = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\ApplePayDomains', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountRegisterApplePayDomains400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomains400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List Accounts
     * 
     * Retrieve a list of accounts underneath an organization.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountResponse
     */
	public function getOrganizationOrganizationIdAccount(
        ?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/account', \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountResponses = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\AccountResponse>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404) {
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Query Accounts
     * 
     * Retrieve a segmented list of merchant accounts under a parent organization that meet the filtered criteria requirements.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchResponse
     */
	public function getOrganizationOrganizationIdAccountSearch(
        ?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/account/search', \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountResponses = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\AccountResponse>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404) {
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Retrieve Account by ID
     * 
     * Retrieve a list of properties associated with a specific merchant account by ID.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdResponse
     */
	public function getOrganizationOrganizationIdAccountAccountId(
        ?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/account/{accountId}', \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\AccountResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404) {
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List Apple Pay Domains
     * 
     * This endpoint allows you to retrieve a list of your domains which are registered for Apple Pay &amp; ExactJS.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsResponse
     */
	public function listApplePayDomains(
        ?\TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/account/{accountId}/apple-pay', \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->applePayDomains = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\ApplePayDomains', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Update Account by ID
     * 
     * Update a specific merchant account by ID.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdResponse
     */
	public function putOrganizationOrganizationIdAccountAccountId(
        \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/account/{accountId}', \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "accountRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204 or $httpResponse->getStatusCode() === 304 or $httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 404) {
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
}