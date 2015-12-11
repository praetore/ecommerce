<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 22:27
 */

namespace Bolt\Domain\Gateways;


class OrderGateWay extends BaseGateway implements Gateway
{
    public function retrieveAllEntities()
    {
        $stmt = "SELECT * FROM orders ORDER BY id ASC;";
        $sth = $this->db->query($stmt);
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function retrieveEntityByID(int $id)
    {
        $stmt = "SELECT * FROM orders WHERE id = ?;";
        $sth = $this->db->prepare($stmt);
        $sth->execute(array($id));
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }

    public function removeEntityByID(int $id)
    {
        $stmt = "DELETE FROM orders WHERE id = ?;";
        $sth = $this->db->prepare($stmt);
        $sth->execute(array($id));
    }

    public function getEntityCount()
    {
        $stmt = "SELECT COUNT(*) FROM orders;";
        $sth = $this->db->query($stmt);
        return $sth->fetchColumn();
    }
}