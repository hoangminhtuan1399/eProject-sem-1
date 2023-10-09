<?php
const SITE_ROOT = __DIR__;
include_once SITE_ROOT . "/../../database/UserModel.class.php";

class UserView extends UserModel
{
    public function showAllUsers(): array
    {
        return $this->getAllUsers();
    }
}
