<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 15:08
 */

namespace Bolt\Domain\Gateways;


abstract class BaseGateway
{
    /**
     * @var \PDO
     */
    protected $db;

    /**
     * AccountGateway constructor.
     * @param string $dbhost
     * @param int $dbport
     * @param string $dbname
     * @param string $username
     * @param string $password
     * @internal param \PDO $db
     */
    public function __construct(string $dbhost, int $dbport, string $dbname, string $username, string $password
    )
    {
        try {
            $connstring = 'mysql:host=%s;dbname=%s;port=%d;charset=UTF-8';
            $this->db = new \PDO(sprintf($connstring, $dbhost, $dbname, $dbport), $username, $password);
        } catch (\PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }
}