<?php
namespace App\Controllers;

/**
 * This class calculate.
 */
class CalculateController
{
    const DIMENSION_COEFFICIENT = 0.001;
    const WEIGHT_COEFFICIENT = 0.001;
    const INSURANCE_COEFFICIENT = 0.005;
    const MIN_PRICE = 300;

    protected $_listProduct;
    function __construct($_listProduct = [])
    {
        $this->_listProduct = $_listProduct;
    }

    /**
     * Get gross price with list product.
     * @return int|mixed|string
     */
    public function getGrossPrice()
    {
        try {
            $result = 0;
            if (!empty($this->_listProduct))
            {
                foreach ($this->_listProduct as $key => $value)
                {
                	$price = $value->getPrice();
                	$width = $value->getWidth();
                	$height = $value->getHeight();
                	$depth = $value->getDepth();
                	$weight = $value->getWeight();

                    $feeByDimension = $this->feeByDimension($width, $height, $depth, CalculateController::DIMENSION_COEFFICIENT);
                    $feeByWeight = $this->feeByWeight($weight, CalculateController::WEIGHT_COEFFICIENT);
                    $shippingFee = $this->shippingFee($feeByDimension, $feeByWeight);
                    $insuranceFree = $this->feeByInsurance($price, CalculateController::MIN_PRICE, CalculateController::INSURANCE_COEFFICIENT);
                    $result += $this->itemPrice($price, $shippingFee, $insuranceFree);
                }
            }
            return $result;
        }
        catch(\Exception $e) {
            return 'Có lỗi xảy ra vui lòng thử lại.';
        }
    }


    /**
     * Calculate price item.
     * @param $price
     * @param $shippingFee
     * @param $insuranceFree
     * @return mixed
     */
    public function itemPrice($price, $shippingFee, $insuranceFree)
    {
        return $price + $shippingFee + $insuranceFree;
    }

    /**
     * Get max shipping fee.
     * @param $feeByDimension
     * @param $feeByWeight
     * @return mixed
     */
    public function shippingFee($feeByDimension, $feeByWeight)
    {
        return MAX($feeByDimension, $feeByWeight);
    }


    /**
     * Get fee by dimension.
     * @param $width
     * @param $height
     * @param $depth
     * @param $dimensionCoefficient
     * @return float|int
     */
    public function feeByDimension($width, $height, $depth, $dimensionCoefficient)
    {
        return $width * $height * $depth * $dimensionCoefficient;
    }


    /**
     * Get fee by weight.
     * @param $weight
     * @param $weightCoefficient
     * @return float|int
     */
    public function feeByWeight($weight, $weightCoefficient)
    {
        return $weight * $weightCoefficient;
    }


    /**
     * Get fee by insurance.
     * @param $price
     * @param $minPrice
     * @param $insuranceCoefficient
     * @return float|int
     */
    public function feeByInsurance($price, $minPrice, $insuranceCoefficient)
    {
    	if ($price >= $minPrice)
    	{
    		return $price * $insuranceCoefficient;
    	}
    	return 0;
    }
}