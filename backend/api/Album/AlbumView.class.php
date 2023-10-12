<?php
const ALBUM_SITE_ROOT = __DIR__;
include_once ALBUM_SITE_ROOT . "/../../database/AlbumModel.class.php";

class AlbumView extends AlbumModel
{
    public function showAllAlbum($sortKey = '', $sortOrder = 'desc', $limit = 10): array
    {
        $albums = $this->getAllAlbum($sortKey, $sortOrder, $limit);
        return $this->parseAlbum($albums);
    }

    public function showAlbumById($albumId): array
    {
        $albums = $this->getAlbumById($albumId);
        return $this->parseAlbum($albums);
    }

    public function showAlbumBySearchQuery($searchQuery = '', $limit = 10, $offset = 0): array
    {
        $albums = $this->getAlbumBySearchQuery($searchQuery, $limit, $offset);
        return $this->parseAlbum($albums);
    }

    public function showAlbumCount($searchQuery = ''): array
    {
        return $this->getAlbumCountBySearchQuery($searchQuery);
    }

    public function showAlbumBySingerId($singerId, $limit = 10, $offset = 0): array
    {
        $albums = $this->getAlbumBySingerId($singerId, $limit, $offset);
        return $this->parseAlbum($albums);
    }

    public function showAlbumCountBySingerId($singerId): array
    {
        return $this->getAlbumCountBySingerId($singerId);
    }

    private function getThumbnailLink($url): string
    {
        $baseUrl = "../asset/img/albums/";
        return $baseUrl . $url;
    }

    private function parseAlbum($albums): array
    {
        foreach ($albums as &$album) {
            $album['image'] = $this->getThumbnailLink($album['image']);
        }
        return $albums;
    }
}