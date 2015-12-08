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
    /**
     * @var string|string
     */
    private $name;
    /**
     * @var \ArrayObject
     */
    private $products;

    /**
     * Category constructor.
     * @param string $name
     * @param \ArrayObject $products
     */
    public function __construct(string $name, \ArrayObject $products)
    {
        $this->name = $name;
        $this->products = $products;
    }
}