<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:05
 */

namespace Bolt;


class Product
{
    private $name;
    private $category;
    private $price;
    private $description;

    /**
     * Product constructor.
     * @param $name
     * @param $category
     * @param $price
     * @param $description
     */
    public function __construct($name, $category, $price, $description)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
    }
}