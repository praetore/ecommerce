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
    /**
     * @var string|string
     */
    private $name;
    /**
     * @var Category
     */
    private $category;
    /**
     * @var double|float
     */
    private $price;
    /**
     * @var string|string
     */
    private $description;

    /**
     * Product constructor.
     * @param string $name
     * @param Category $category
     * @param double $price
     * @param string $description
     */
    public function __construct(string $name, Category $category, double $price, string $description)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
    }
}