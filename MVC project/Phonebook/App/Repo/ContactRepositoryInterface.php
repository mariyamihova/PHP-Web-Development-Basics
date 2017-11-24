<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6.11.2017 г.
 * Time: 17:00
 */

namespace App\Repo;


use App\Data\ContactDTO;


interface ContactRepositoryInterface
{

    public function read();
    public function insert(ContactDTO $contact);
    public function update(int $id, string $number, string $fname, string $lname);
    public function delete(int $id);
    public function findOne(int $id);
}