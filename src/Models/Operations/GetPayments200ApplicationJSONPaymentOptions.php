<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class GetPayments200ApplicationJSONPaymentOptions
{
    /**
     * It shows the type of the transfer.
     * 
     * @var ?string $aftTransferType
     */
	#[\JMS\Serializer\Annotation\SerializedName('aftTransferType')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $aftTransferType = null;
    
    /**
     * It shows the customer IP.
     * 
     * @var ?string $customerIp
     */
	#[\JMS\Serializer\Annotation\SerializedName('customerIp')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerIp = null;
    
    /**
     * Used to classify the style of transaction being performed. 2 = Recurring, 3 = Installment.
     * 
     * @var ?string $ecommerceFlag
     */
	#[\JMS\Serializer\Annotation\SerializedName('ecommerceFlag')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ecommerceFlag = null;
    
    /**
     * It shows fraud suspected value as string.
     * 
     * @var ?string $fraudSuspected
     */
	#[\JMS\Serializer\Annotation\SerializedName('fraudSuspected')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $fraudSuspected = null;
    
    /**
     * It shows the installment number.
     * 
     * @var ?string $installmentNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('installmentNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $installmentNumber = null;
    
    /**
     * It shows order tracking number.
     * 
     * @var ?string $orderTrackingNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('orderTrackingNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $orderTrackingNumber = null;
    
    /**
     * It shows the par value.
     * 
     * @var ?string $par
     */
	#[\JMS\Serializer\Annotation\SerializedName('par')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $par = null;
    
    /**
     * It shows any special payment involved.
     * 
     * @var ?string $specialPayment
     */
	#[\JMS\Serializer\Annotation\SerializedName('specialPayment')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $specialPayment = null;
    
    /**
     * It shows the split shipment number.
     * 
     * @var ?string $splitShipmentNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('splitShipmentNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $splitShipmentNumber = null;
    
    /**
     * It shows the third party identifier.
     * 
     * @var ?string $thirdPartyId
     */
	#[\JMS\Serializer\Annotation\SerializedName('thirdPartyId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $thirdPartyId = null;
    
	public function __construct()
	{
		$this->aftTransferType = null;
		$this->customerIp = null;
		$this->ecommerceFlag = null;
		$this->fraudSuspected = null;
		$this->installmentNumber = null;
		$this->orderTrackingNumber = null;
		$this->par = null;
		$this->specialPayment = null;
		$this->splitShipmentNumber = null;
		$this->thirdPartyId = null;
	}
}
