<?php
const SONG_SITE_ROOT = __DIR__;
include_once SONG_SITE_ROOT . "/../../database/SongModel.class.php";
class SongView extends SongModel
{
    public function showAllSong($sortKey = '', $sortOrder = '', $limit = '')
    {
        $songs = $this -> getAllSong($sortKey, $sortOrder, $limit);
        foreach ($songs as &$song) {
            $song['image'] = $this -> getThumbnailLink($song['image']);
        }
        return $songs;
    }

    private function getThumbnailLink($url) {
        $baseUrl = "../asset/img/songs/";
        return $baseUrl . $url;
    }
}