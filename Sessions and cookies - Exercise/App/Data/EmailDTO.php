<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8.11.2017 г.
 * Time: 12:55
 */

namespace App\Data;


class EmailDTO
{
private $id;
private $userId;
private $email;

public static function create($userId,$email,$id=null)
{
    return (new EmailDTO())->setUserId($userId)
    ->setEmail($email)
    ->setId($id);
}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}