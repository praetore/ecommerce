<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:05
 */

namespace Bolt;


class Category
{
    private $name;
    private $products;

    /**
     * Category constructor.
     * @param $name
     * @param $products
     */
    public function __construct($name, $products)
    {
        $this->name = $name;
        $this->products = $products;
    }
}