<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8.11.2017 г.
 * Time: 13:00
 */

namespace App\Repository;


use App\Data\EmailDTO;
use Database\DatabaseInterface;

class EmailRepository implements EmailRepositoryInterface
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
    public function insert(EmailDTO $email): bool
    {
        $this->db->query("
            INSERT INTO emails 
              (user_id, email)
            VALUE 
              (?, ?)
      ")->execute([
            $email->getUserId(),
            $email->getEmail()
        ]);

        return true;
    }

    public function delete(int $id): bool
    {

        $this->db->query("
            DELETE 
            FROM emails
            WHERE id=?
      ")->execute([$id]);
        return true;
    }

    public function findAll(): \Generator
    {
        $id=$_SESSION['id'];
        return $this->db->query("
            SELECT id, email
            FROM emails
            WHERE user_id=?
      ")->execute([$id])
            ->fetch(EmailDTO::class);
    }

    public function findByName(string $name): ?EmailDTO
    {
        return $this->db->query("
            SELECT id, user_id AS userId, email
            FROM emails
            WHERE email = ?
      ")->execute([$name])
            ->fetch(EmailDTO::class)
            ->current();
    }

    public function findById(int $id):?EmailDTO
    {
        return $this->db->query("
            SELECT id, email
            FROM emails
            WHERE id = ?
      ")->execute([$id])
            ->fetch(EmailDTO::class)
            ->current();
    }


}