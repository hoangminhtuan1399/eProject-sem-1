<?php
const SITE_ROOT = __DIR__;
include_once SITE_ROOT . "/../../database/AlbumModel.class.php";
class AlbumView extends AlbumModel
{
    public function showAllAlbum($sortKey = '', $sortOrder = '', $limit = '')
    {
        $albums = $this -> getAllAlbum($sortKey, $sortOrder, $limit);
        foreach ($albums as &$album) {
            $album['image'] = $this -> getThumbnailLink($album['image']);
        }
        return $albums;
    }

    private function getThumbnailLink($url) {
        $baseUrl = "../asset/img/albums/";
        return $baseUrl . $url;
    }
}