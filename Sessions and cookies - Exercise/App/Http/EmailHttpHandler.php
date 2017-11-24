<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8.11.2017 г.
 * Time: 13:21
 */

namespace App\Http;


use App\Data\EmailDTO;
use App\Service\EmailServiceInterface;
use App\Data\ErrorDTO;

class EmailHttpHandler extends HttpHandlerAbstract
{
 public function add(EmailServiceInterface $emailService,array $formData = [] )
{

    if (isset($formData['add'])) {
        $this->handleInsertProcess($emailService, $formData);
    } else {
        $this->render("emails/add_email");
    }
}

public function viewEmails(EmailServiceInterface $emailService)
{
    $this->render("emails/all", $emailService->viewAll());
}

    public function removeEmail(EmailServiceInterface $emailService,array $formData = [])
    {
        $id=$formData['id'];
        if($emailService->deleteEmail($id))
        {
            $this->redirect("viewEmail.php");
        }else {
            $this->render("app/error",
                new ErrorDTO("Invalid email"));
        }

    }

    private function handleInsertProcess(EmailServiceInterface $emailService, array $formData)
    {
        $email = $this->dataBinder->bind($formData, EmailDTO::class);
        $email->setUserId($_SESSION['id']);
        if ($emailService->addEmail($email))
             {
            $this->redirect("viewEmail.php");
        } else {
            $this->render("app/error",
                new ErrorDTO("Email already exists"));
        }
    }
}