<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6.11.2017 г.
 * Time: 17:12
 */

namespace App\Repo;


use App\Data\ContactDTO;
use Database\DatabaseInterface;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */

    private $db;

    /**
     * ContactRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    public function read()
    {
        return $this->db->query("SELECT id, number as phoneNumber,
        first_name as firstName,
        last_name as lastName
        from contacts")
            ->execute()
            ->fetch(ContactDTO::class);
    }

    public function insert(ContactDTO $contact)
    {
        return $this->db->query("INSERT into contacts (number,first_name,last_name)
 VALUES (?,?,?)")
            ->execute([$contact->getPhoneNumber(),$contact->getFirstName(),$contact->getLastName()]);

    }

    public function update(int $id, string $number, string $fname, string $lname)
    {
        $this->db->query("
            UPDATE contacts 
            SET
              number = ?,
              first_name = ?,
              last_name = ?
            WHERE
              id = ?
      ")->execute([
            $number,
            $fname,
            $lname,
            $id
        ]);

        return true;
    }

    public function delete(int $id):bool
    {
        $this->db->query("
            DELETE FROM contacts 
            WHERE
              id = ?
      ")->execute([$id]);

        return true;
    }



    public function findOne(int $id)
    {
        return $this->db->query("
            SELECT id, number AS phoneNumber, first_name AS firstName, last_name AS lastName
            FROM contacts
            WHERE id = ?
      ")->execute([$id])
            ->fetch(ContactDTO::class)
            ->current();
    }

}