<?php
include_once 'Database.class.php';

class SingerModel extends Database {
    protected function getAllSinger($sortKey, $sortOrder, $limit): array
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

    protected function getSingerBySearchQuery($searchQuery, $limit, $offset): array
    {
        $query = "
        select * from singers
        where name like '%$searchQuery%'
        order by name
        limit $limit offset $offset
        ";

        return $this -> query($query);
    }

    protected function getSingerCountBySearchQuery($searchQuery): array
    {
        $query = "
        select count(*) as singer_count from singers where name like '%$searchQuery%';
        ";

        return $this -> query($query);
    }

    protected function getLocalOrInternationalSinger($mode, $limit, $offset): array
    {
        $query = "
        select * from singers where nationality" . ($mode === 'local' ? "=" : "!=") . "'VIE'
        order by name
        limit $limit offset $offset
        ";

        return $this -> query($query);
    }

    protected function getLocalOrInternationalSingerCount($mode): array
    {
        $query = "
        select count(*) as singer_count from singers where nationality" . ($mode === 'local' ? "=" : "!=") . "'VIE'
        ";

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