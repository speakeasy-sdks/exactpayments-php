<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments;

/**
 * ExactPayments - Embedded Payments: Embedding payments into your software platform can be one of the most powerful value drivers for your customers and your top line. Imagine your software delivering the entire order-to-cash cycle including funding right into the customer’s bank account. We provide low code integration- With just a single API, you can go live with Exact Payments. Onboard customers, automated underwriting, receive webhook notifications when your customers is live and ready to take payments. We have all the payment types your customers want and their buyers need. Credit and debit cards plus ACH payments, Apple Pay, Google Pay, Paypal, recurring payments, card-on-file and more. Dive into our API Reference and add embedded payments with Exact today!
 * 
 * @package TheLogicStudio\ExactPayments
 * @access public
 */
class ExactPayments
{
	public const SERVERS = [
        /** Exact Payments Sandbox */
		'https://api.exactpaysandbox.com',
        /** Exact Payments API */
		'https://api-p2.exactpay.com',
	];
  	
	public APIHealthCheck $apiHealthCheck;
	
	public AccountManagement $accountManagement;
	
	public AdminTools $adminTools;
	
	public Authentication $authentication;
	
    /**
     * Store customer details.
     * 
     * @var Customers $$customers
     */
	public Customers $customers;
	
	public DocumentManagement $documentManagement;
	
	public MerchantOnboarding $merchantOnboarding;
	
    /**
     * Handle payments from your payment form with Exact.JS
     * 
     * @var Orders $$orders
     */
	public Orders $orders;
	
    /**
     * Tokenize payment details and manage those payment methods.
     * 
     * @var PaymentMethods $$paymentMethods
     */
	public PaymentMethods $paymentMethods;
	
    /**
     * Authorize payments and capture funds.
     * 
     * @var Payments $$payments
     */
	public Payments $payments;
	
	public Reporting $reporting;
	
	public UnderwritingWorkflow $underwritingWorkflow;
	
	public Webhooks $webhooks;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return ExactPaymentsBuilder
	 */
	public static function builder(): ExactPaymentsBuilder
	{
		return new ExactPaymentsBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->apiHealthCheck = new APIHealthCheck($this->sdkConfiguration);
		
		$this->accountManagement = new AccountManagement($this->sdkConfiguration);
		
		$this->adminTools = new AdminTools($this->sdkConfiguration);
		
		$this->authentication = new Authentication($this->sdkConfiguration);
		
		$this->customers = new Customers($this->sdkConfiguration);
		
		$this->documentManagement = new DocumentManagement($this->sdkConfiguration);
		
		$this->merchantOnboarding = new MerchantOnboarding($this->sdkConfiguration);
		
		$this->orders = new Orders($this->sdkConfiguration);
		
		$this->paymentMethods = new PaymentMethods($this->sdkConfiguration);
		
		$this->payments = new Payments($this->sdkConfiguration);
		
		$this->reporting = new Reporting($this->sdkConfiguration);
		
		$this->underwritingWorkflow = new UnderwritingWorkflow($this->sdkConfiguration);
		
		$this->webhooks = new Webhooks($this->sdkConfiguration);
	}
}