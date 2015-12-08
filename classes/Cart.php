<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:04
 */

namespace Bolt;


class Cart
{
    private $products;
    private $account;

    /**
     * Cart constructor.
     * @param $products
     * @param $account
     */
    public function __construct($products, $account)
    {
        $this->products = $products;
        $this->account = $account;
    }
}