<?php
include_once __DIR__ . "/../../database/SongModel.class.php";

class SongView extends SongModel
{
    public function showAllSong($sortKey = '', $sortOrder = '', $limit = ''): array
    {
        $songs = $this->getAllSong($sortKey, $sortOrder, $limit);
        return $this->parseSong($songs);
    }

    public function showSongById($id): array
    {
        $songs = $this->getSongById($id);
        return $this->parseSong($songs);

    }

    public function showSongBySingerId($singerId, $limit, $offset): array
    {
        $songs = $this->getSongBySingerId($singerId, $limit, $offset);
        return $this->parseSong($songs);

    }

    public function showSongCountBySingerId($singerId): array
    {
        return $this->getSongCountBySingerId($singerId);
    }

    public function showSongByCategoryId($categoryId, $limit, $offset): array
    {
        $songs = $this->getSongByCategoryId($categoryId, $limit, $offset);
        return $this->parseSong($songs);
    }

    public function showSongCountByCategoryId($categoryId): array
    {
        return $this->getSongCountByCategoryId($categoryId);
    }

    public function showSongByAlbumId($albumId, $limit, $offset): array
    {
        $songs = $this->getSongByAlbumId($albumId, $limit, $offset);
        return $this->parseSong($songs);
    }

    public function showSongCountByAlbumId($albumId): array
    {
        return $this->getSongCountByAlbumId($albumId);
    }

    public function showSongBySearchQuery($searchQuery, $limit, $offset): array
    {
        $songs = $this->getSongBySearchQuery($searchQuery, $limit, $offset);
        return $this->parseSong($songs);
    }

    public function showSongCountBySearchQuery($searchQuery): array
    {
        return $this->getSongCountBySearchQuery($searchQuery);
    }

    private function getThumbnailLink($url): string
    {
        $baseUrl = "../asset/img/songs/";
        return $baseUrl . $url;
    }

    private function getFileLink($url): string
    {
        $baseUrl = "../asset/song/";
        return $baseUrl . $url;
    }

    private function parseSong($songs): array
    {
        foreach ($songs as &$song) {
            $song['image'] = $this->getThumbnailLink($song['image']);
            $song['file_name'] = $this->getFileLink($song['file_name']);
        }
        return $songs;
    }
}