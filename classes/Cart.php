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
    /**
     * @var \ArrayObject
     */
    private $products;
    /**
     * @var Account
     */
    private $account;

    /**
     * Cart constructor.
     * @param \ArrayObject $products
     * @param Account $account
     */
    public function __construct(\ArrayObject $products, Account $account)
    {
        $this->products = $products;
        $this->account = $account;
    }
}