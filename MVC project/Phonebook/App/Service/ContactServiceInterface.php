<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6.11.2017 г.
 * Time: 19:05
 */

namespace App\Service;


use App\Data\ContactDTO;

interface ContactServiceInterface
{
    public function addRecord(ContactDTO $contact);

    public function editProfile(int $id,string $number, string $fname,string $lname);
    public function deleteProfile(int $id);

    /**
     * @return \Generator|ContactDTO[]
     */
    public function viewAll();
    public function getContact(int $id);
}