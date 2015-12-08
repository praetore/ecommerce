<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 15:08
 */

namespace Bolt\Gateways;


use PDO;

class Gateway
{
    /**
     * @var PDO
     */
    protected $db;

    /**
     * AccountGateway constructor.
     * @param PDO $db
     */
    public function __construct(string $dbhost,
                                int $dbport,
                                string $dbname,
                                string $username,
                                string $password
    )
    {
        $connstring = 'mysql:host= %s ;dbname= %s ;port= %d ;charset=UTF-8';
        $this->db = new PDO(sprintf($connstring, $dbhost, $dbname, $dbport), $username, $password);
    }
}