<?php
namespace Tests\Controllers;
use PHPUnit\Framework\TestCase;
use App\Controllers\CalculateController;
use App\Models\Product;

class CalculateControllerTest extends TestCase
{
    /**
     * Test calculate get gross price.
     */
    public function testGetGrossPrice()
    {
        $calculate = new CalculateController([
            new Product(1100, 2000, 0, 0, 0),
            new Product(10.99, 100, 9, 9, 17)
        ]);
        $this->assertEquals(1119.867, $calculate->getGrossPrice());
    }


    /**
     * Test calculate get item price.
     */
    public function testItemPrice()
    {
        $calculate = new CalculateController();
        $this->assertEquals(110, $calculate->itemPrice(100, 10, 0));
    }

    /**
     * Test calculate get shipping fee price.
     */
    public function testShippingFee()
    {
        $calculate = new CalculateController();
        $this->assertEquals(100, $calculate->shippingFee(100, 10));
    }

    /**
     * Test calculate get fee by dimension price.
     */
    public function testFeeByDimension()
    {
        $calculate = new CalculateController();
        $this->assertEquals(9, $calculate->feeByDimension(100, 9, 10, 0.001));
    }

    /**
     * Test calculate get fee by weight price.
     */
    public function testFeeByWeight()
    {
        $calculate = new CalculateController();
        $this->assertEquals(2, $calculate->feeByWeight(2000, 0.001));
    }

    /**
     * Test calculate get fee by insurance price.
     */
    public function testFeeByInsurance()
    {
        $calculate = new CalculateController();
        $this->assertEquals(5, $calculate->feeByInsurance(1000, 500, 0.005));
    }
}