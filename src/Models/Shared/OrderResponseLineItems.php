<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class OrderResponseLineItems
{
    /**
     * Identification number for the Purchase.
     * 
     * @var ?string $commodityCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('commodityCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $commodityCode = null;
    
    /**
     * Description for line item.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * The smallest currency units, for example, cents in USD.
     * 
     * @var ?int $discountAmount
     */
	#[\JMS\Serializer\Annotation\SerializedName('discountAmount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $discountAmount = null;
    
    /**
     * discountIndicator value will be true or false.
     * 
     * @var ?bool $discountIndicator
     */
	#[\JMS\Serializer\Annotation\SerializedName('discountIndicator')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $discountIndicator = null;
    
    /**
     * grossNetIndicator value will be true or false.
     * 
     * @var ?bool $grossNetIndicator
     */
	#[\JMS\Serializer\Annotation\SerializedName('grossNetIndicator')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $grossNetIndicator = null;
    
    /**
     * The smallest currency units, for example, cents in USD.
     * 
     * @var ?int $lineItemTotal
     */
	#[\JMS\Serializer\Annotation\SerializedName('lineItemTotal')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $lineItemTotal = null;
    
    /**
     * Code of the product.
     * 
     * @var ?string $productCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('productCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $productCode = null;
    
    /**
     * If present, must be greater than zero.
     * 
     * @var ?int $quantity
     */
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $quantity = null;
    
    /**
     * The smallest currency units, for example, cents in USD.
     * 
     * @var ?int $taxAmount
     */
	#[\JMS\Serializer\Annotation\SerializedName('taxAmount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $taxAmount = null;
    
    /**
     * Tax rate of the Order.
     * 
     * @var ?float $taxRate
     */
	#[\JMS\Serializer\Annotation\SerializedName('taxRate')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $taxRate = null;
    
    /**
     * Type of the tax.
     * 
     * @var ?string $taxType
     */
	#[\JMS\Serializer\Annotation\SerializedName('taxType')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $taxType = null;
    
    /**
     * In smallest currency units, eg: cents in USD so 13.25 = 13 and one quarter cents.
     * 
     * @var ?int $unitCost
     */
	#[\JMS\Serializer\Annotation\SerializedName('unitCost')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $unitCost = null;
    
    /**
     * Unit to measure the tax.
     * 
     * @var ?string $unitOfMeasure
     */
	#[\JMS\Serializer\Annotation\SerializedName('unitOfMeasure')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $unitOfMeasure = null;
    
	public function __construct()
	{
		$this->commodityCode = null;
		$this->description = null;
		$this->discountAmount = null;
		$this->discountIndicator = null;
		$this->grossNetIndicator = null;
		$this->lineItemTotal = null;
		$this->productCode = null;
		$this->quantity = null;
		$this->taxAmount = null;
		$this->taxRate = null;
		$this->taxType = null;
		$this->unitCost = null;
		$this->unitOfMeasure = null;
	}
}
