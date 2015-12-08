<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:04
 */

namespace Bolt;


class Order
{
    /**
     * @var Customer
     */
    private $customer;
    /**
     * @var \ArrayObject
     */
    private $products;
    /**
     * @var int|int
     */
    private $totalPrice;

    /**
     * Order constructor.
     * @param Customer $customer
     * @param \ArrayObject $products
     * @param int $totalPrice
     */
    public function __construct(Customer $customer, \ArrayObject $products, int $totalPrice)
    {
        $this->customer = $customer;
        $this->products = $products;
        $this->totalPrice = $totalPrice;
    }
}