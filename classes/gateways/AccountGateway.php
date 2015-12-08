<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 14:24
 */

namespace Bolt\Gateways;


class AccountGateway extends Gateway
{
    /**
     * @param int $id
     * @return array
     */
    public function retrieveAccountByID(int $id)
    {
        $stmt = "SELECT * FROM users WHERE id = ?";

        $sth = $this->db->prepare($stmt);
        $sth->execute(array($id));
        return $sth->fetchAll();
    }
}