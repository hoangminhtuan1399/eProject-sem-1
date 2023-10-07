<?php
include_once 'Database.class.php';
class AlbumModel extends Database {
    protected function getAllAlbum($sortKey = '', $sortOrder = 'desc', $limit = ''): array
    {
        $query = "select * from albums" . ($sortKey ? " order by $sortKey $sortOrder" : "") . ($limit ? " limit $limit" : "");
        try {
            $connect = $this -> connect();
            $result = $connect -> query($query);
            $connect -> close();
            return $result -> fetch_all(1);
        } catch (Exception $e) {
            echo $e -> getMessage();
            return [];
        }

    }
}
