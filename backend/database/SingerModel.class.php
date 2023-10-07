<?php
include_once 'Database.class.php';

class SingerModel extends Database {
    protected function getAllSinger($sortKey = '', $sortOrder = 'desc', $limit = ''): array
    {
        $query = "select * from singers" . ($sortKey ? " order by $sortKey $sortOrder" : "") . ($limit ? " limit $limit" : "");

        return $this -> query($query);
    }

    protected function getSingerById($id): array
    {
        $query = "select * from singers where singer_id = $id"
        ;

        return $this -> query($query);
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