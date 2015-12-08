<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:05
 */

namespace Bolt;


class Customer
{
    /**
     * @var string|string
     */
    private $name;
    /**
     * @var string|string
     */
    private $gender;
    /**
     * @var string|string
     */
    private $address;
    /**
     * @var string|string
     */
    private $zipcode;
    /**
     * @var string|string
     */
    private $city;
    /**
     * @var string|string
     */
    private $phone;

    /**
     * Customer constructor.
     * @param string $name
     * @param string $gender
     * @param string $address
     * @param string $zipcode
     * @param string $city
     * @param string $phone
     */
    public function __construct(string $name, string $gender, string $address, string $zipcode, string $city, string $phone)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->address = $address;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->phone = $phone;
    }
}