<?php
include_once 'Database.class.php';

class SongModel extends Database
{
    protected function getAllSong($sortKey, $sortOrder, $limit): array
    {
        $query = "
        select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id" . ($sortKey ? " order by $sortKey $sortOrder" : "") . " limit $limit";

        return $this->query($query);
    }

    protected function getSongById($id): array
    {
        $query = "
        select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        where a.song_id = $id";

        return $this->query($query);
    }

    protected function getSongBySingerId($singerId, $limit, $offset): array
    {
        $query = "
        select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        where b.singer_id = $singerId
        limit $limit offset $offset
        ";

        return $this->query($query);
    }

    protected function getSongCountBySingerId($singerId): array
    {
        $query = "
        select count(*) as song_count from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        where b.singer_id = $singerId
        ";

        return $this->query($query);
    }

    protected function getSongByCategoryId($categoryId, $limit, $offset): array
    {
        $query = "
        select a.*, b.name as category 
        from (
            select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
            ) a join singers b
        on a.singer_id = b.singer_id
        ) a
        join categories b
        on a.category_id = b.category_id
        where b.category_id = $categoryId
        limit $limit offset $offset
        ";

        return $this->query($query);
    }

    protected function getSongCountByCategoryId($categoryId): array
    {
        $query = "
        select count(*) as song_count
        from songs a
        join categories b
        on a.category_id = b.category_id
        where b.category_id = $categoryId
        ";

        return $this->query($query);
    }

    protected function getSongByAlbumId($albumId, $limit, $offset): array
    {
        $query = "
        select a.*, b.name as album 
        from (
            select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        ) a
        join albums b
        on a.album_id = b.album_id
        where b.album_id = $albumId
        limit $limit offset $offset
        ";

        return $this->query($query);
    }

    protected function getSongCountByAlbumId($albumId): array
    {
        $query = "
        select count(*) as song_count
        from songs a
        join albums b
        on a.album_id = b.album_id
        where b.album_id = $albumId
        ";

        return $this->query($query);
    }

    protected function getSongBySearchQuery($searchQuery, $limit, $offset): array
    {
        $query = "
        select * from (
            select a.*, b.name as singer_name from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
            ) a join singers b
        on a.singer_id = b.singer_id
        ) a
        where a.name like '%$searchQuery%'
        order by a.name
        limit $limit offset $offset
        ";

        return $this->query($query);
    }

    protected function getSongCountBySearchQuery($searchQuery = ''): array
    {
        $query = "
        select count(*) as song_count from songs where name like '%$searchQuery%';
        ";

        return $this->query($query);
    }

    protected function getLocalOrInternationalSong(
        $mode,
        $sortKey,
        $sortOrder,
        $limit,
        $offset
    ): array {
        $query = "
        select a.*, b.name as singer_name, b.nationality as nationality from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        where nationality " . ($mode === 'local' ? "=" : "!=") . "'VIE'" . ($sortKey ? " order by $sortKey $sortOrder" : "") . " limit $limit offset $offset";
        return $this->query($query);
    }

    protected function getLocalOrInternationalSongCount($mode): array
    {
        $query = "
        select count(*) as song_count from (
            select a.*, b.singer_id from songs a join songs_singers b
            on a.song_id = b.song_id
        ) a join singers b
        on a.singer_id = b.singer_id
        where b.nationality " . ($mode === 'local' ? "=" : "!=") . "'VIE'";
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
