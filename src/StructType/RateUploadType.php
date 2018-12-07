<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateUploadType StructType
 * @subpackage Structs
 */
class RateUploadType extends AbstractStructBase
{
    /**
     * The BaseByGuestAmts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt
     */
    public $BaseByGuestAmts;
    /**
     * The AdditionalGuestAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount
     */
    public $AdditionalGuestAmounts;
    /**
     * The PaymentPolicies
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment
     */
    public $PaymentPolicies;
    /**
     * The MealsIncluded
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MealsIncluded
     */
    public $MealsIncluded;
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The Mon
     * @var bool
     */
    public $Mon;
    /**
     * The Tue
     * @var bool
     */
    public $Tue;
    /**
     * The Weds
     * @var bool
     */
    public $Weds;
    /**
     * The Thur
     * @var bool
     */
    public $Thur;
    /**
     * The Fri
     * @var bool
     */
    public $Fri;
    /**
     * The Sat
     * @var bool
     */
    public $Sat;
    /**
     * The Sun
     * @var bool
     */
    public $Sun;
    /**
     * Constructor method for RateUploadType
     * @uses RateUploadType::setBaseByGuestAmts()
     * @uses RateUploadType::setAdditionalGuestAmounts()
     * @uses RateUploadType::setPaymentPolicies()
     * @uses RateUploadType::setMealsIncluded()
     * @uses RateUploadType::setStart()
     * @uses RateUploadType::setEnd()
     * @uses RateUploadType::setMon()
     * @uses RateUploadType::setTue()
     * @uses RateUploadType::setWeds()
     * @uses RateUploadType::setThur()
     * @uses RateUploadType::setFri()
     * @uses RateUploadType::setSat()
     * @uses RateUploadType::setSun()
     * @param \ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt $baseByGuestAmts
     * @param \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount $additionalGuestAmounts
     * @param \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment $paymentPolicies
     * @param \StructType\MealsIncluded $mealsIncluded
     * @param string $start
     * @param string $end
     * @param bool $mon
     * @param bool $tue
     * @param bool $weds
     * @param bool $thur
     * @param bool $fri
     * @param bool $sat
     * @param bool $sun
     */
    public function __construct(\ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt $baseByGuestAmts = null, \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount $additionalGuestAmounts = null, \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment $paymentPolicies = null, \StructType\MealsIncluded $mealsIncluded = null, $start = null, $end = null, $mon = null, $tue = null, $weds = null, $thur = null, $fri = null, $sat = null, $sun = null)
    {
        $this
            ->setBaseByGuestAmts($baseByGuestAmts)
            ->setAdditionalGuestAmounts($additionalGuestAmounts)
            ->setPaymentPolicies($paymentPolicies)
            ->setMealsIncluded($mealsIncluded)
            ->setStart($start)
            ->setEnd($end)
            ->setMon($mon)
            ->setTue($tue)
            ->setWeds($weds)
            ->setThur($thur)
            ->setFri($fri)
            ->setSat($sat)
            ->setSun($sun);
    }
    /**
     * Get BaseByGuestAmts value
     * @return \ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt|null
     */
    public function getBaseByGuestAmts()
    {
        return $this->BaseByGuestAmts;
    }
    /**
     * Set BaseByGuestAmts value
     * @param \ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt $baseByGuestAmts
     * @return \StructType\RateUploadType
     */
    public function setBaseByGuestAmts(\ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt $baseByGuestAmts = null)
    {
        $this->BaseByGuestAmts = $baseByGuestAmts;
        return $this;
    }
    /**
     * Get AdditionalGuestAmounts value
     * @return \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount|null
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->AdditionalGuestAmounts;
    }
    /**
     * Set AdditionalGuestAmounts value
     * @param \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount $additionalGuestAmounts
     * @return \StructType\RateUploadType
     */
    public function setAdditionalGuestAmounts(\ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount $additionalGuestAmounts = null)
    {
        $this->AdditionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }
    /**
     * Get PaymentPolicies value
     * @return \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment|null
     */
    public function getPaymentPolicies()
    {
        return $this->PaymentPolicies;
    }
    /**
     * Set PaymentPolicies value
     * @param \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment $paymentPolicies
     * @return \StructType\RateUploadType
     */
    public function setPaymentPolicies(\ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment $paymentPolicies = null)
    {
        $this->PaymentPolicies = $paymentPolicies;
        return $this;
    }
    /**
     * Get MealsIncluded value
     * @return \StructType\MealsIncluded|null
     */
    public function getMealsIncluded()
    {
        return $this->MealsIncluded;
    }
    /**
     * Set MealsIncluded value
     * @param \StructType\MealsIncluded $mealsIncluded
     * @return \StructType\RateUploadType
     */
    public function setMealsIncluded(\StructType\MealsIncluded $mealsIncluded = null)
    {
        $this->MealsIncluded = $mealsIncluded;
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \StructType\RateUploadType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \StructType\RateUploadType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get Mon value
     * @return bool|null
     */
    public function getMon()
    {
        return $this->Mon;
    }
    /**
     * Set Mon value
     * @param bool $mon
     * @return \StructType\RateUploadType
     */
    public function setMon($mon = null)
    {
        // validation for constraint: boolean
        if (!is_null($mon) && !is_bool($mon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mon)), __LINE__);
        }
        $this->Mon = $mon;
        return $this;
    }
    /**
     * Get Tue value
     * @return bool|null
     */
    public function getTue()
    {
        return $this->Tue;
    }
    /**
     * Set Tue value
     * @param bool $tue
     * @return \StructType\RateUploadType
     */
    public function setTue($tue = null)
    {
        // validation for constraint: boolean
        if (!is_null($tue) && !is_bool($tue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tue)), __LINE__);
        }
        $this->Tue = $tue;
        return $this;
    }
    /**
     * Get Weds value
     * @return bool|null
     */
    public function getWeds()
    {
        return $this->Weds;
    }
    /**
     * Set Weds value
     * @param bool $weds
     * @return \StructType\RateUploadType
     */
    public function setWeds($weds = null)
    {
        // validation for constraint: boolean
        if (!is_null($weds) && !is_bool($weds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($weds)), __LINE__);
        }
        $this->Weds = $weds;
        return $this;
    }
    /**
     * Get Thur value
     * @return bool|null
     */
    public function getThur()
    {
        return $this->Thur;
    }
    /**
     * Set Thur value
     * @param bool $thur
     * @return \StructType\RateUploadType
     */
    public function setThur($thur = null)
    {
        // validation for constraint: boolean
        if (!is_null($thur) && !is_bool($thur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($thur)), __LINE__);
        }
        $this->Thur = $thur;
        return $this;
    }
    /**
     * Get Fri value
     * @return bool|null
     */
    public function getFri()
    {
        return $this->Fri;
    }
    /**
     * Set Fri value
     * @param bool $fri
     * @return \StructType\RateUploadType
     */
    public function setFri($fri = null)
    {
        // validation for constraint: boolean
        if (!is_null($fri) && !is_bool($fri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fri)), __LINE__);
        }
        $this->Fri = $fri;
        return $this;
    }
    /**
     * Get Sat value
     * @return bool|null
     */
    public function getSat()
    {
        return $this->Sat;
    }
    /**
     * Set Sat value
     * @param bool $sat
     * @return \StructType\RateUploadType
     */
    public function setSat($sat = null)
    {
        // validation for constraint: boolean
        if (!is_null($sat) && !is_bool($sat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sat)), __LINE__);
        }
        $this->Sat = $sat;
        return $this;
    }
    /**
     * Get Sun value
     * @return bool|null
     */
    public function getSun()
    {
        return $this->Sun;
    }
    /**
     * Set Sun value
     * @param bool $sun
     * @return \StructType\RateUploadType
     */
    public function setSun($sun = null)
    {
        // validation for constraint: boolean
        if (!is_null($sun) && !is_bool($sun)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sun)), __LINE__);
        }
        $this->Sun = $sun;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RateUploadType
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
