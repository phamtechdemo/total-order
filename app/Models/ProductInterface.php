<?php
namespace App\Models;

interface ProductInterface
{

    /**
     * @return float
     */
    public function getPrice();

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @return float
     */
    public function getWidth();

    /**
     * @return float
     */
    public function getHeight();

    /**
     * @return float
     */
    public function getDepth();

    /**
     * @param $_price
     */
    public function setPrice($_price);

    /**
     * @param $_weight
     */
    public function setWeight($_weight);

    /**
     * @param $_width
     */
    public function setWidth($_width);

    /**
     * @param $_height
     */
    public function setHeight($_height);

    /**
     * @param $_depth
     */
    public function setDepth($_depth);
}