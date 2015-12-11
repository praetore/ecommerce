<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 16:52
 */

namespace Bolt\Domain\Gateways;


class ProductGateway extends BaseGateway implements Gateway
{
    public function retrieveAllEntities()
    {
        $stmt = "SELECT * FROM products ORDER BY id ASC;";
        $sth = $this->db->query($stmt);
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function retrieveEntityByID(int $id)
    {
        $stmt = "SELECT * FROM products WHERE id = ?;";
        $sth = $this->db->prepare($stmt);
        $sth->execute(array($id));
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }

    public function removeEntityByID(int $id)
    {
        $stmt = "DELETE FROM products WHERE id = ?;";
        $sth = $this->db->prepare($stmt);
        $sth->execute(array($id));
    }

    public function getEntityCount()
    {
        $stmt = "SELECT COUNT(*) FROM products;";
        $sth = $this->db->query($stmt);
        return $sth->fetchColumn();
    }

    /**
     * @param string $productcode
     * @param string $productname
     * @param string $productdesc
     * @param string $productimg
     * @param int $quantity
     * @param double $price
     */
    public function addNewProduct(string $productcode, string $productname,
                                  string $productdesc, string $productimg,
                                  int $quantity, float $price)
    {
        try {
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->db->beginTransaction();

            $stmt = "INSERT INTO products (product_code, product_name, product_desc, product_img_name, qty, price)
                     VALUES (?, ?, ?, ?, ?, ?);";
            $sth = $this->db->prepare($stmt);
            $sth->execute(array($productcode, $productname, $productdesc, $productimg, $quantity, $price));

            $this->db->commit();
        } catch (\PDOException $e) {
            $this->db->rollBack();
            echo('Transaction failed: ' . $e->getMessage());
        }
    }
}