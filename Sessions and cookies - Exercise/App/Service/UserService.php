<?php


namespace App\Service;


use App\Data\UserDTO;
use App\Repository\UserRepository;
use App\Repository\UserServiceRepository;

class UserService implements UserServiceInterface

{
    /**
     * @var UserServiceRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     * @param UserServiceRepository $userRepository
     */
    public function __construct(UserServiceRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function register(UserDTO $userDTO,
                             $confirmPassword): bool
    {
        if ($userDTO->getPassword() != $confirmPassword) {
            return false;
        }

        if (null !== $this->userRepository->findOneByUsername($userDTO->getUsername())) {
            return false;
        }

        $plainPassword = $userDTO->getPassword();
        $passwordHash = password_hash($plainPassword, PASSWORD_BCRYPT);
        $userDTO->setPassword($passwordHash);

        return $this->userRepository->insert($userDTO);
    }

    public function login(string $username,
                          string $password): ?UserDTO
    {
        $user = $this->userRepository->findOneByUsername($username);
        if (null === $user) {
            return null;
        }

        $passwordHash = $user->getPassword();

        if (true === password_verify($password, $passwordHash)) {
            return $user;
        }

        return null;
    }

    public function getCurrentUser(): ?UserDTO
    {
        if (!isset($_SESSION['id'])) {
            return null;
        }

        return $this->userRepository->findOne($_SESSION['id']);
    }

    public function editProfile(UserDTO $user): bool
    {
        $existingUser = $this->userRepository->findOneByUsername($user->getUsername());
        if (null === $existingUser) {
            return false;
        }

        $plainPassword = $user->getPassword();
        $passwordHash = password_hash($plainPassword, PASSWORD_BCRYPT);
        $user->setPassword($passwordHash);

        return $this->userRepository->update($_SESSION['id'], $user);
    }

    /**
     * @return \Generator|UserDTO[]
     */
    public function viewAll(): \Generator
    {
        return $this->userRepository->findAll();
    }
    /**
     * @return \Generator|UserDTO[]
     */
    public function viewPage(int $start, int $perPage): \Generator
    {
        $res=$this->userRepository->countAll();
        return $this->userRepository->findAll($start,$perPage);
    }
    public function deleteProfile(UserDTO $currentUser): bool
    {
       //$currentUser = $this->getCurrentUser();
        if (null === $currentUser) {
            return false;
        }


        return $this->userRepository->delete($currentUser->getId());
    }

}