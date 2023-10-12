<?php
include_once 'Database.class.php';

class UserModel extends Database
{
    protected function getAllUsers(): array
    {
        $query = "select * from users";
        return $this->query($query);
    }

    protected function getOneUser($username, $password): array
    {
        $query = "select * from users where username = '$username' and password = '$password'";
        return $this->query($query);
    }

    protected function createUser($username, $password, $email): mysqli_result|bool|int
    {
        $query = "insert into users (username, password, email, role) values('$username', '$password', '$email', 'user')";
        $connect = $this->connect();
        try {
            return $connect->query($query);
        } catch (Exception $e) {
            return 0;
        } finally {
            $connect->close();
        }
    }

    private function query($query): array
    {
        $connect = $this->connect();
        try {
            $result = $connect->query($query);
            return $result->fetch_all(1);
        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        } finally {
            $connect->close();
        }
    }
}
