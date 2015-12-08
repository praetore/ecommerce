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
    private $customer;
    private $products;
    private $totalPrice;

    /**
     * Order constructor.
     * @param $customer
     * @param $products
     * @param $totalPrice
     */
    public function __construct($customer, $products, $totalPrice)
    {
        $this->customer = $customer;
        $this->products = $products;
        $this->totalPrice = $totalPrice;
    }
}