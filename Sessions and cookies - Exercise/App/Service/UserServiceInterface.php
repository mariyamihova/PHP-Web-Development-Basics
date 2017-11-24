<?php


namespace App\Service;


use App\Data\UserDTO;

interface UserServiceInterface
{

    public function register(UserDTO $user, $confirmPass):bool;
    public function login(string $username, string $password):?UserDTO;
    public function getCurrentUser(): ?UserDTO;

    public function editProfile(UserDTO $user):bool;
    public function deleteProfile(UserDTO $user): bool;

    /**
     * @return \Generator|UserDTO[]
     */
    public function viewAll(): \Generator;


}