<?php
include_once 'Database.class.php';

class SongModel extends Database
{
    protected function getAllSong($sortKey = '', $sortOrder = 'desc', $limit = ''): array
    {
        $query = "
        select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id" . ($sortKey ? " order by $sortKey $sortOrder" : "") . ($limit ? " limit $limit" : "");

        return $this -> query($query);
    }

    protected function getSongById($id): array
    {
        $query = "
        select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        where a.song_id = $id"
        ;

        return $this -> query($query);
    }

    protected function getSongBySingerId($singerId): array
    {
        $query = "
        select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        where b.singer_id = $singerId
        ";

        return $this -> query($query);
    }

    protected function getSongByCategoryId($categoryId): array
    {
        $query = "
        select a.*, b.name as category 
        from songs a
        join categories b
        on a.category_id = b.category_id
        where b.category_id = $categoryId
        ";

        return $this -> query($query);
    }

    protected function getSongBySearchQuery($searchQuery = '', $limit = 10, $offset = 0): array
    {
        $query = "
        select * from songs
        where name like '%$searchQuery%'
        order by name
        limit $limit offset $offset
        ";

        return $this -> query($query);
    }

    protected function getSongCount($searchQuery = ''): array
    {
        $query = "
        select count(*) as song_count from songs where name like '%$searchQuery%';
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
