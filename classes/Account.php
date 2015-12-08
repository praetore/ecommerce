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
    private $email;
    private $password;
    private $customer;

    /**
     * Account constructor.
     * @param $email
     * @param $password
     * @param $customer
     */
    public function __construct($email, $password, $customer)
    {
        $this->email = $email;
        $this->password = $password;
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}