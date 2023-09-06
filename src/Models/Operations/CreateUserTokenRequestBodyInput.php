<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class CreateUserTokenRequestBodyInput
{
	#[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $account = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('accountType')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequestBodyAccountType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateUserTokenRequestBodyAccountType $accountType = null;
    
    /**
     * Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value or leave it empty if you aren't assigned any Application ID. It can be specified in the header or in the body. If you're building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID.
     * 
     * @var ?string $application
     */
	#[\JMS\Serializer\Annotation\SerializedName('application')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $application = null;
    
    /**
     * User's email.
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    /**
     * Use the `live` value to perform actual transactions. Use the `test` value to perform mocked transactions. The `live` value is available only for live accounts.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\AccountMode $mode
     */
	#[\JMS\Serializer\Annotation\SerializedName('mode')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\AccountMode>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\TheLogicStudio\ExactPayments\Models\Shared\AccountMode $mode = null;
    
    /**
     * User's password.
     * 
     * @var string $password
     */
	#[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $password;
    
	#[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->account = null;
		$this->accountType = null;
		$this->application = null;
		$this->email = "";
		$this->mode = null;
		$this->password = "";
		$this->user = null;
	}
}