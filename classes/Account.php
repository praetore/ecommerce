<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:05
 */

namespace Bolt;


class Account
{
    /**
     * @var string|string
     */
    private $email;
    /**
     * @var string|string
     */
    private $password;
    /**
     * @var Customer
     */
    private $customer;
    /**
     * @var boolean|bool
     */
    private $disabled;

    /**
     * Account constructor.
     * @param string|string $email
     * @param string|string $password
     * @param Customer $customer
     * @param boolean $disabled
     */
    public function __construct(string $email, string $password, Customer $customer, boolean $disabled)
    {
        $this->email = $email;
        $this->password = $password;
        $this->customer = $customer;
        $this->disabled = $disabled;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }


}