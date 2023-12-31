<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * MerchantWithoutPrincipalTermsNConditions - Whether the Organization or Account has agreed to the Terms and Conditions. This field will be available in response only when the termsNConditions were sent to exact payments when the Onboarding Application was created.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class MerchantWithoutPrincipalTermsNConditions
{
    /**
     * Indicates when the Onboarding Applicant agreed to [Dwolla's terms and conditions](https://www.dwolla.com/legal/platform-agreement/). This field will not be populated if termsNConditions.dwolla field is not sent when submitting the Onboarding Application
     * 
     * @var ?\DateTime $dwolla
     */
	#[\JMS\Serializer\Annotation\SerializedName('dwolla')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $dwolla = null;
    
    /**
     * Indicates when the Onboarding Applicant agreed to Exact Payment's terms and conditions. This field will not be populated if Exact termsNConditions.exactPayments field is not sent when submitting the Onboarding Application
     * 
     * @var ?\DateTime $exactPayments
     */
	#[\JMS\Serializer\Annotation\SerializedName('exactPayments')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $exactPayments = null;
    
    /**
     * Indicates when the Onboarding Applicant agreed to Exact Payment's notification and communication policies. This field will not be populated if Exact termsNConditions.notifications field is not sent when submitting the Onboarding Application
     * 
     * @var ?\DateTime $notifications
     */
	#[\JMS\Serializer\Annotation\SerializedName('notifications')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $notifications = null;
    
	public function __construct()
	{
		$this->dwolla = null;
		$this->exactPayments = null;
		$this->notifications = null;
	}
}
