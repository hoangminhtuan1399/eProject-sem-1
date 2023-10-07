<?php
include_once __DIR__ . "/../../database/SingerModel.class.php";

class SingerView extends SingerModel
{
    public function showAllSinger($sortKey = '', $sortOrder = '', $limit = ''): array
    {
        $singers = $this->getAllSinger($sortKey, $sortOrder, $limit);
        foreach ($singers as &$singer) {
            $singer['image'] = $this->getThumbnailLink($singer['image']);
        }
        return $singers;
    }

    public function showSingerById($id): array
    {
        $singers = $this->getSingerById($id);
        foreach ($singers as &$singer) {
            $singer['image'] = $this->getThumbnailLink($singer['image']);
        }
        return $singers;
    }

    private function getThumbnailLink($url): string
    {
        $baseUrl = "../asset/img/singers/";
        return $baseUrl . $url;
    }
}
