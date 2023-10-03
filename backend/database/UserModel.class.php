<?php 
include_once 'Database.class.php';
class UserModel extends Database {
    protected function getAllUsers() {
        $query = "select * from users";
        $connect = $this -> connect();
        $result = $connect -> query($query);
        $users = $result -> fetch_all(1);
        return $users;
    }
}
?>