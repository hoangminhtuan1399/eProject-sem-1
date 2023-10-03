<?php
include_once "../../database/UserModel.class.php";
class UserView extends UserModel
{
    public function showAllUsers() {
        $results = $this -> getAllUsers();
        return $results;
    }
}
