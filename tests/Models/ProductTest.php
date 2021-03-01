<?php
namespace Tests\Models;
use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function testSetPriceProduct()
    {
        $product = new Product();
        $value = 10.99;
        $product->setPrice($value);
        $this->assertEquals($value, $product->getPrice());
    }

    public function testSetWeightProduct()
    {
        $product = new Product();
        $value = 100;
        $product->setWeight($value);
        $this->assertEquals($value, $product->getWeight());
    }

    public function testSetWidthProduct()
    {
        $product = new Product();
        $value = 9;
        $product->setWidth($value);
        $this->assertEquals($value, $product->getWidth());
    }

    public function testSetHeightProduct()
    {
        $product = new Product();
        $value = 9;
        $product->setHeight($value);
        $this->assertEquals($value, $product->getHeight());
    }

    public function testSetDepthProduct()
    {
        $product = new Product();
        $value = 17;
        $product->setDepth($value);
        $this->assertEquals($value, $product->getDepth());
    }
}