<?php
const SONG_SITE_ROOT = __DIR__;
include_once SONG_SITE_ROOT . "/../../database/SongModel.class.php";

class SongView extends SongModel
{
    public function showAllSong($sortKey = '', $sortOrder = '', $limit = '')
    {
        $songs = $this->getAllSong($sortKey, $sortOrder, $limit);
        foreach ($songs as &$song) {
            $song['image'] = $this->getThumbnailLink($song['image']);
        }
        return $songs;
    }

    public function showSongBySingerId($singerId)
    {
        return $this->getSongBySingerId($singerId);
    }

    public function showSongByCategoryId($categoryId)
    {
        return $this->getSongByCategoryId($categoryId);
    }

    public function showSongBySearchQuery($searchQuery)
    {
        return $this->getSongBySearchQuery($searchQuery);
    }

    public function showSongCount($searchQuery)
    {
        return $this->getSongCount($searchQuery);
    }

    private function getThumbnailLink($url)
    {
        $baseUrl = "../asset/img/songs/";
        return $baseUrl . $url;
    }
}