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
        try {
            $connect = $this->connect();
            $result = $connect->query($query);
            $connect->close();
            return $result->fetch_all(1);
        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }

    }
}
