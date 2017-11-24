<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8.11.2017 г.
 * Time: 13:01
 */

namespace App\Repository;


use App\Data\EmailDTO;

interface EmailRepositoryInterface
{
    public function insert(EmailDTO $email):bool;
    public function findByName(string $email):?EmailDTO;
    public function findById(int $id):?EmailDTO;
    public function delete(int $id):bool;
    /**
     * @return \Generator|EmailDTO[]
     */
    public function findAll(): \Generator;
}