<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 22:55
 */

namespace Bolt\Domain\Gateways;


interface Gateway
{
    public function retrieveAllEntities();
    public function retrieveEntityByID(int $id);
    public function removeEntityByID(int $id);
    public function getEntityCount();
}