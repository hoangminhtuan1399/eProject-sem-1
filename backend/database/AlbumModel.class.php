<?php
include_once 'Database.class.php';

class AlbumModel extends Database
{
    protected function getAllAlbum($sortKey = '', $sortOrder = 'desc', $limit = ''): array
    {
        $query = "select * from albums" . ($sortKey ? " order by $sortKey $sortOrder" : "") . ($limit ? " limit $limit" : "");
        return $this->query($query);
    }

    protected function getAlbumBySearchQuery($searchQuery = '', $limit = 10, $offset = 0): array
    {
        $query = "
        select * from albums
        where name like '%$searchQuery%'
        order by name
        limit $limit offset $offset
        ";

        return $this->query($query);
    }

    protected function getAlbumCountBySearchQuery($searchQuery = ''): array
    {
        $query = "
        select count(*) as album_count from albums where name like '%$searchQuery%';
        ";

        return $this->query($query);
    }

    protected function getAlbumBySingerId($singerId, $limit = 10, $offset = 0): array
    {
        $query = "
        select a.*, b.name as singer_name from albums a
        join singers b 
        on a.singer_id = b.singer_id
        where a.singer_id = $singerId
        ";

        return $this->query($query);
    }

    protected function getAlbumCountBySingerId($singerId): array
    {
        $query = "
        select count(*) as album_count from albums a
        join singers b 
        on a.singer_id = b.singer_id
        where a.singer_id = $singerId
        ";

        return $this->query($query);
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
