<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments;

class UnderwritingWorkflow 
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
     * Delete Workflow
     * 
     * Delete a specific Workflow by Organization and Workflow identifiers.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdResponse
     */
	public function deleteWorkflowById(
        ?\TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow/{workflowId}', \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->badRequest = $httpResponse->getBody()->getContents();
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
     * Disable Workflow
     * 
     * Disable a specific Workflow by Organization and Workflow identifiers.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdResponse
     */
	public function disableWorkflowById(
        ?\TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow/{workflowId}/disable', \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204 or $httpResponse->getStatusCode() === 304) {
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
     * Enable Workflow
     * 
     * Enable a specific Workflow by Organization and Workflow identifiers.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdResponse
     */
	public function enableWorkflowById(
        ?\TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow/{workflowId}/enable', \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204 or $httpResponse->getStatusCode() === 304) {
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
     * List Workflows
     * 
     * Retrieve a list of active underwriting workflows associated with your organization.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowResponse
     */
	public function getOrganizationOrganizationIdOnboardingWorkflow(
        ?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow', \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->underwritingWorkflowResponses = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowResponse>', 'json');
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
     * Retrieve Workflow
     * 
     * Retrieve a list of properties associated with a specific workflow ID.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse
     */
	public function getOrganizationOrganizationIdOnboardingWorkflowWorkflowId(
        ?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow/{workflowId}', \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->underwritingWorkflowResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowResponse', 'json');
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
     * Create Workflow
     * 
     * Create a new Underwriting Workflow for the Organization to evaluate Onboarding Applications.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowResponse
     */
	public function postOrganizationOrganizationIdOnboardingWorkflow(
        \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow', \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "underwritingWorkflowRequestCreateWorkflow", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postOrganizationOrganizationIdOnboardingWorkflow201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflow201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->postOrganizationOrganizationIdOnboardingWorkflow400ApplicationJSONOneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
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
     * Update Workflow
     * 
     * Update Underwriting Workflow properties for the given Organization and Workflow identifiers.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse
     */
	public function putOrganizationOrganizationIdOnboardingWorkflowWorkflowId(
        \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow/{workflowId}', \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "underwritingWorkflowRequestUpdateWorkflow", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->putOrganizationOrganizationIdOnboardingWorkflowWorkflowId400ApplicationJSONOneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
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
     * Set Default Workflow
     * 
     * Set a specific Workflow as the default to process the new Onboarding for the given Organization and Workflow identifiers. The current default Workflow will lose the defaulted assignment.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdResponse
     */
	public function setDefaultWorkflowById(
        ?\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding-workflow/{workflowId}/default', \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204 or $httpResponse->getStatusCode() === 304) {
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
}