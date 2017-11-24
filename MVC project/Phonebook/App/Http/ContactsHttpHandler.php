<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6.11.2017 г.
 * Time: 16:57
 */

namespace App\Http;


use App\Data\ContactDTO;
use App\Service\ContactServiceInterface;
use App\Service\ContactService;
use App\Data\ErrorDTO;

class ContactsHttpHandler extends HttpHandlerAbstract
{

    public function edit(ContactServiceInterface $contactService,
                         array $getData = [])
    {
        $id=$getData['contact_id'];
        $this->render("contacts/edit",$contactService->getContact($id));

        if(isset($_POST['add']))
        {
            $number=$_POST['phoneNumber'];
            $fname=$_POST['firstName'];
            $lname=$_POST['lastName'];

            $contactService->editProfile($id,$number,$fname,$lname);
            $this->redirect("all.php");
        }

    }

    public function delete(ContactServiceInterface $contactService,
                       array $getData = [])


   {
       print_r($getData);
       $id=$getData['contact_id'];


       if ($contactService->deleteProfile($id))
       {
           $this->redirect("all.php");
       } else {
           $this->render("app/error",
               new ErrorDTO("Cannot delete record"));
       }




    }
    public function index(ContactServiceInterface $contactService){
        $this->render("home/index");
    }


    public function listAll(ContactServiceInterface $contactService,array $formData=[])
    {
        $this->render("contacts/all", $contactService->viewAll());



    }

    public function create(ContactServiceInterface $contactService,
                             array $formData = [])
    {
        if (isset($formData['add'])) {
            $this->handleCreateProcess($contactService, $formData);
        } else {
            $this->render("contacts/add");
        }
    }



    private function handleCreateProcess(ContactServiceInterface $contactService, array $formData)
    {
        $contact = $this->dataBinder->bind($formData, ContactDTO::class);

        if ($contactService->addRecord($contact))
        {
            $this->redirect("all.php");
            print_r($_SESSION);

        } else {
            $this->render("app/error",
                new ErrorDTO("Cannot register, maybe username is already 
                taken or password mismatch"));
        }
    }

    private function handleDeleteProcess(int $id,ContactServiceInterface $contactService)
    {

    }


}