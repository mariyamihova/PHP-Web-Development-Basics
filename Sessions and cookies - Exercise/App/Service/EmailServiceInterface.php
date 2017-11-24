<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8.11.2017 г.
 * Time: 13:15
 */

namespace App\Service;


use App\Data\EmailDTO;

interface EmailServiceInterface
{
    public function addEmail(EmailDTO $email):bool;
    public function deleteEmail(int $id):bool;
    /**
     * @return \Generator|EmailDTO[]
     */
    public function viewAll(): \Generator;
}