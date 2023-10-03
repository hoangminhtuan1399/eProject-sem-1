<?php 
include_once 'Database.class.php';
class UserModel extends Database {
    protected function getAllUsers(): array
    {
        $query = "select * from users";
        $connect = $this -> connect();
        $result = $connect -> query($query);
        return $result -> fetch_all(1);
    }
}
