<?php


namespace App\Repository;


use App\Data\NumDTO;
use App\Data\UserDTO;
use Database\DatabaseInterface;

class UserRepository implements UserServiceRepository
{
    /**
     * @var DatabaseInterface
     */

    private $db;

    /**
     * UserRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function insert(UserDTO $user): bool
    {
        $this->db->query("
            INSERT INTO users 
              (username, password, first_name, last_name, born_on)
            VALUE 
              (?, ?, ?, ?, ?)
      ")->execute([
            $user->getUsername(),
            $user->getPassword(),
            $user->getFirstName(),
            $user->getLastName(),
            $user->getBornOn()
        ]);

        return true;
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
        return $this->db->query("
            SELECT id, username, password, first_name AS firstName, last_name AS lastName, born_on AS bornOn
            FROM users
            WHERE username = ?
      ")->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function findOne(int $id): ?UserDTO
    {
        return $this->db->query("
            SELECT id, username, password, first_name AS firstName, last_name AS lastName, born_on AS bornOn
            FROM users
            WHERE id = ?
      ")->execute([$id])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function update($id, UserDTO $user): bool
    {
        $this->db->query("
            UPDATE users 
            SET
              username = ?,
              password = ?,
              first_name = ?,
              last_name = ?,
              born_on = ?
            WHERE
              id = ?
      ")->execute([
            $user->getUsername(),
            $user->getPassword(),
            $user->getFirstName(),
            $user->getLastName(),
            $user->getBornOn(),
            $id
        ]);

        return true;
    }

    /**
     * @return \Generator|UserDTO[]
     */
    public function findAll(int $start=0,int $perPage=null): \Generator
    {
        if($perPage!==null){
            return $this->db->query("
            SELECT id, username, password, first_name AS firstName, last_name AS lastName, born_on AS bornOn
            FROM users
            LIMIT ".$start.",".$perPage
      )->execute()
                ->fetch(UserDTO::class);
        }else{
            return $this->db->query("
            SELECT id, username, password, first_name AS firstName, last_name AS lastName, born_on AS bornOn
            FROM users
      ")->execute()
                ->fetch(UserDTO::class);
        }

    }
    public function delete($id): bool
    {
    $this->db->query("
            DELETE FROM users
            WHERE
              id = ?
      ")->execute([$id]);

    return true;
    }
    public function countAll()
    {
       return $this->db->query("
            SELECT COUNT(id) AS countAll
            FROM users
        ")->execute()
           ->fetch(NumDTO::class);

    }

}
