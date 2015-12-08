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
    private $name;
    private $gender;
    private $adress;
    private $zipcode;
    private $city;
    private $phone;

    /**
     * Customer constructor.
     * @param $name
     * @param $gender
     * @param $adress
     * @param $zipcode
     * @param $city
     * @param $phone
     */
    public function __construct($name, $gender, $adress, $zipcode, $city, $phone)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->adress = $adress;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->phone = $phone;
    }
}