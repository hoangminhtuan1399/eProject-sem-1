<?php
include __DIR__ . '/../../database/UserModel.class.php';

class UserController extends UserModel
{
    public function signIn($username, $password): array
    {
        return $this->getOneUser($username, $password);
    }

    public function signUp($username, $password, $email): array
    {
        return $this->createUser($username, $password, $email);
    }
}
