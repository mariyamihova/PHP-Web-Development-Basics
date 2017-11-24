<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6.11.2017 г.
 * Time: 19:08
 */

namespace App\Service;


use App\Data\ContactDTO;
use App\Repo\ContactRepositoryInterface;
use App\Repo\ContactRepository;

class ContactService implements ContactServiceInterface
{
/**
 * @var ContactRepositoryInterface
 */

private $contactRepository;


    public function __construct($contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function addRecord(ContactDTO $contact)
    {
        return $this->contactRepository->insert($contact);
    }

    public function editProfile(int $id, string $number, string $fname, string $lname)
    {


            $this->contactRepository->update($id,$number,$fname,$lname);

    }

    public function deleteProfile(int $id):bool
    {
        return $this->contactRepository->delete($id);
    }

    public function viewAll()
    {
        return $this->contactRepository->read();
    }

    public function getCurrentUser(int $id)
    {


        return $this->contactRepository->findOne($id);
    }

    public function getContact(int $id)
    {
        if(null===$this->contactRepository->findOne($id))
        {
            return false;
        }
        else {
           return $contact = $this->contactRepository->findOne($id);
        }
    }

}