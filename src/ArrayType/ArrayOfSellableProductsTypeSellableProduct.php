<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSellableProductsTypeSellableProduct ArrayType
 * @subpackage Arrays
 */
class ArrayOfSellableProductsTypeSellableProduct extends AbstractStructArrayBase
{
    /**
     * The SellableProduct
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellableProduct[]
     */
    public $SellableProduct;
    /**
     * Constructor method for ArrayOfSellableProductsTypeSellableProduct
     * @uses ArrayOfSellableProductsTypeSellableProduct::setSellableProduct()
     * @param \StructType\SellableProduct[] $sellableProduct
     */
    public function __construct(array $sellableProduct = array())
    {
        $this
            ->setSellableProduct($sellableProduct);
    }
    /**
     * Get SellableProduct value
     * @return \StructType\SellableProduct[]|null
     */
    public function getSellableProduct()
    {
        return $this->SellableProduct;
    }
    /**
     * Set SellableProduct value
     * @throws \InvalidArgumentException
     * @param \StructType\SellableProduct[] $sellableProduct
     * @return \ArrayType\ArrayOfSellableProductsTypeSellableProduct
     */
    public function setSellableProduct(array $sellableProduct = array())
    {
        foreach ($sellableProduct as $arrayOfSellableProductsTypeSellableProductSellableProductItem) {
            // validation for constraint: itemType
            if (!$arrayOfSellableProductsTypeSellableProductSellableProductItem instanceof \StructType\SellableProduct) {
                throw new \InvalidArgumentException(sprintf('The SellableProduct property can only contain items of \StructType\SellableProduct, "%s" given', is_object($arrayOfSellableProductsTypeSellableProductSellableProductItem) ? get_class($arrayOfSellableProductsTypeSellableProductSellableProductItem) : gettype($arrayOfSellableProductsTypeSellableProductSellableProductItem)), __LINE__);
            }
        }
        $this->SellableProduct = $sellableProduct;
        return $this;
    }
    /**
     * Add item to SellableProduct value
     * @throws \InvalidArgumentException
     * @param \StructType\SellableProduct $item
     * @return \ArrayType\ArrayOfSellableProductsTypeSellableProduct
     */
    public function addToSellableProduct(\StructType\SellableProduct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellableProduct) {
            throw new \InvalidArgumentException(sprintf('The SellableProduct property can only contain items of \StructType\SellableProduct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SellableProduct[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SellableProduct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SellableProduct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SellableProduct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SellableProduct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SellableProduct|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SellableProduct
     */
    public function getAttributeName()
    {
        return 'SellableProduct';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfSellableProductsTypeSellableProduct
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
