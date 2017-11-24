<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8.11.2017 г.
 * Time: 13:17
 */

namespace App\Service;


use App\Data\EmailDTO;
use App\Repository\EmailRepositoryInterface;

class EmailService implements EmailServiceInterface
{
    /**
     * @var EmailRepositoryInterface
     */
    private $emailRepository;

    /**
     * UserService constructor.
     * @param EmailRepositoryInterface $userRepository
     */
    public function __construct(EmailRepositoryInterface $emailRepository)
    {
        $this->emailRepository = $emailRepository;
    }

    public function addEmail(EmailDTO $email): bool
    {
        if(null!==$this->emailRepository->findByName($email->getEmail()))
        {
            return false;
        }
        return $this->emailRepository->insert($email);
    }

    public function deleteEmail(int $id): bool
    {

        if(null===$this->emailRepository->findById($id))
        {
            return false;
        }
        else
        {
            return $this->emailRepository->delete($id);
        }
    }
    /**
     * @return \Generator|EmailDTO[]
     */
    public function viewAll(): \Generator
    {
        return $this->emailRepository->findAll();
    }

}