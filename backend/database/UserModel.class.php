<?php 
include_once 'Database.class.php';
class UserModel extends Database {
    protected function getAllUsers(): array
    {
        $query = "select * from users";
        return $this->query($query);
    }

    private function query($query): array
    {
        $connect = $this -> connect();
        try {
            $result = $connect -> query($query);
            return $result -> fetch_all(1);
        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        } finally {
            $connect->close();
        }
    }
}
