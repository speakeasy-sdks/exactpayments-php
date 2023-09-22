<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments;

class APIHealthCheck 
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
     * Retrieve Status
     * 
     * A method in which you can check wether or not the Exact Payments service is operational.  Used correctly, this can proactively notify your merchants on the very rare occasion that the Exact Payments service is not operational
     * 
     * @return \TheLogicStudio\ExactPayments\Models\Operations\GetStatusResponse
     */
	public function getStatus(
    ): \TheLogicStudio\ExactPayments\Models\Operations\GetStatusResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/status');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\GetStatusResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getStatus200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Operations\GetStatus200ApplicationJSON', 'json');
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