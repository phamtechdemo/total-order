<?php
namespace Tests\Models;
use PHPUnit\Framework\TestCase;
use App\Models\Product;


class ProductTest extends TestCase
{
    /**
     * Test set price product.
     */
    public function testSetPriceProduct()
    {
        $product = new Product();
        $value = 10.99;
        $product->setPrice($value);
        $this->assertEquals($value, $product->getPrice());
    }

    /**
     * Test set weight product.
     */
    public function testSetWeightProduct()
    {
        $product = new Product();
        $value = 100;
        $product->setWeight($value);
        $this->assertEquals($value, $product->getWeight());
    }

    /**
     * Test set width product.
     */
    public function testSetWidthProduct()
    {
        $product = new Product();
        $value = 9;
        $product->setWidth($value);
        $this->assertEquals($value, $product->getWidth());
    }

    /**
     * Test set height product.
     */
    public function testSetHeightProduct()
    {
        $product = new Product();
        $value = 9;
        $product->setHeight($value);
        $this->assertEquals($value, $product->getHeight());
    }

    /**
     * Test set depth product.
     */
    public function testSetDepthProduct()
    {
        $product = new Product();
        $value = 17;
        $product->setDepth($value);
        $this->assertEquals($value, $product->getDepth());
    }
}