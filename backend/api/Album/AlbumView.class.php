<?php
const ALBUM_SITE_ROOT = __DIR__;
include_once ALBUM_SITE_ROOT . "/../../database/AlbumModel.class.php";
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

    public function showAlbumBySearchQuery($searchQuery)
    {
        return $this->getAlbumBySearchQuery($searchQuery);
    }

    public function showAlbumCount($searchQuery)
    {
        return $this->getAlbumCount($searchQuery);
    }

    private function getThumbnailLink($url) {
        $baseUrl = "../asset/img/albums/";
        return $baseUrl . $url;
    }
}