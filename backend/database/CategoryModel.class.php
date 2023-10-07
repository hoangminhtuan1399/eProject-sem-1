<?php
include_once 'Database.class.php';
class CategoryModel extends Database {
    protected function getAllCategory() {
        $query = "select * from categories";
        return $this->query($query);
    }

    private function query($query) {
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