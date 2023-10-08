<?php
const ALBUM_SITE_ROOT = __DIR__;
include_once ALBUM_SITE_ROOT . "/../../database/AlbumModel.class.php";
class AlbumView extends AlbumModel
{
    public function showAllAlbum($sortKey = '', $sortOrder = '', $limit = ''): array
    {
        $albums = $this -> getAllAlbum($sortKey, $sortOrder, $limit);
        return $this -> parseAlbum($albums);
    }

    public function showAlbumBySearchQuery($searchQuery): array
    {
        return $this->getAlbumBySearchQuery($searchQuery);
    }

    public function showAlbumCount($searchQuery): array
    {
        return $this->getAlbumCountBySearchQuery($searchQuery);
    }

    public function showAlbumBySingerId($singerId, $limit, $offset): array
    {
        $albums = $this -> getAlbumBySingerId($singerId);
        return $this -> parseAlbum($albums);
    }

    public function showAlbumCountBySingerId($singerId): array
    {
        return $this -> getAlbumCountBySingerId($singerId);
    }

    private function getThumbnailLink($url): string
    {
        $baseUrl = "../asset/img/albums/";
        return $baseUrl . $url;
    }

    private function parseAlbum($albums): array
    {
        foreach ($albums as &$album) {
            $album['image'] = $this -> getThumbnailLink($album['image']);
        }
        return $albums;
    }
}