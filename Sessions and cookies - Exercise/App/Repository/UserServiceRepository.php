<?php
/**
 * Created by PhpStorm.
 * User: users
 * Date: 4.11.2017 г.
 * Time: 15:14
 */

namespace App\Repository;

use App\Data\UserDTO;

interface UserServiceRepository
{

    public function insert(UserDTO $user):bool;
    public function findOneByUsername(string $username):?UserDTO;
    public function findOne(int $id):?UserDTO;
    public function update($id,UserDTO $user):bool;
    public function delete($id):bool;
    /**
     * @return \Generator|UserDTO[]
     */
    public function findAll(): \Generator;


}