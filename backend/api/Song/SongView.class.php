<?php
include_once __DIR__ . "/../../database/SongModel.class.php";

class SongView extends SongModel
{
    public function showAllSong($sortKey = '', $sortOrder = '', $limit = ''): array
    {
        $songs = $this->getAllSong($sortKey, $sortOrder, $limit);
        foreach ($songs as &$song) {
            $song['image'] = $this->getThumbnailLink($song['image']);
            $song['file_name'] = $this->getFileLink($song['file_name']);
        }
        return $songs;
    }

    public function showSongById($id): array
    {
        $songs = $this->getSongById($id);
        foreach ($songs as &$song) {
            $song['image'] = $this->getThumbnailLink($song['image']);
            $song['file_name'] = $this->getFileLink($song['file_name']);
        }
        return $songs;
    }

    public function showSongBySingerId($singerId): array
    {
        return $this->getSongBySingerId($singerId);
    }

    public function showSongByCategoryId($categoryId): array
    {
        return $this->getSongByCategoryId($categoryId);
    }

    public function showSongBySearchQuery($searchQuery): array
    {
        return $this->getSongBySearchQuery($searchQuery);
    }

    public function showSongCount($searchQuery): array
    {
        return $this->getSongCount($searchQuery);
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
}