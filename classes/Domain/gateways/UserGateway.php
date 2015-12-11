<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:24
 */

namespace Bolt\Domain\Gateways;


class UserGateway extends BaseGateway implements Gateway
{
    public function retrieveAllEntities()
    {
        $stmt = "SELECT * FROM users ORDER BY id ASC;";
        $sth = $this->db->query($stmt);
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function retrieveEntityByID(int $id)
    {
        $stmt = "SELECT * FROM users WHERE id = ?;";
        $sth = $this->db->prepare($stmt);
        $sth->execute(array($id));
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }

    public function removeEntityByID(int $id)
    {
        $stmt = "DELETE FROM users WHERE id = ?;";
        $sth = $this->db->prepare($stmt);
        $sth->execute(array($id));
    }

    public function getEntityCount()
    {
        $stmt = "SELECT COUNT(*) FROM users;";
        $sth = $this->db->query($stmt);
        return $sth->fetchColumn();
    }

    public function addNewUser(string $fname, string $lname, string $address, string $city,
                               string $zipcode, string $email, string $password)
    {
        try {
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->db->beginTransaction();

            $stmt = "INSERT INTO `users` (`fname`, `lname`, `address`, `city`, `pin`,
                     `email`, `password`, `type`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
            $sth = $this->db->query($stmt);
            $sth->execute(array($fname, $lname, $address, $city, $zipcode, $email, $password));

            $this->db->commit();
        } catch (\PDOException $e) {
            $this->db->rollBack();
            echo('Transaction failed: ' . $e->getMessage());
        }
    }
}