<?php
namespace App\Models;

class Product implements ProductInterface
{
    /**
     * @var float $price
     */
    protected $_price;

    /**
     * @var float $weight
     */
    protected $_weight;


    /**
     * @var float $width
     */
    protected $_width;

    /**
     * @var float $height
     */
    protected $_height;

    /**
     * @var float $depth
     */
    protected $_depth;


    /**
     * @param float $_price
     * @param float $_weight
     * @param float $_width
     * @param float $_height
     * @param float $_depth
     */
    function __construct($_price = 0, $_weight = 0, $_width = 0, $_height = 0, $_depth = 0)
    {
        $this->_price = (float) $_price;
        $this->_weight = (float) $_weight;
        $this->_width = (float) $_width;
        $this->_height = (float) $_height;
        $this->_depth = (float) $_depth;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->_price;
    }


    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->_weight;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * @return float
     */
    public function getDepth()
    {
        return $this->_depth;
    }

    /**
     * @param $_price
     */
    public function setPrice($_price)
    {
        $this->_price = $_price;
    }

    /**
     * @param $_weight
     */
    public function setWeight($_weight)
    {
        $this->_weight = $_weight;
    }

    /**
     * @param $_width
     */
    public function setWidth($_width)
    {
        $this->_width = $_width;
    }

    /**
     * @param $_height
     */
    public function setHeight($_height)
    {
        $this->_height = $_height;
    }

    /**
     * @param $_depth
     */
    public function setDepth($_depth)
    {
        $this->_depth = $_depth;
    }
}