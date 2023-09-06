<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments;

class Authentication 
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
     * Create Application Token
     * 
     * Create a new Application Token for non-human users, like external APIs or User Interfaces to access our API under the session account.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenResponse
     */
	public function createApplicationToken(
        \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/application/{applicationId}/token', \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->applicationToken = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\ApplicationTokenOutput', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestZodError = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\BadRequestZodError', 'json');
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
     * Create User Token
     * 
     * Creates a User Token that can be used to authorize calls to other API endpoints in our application.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenResponse
     */
	public function createUserToken(
        \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/token');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->userToken = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\UserTokenOutput', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestZodError = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\BadRequestZodError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->forbidden = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 423) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->locked = $httpResponse->getBody()->getContents();
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
     * Delete Application Token
     * 
     * Delete a specific Application Token by the given Application Identifier under the session account.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenResponse
     */
	public function deleteApplicationToken(
        ?\TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/application/{applicationId}/token/{tokenId}', \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
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
     * Query Application Tokens
     * 
     * Query Application Tokens for non-human users, like external APIs or User Interfaces to access our API under the session account.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenResponse
     */
	public function queryApplicationToken(
        ?\TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/application/{applicationId}/token', \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->applicationTokenResponses = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\ApplicationTokenResponse>', 'json');
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
}