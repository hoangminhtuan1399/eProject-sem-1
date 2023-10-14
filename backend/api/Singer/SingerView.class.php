<?php
include_once __DIR__ . "/../../database/SingerModel.class.php";

class SingerView extends SingerModel
{
    public function showAllSinger($sortKey = '', $sortOrder = 'desc', $limit = 10): array
    {
        $singers = $this->getAllSinger($sortKey, $sortOrder, $limit);
        return $this->parseSinger($singers);
    }

    public function showSingerById($id): array
    {
        $singers = $this->getSingerById($id);
        return $this->parseSinger($singers);

    }

    public function showSingerBySearchQuery($searchQuery = '', $limit = 10, $offset = 0): array
    {
        $singers = $this->getSingerBySearchQuery($searchQuery, $limit, $offset);
        return $this->parseSinger($singers);
    }

    public function showSingerCountBySearchQuery($searchQuery = ''): array
    {
        return $this->getSingerCountBySearchQuery($searchQuery)[0]['singer_count'];
    }

    public function showLocalOrInternationalSinger($mode = 'local', $limit = 10, $offset = 0): array
    {
        $singers = $this->getLocalOrInternationalSinger($mode, $limit, $offset);
        return $this->parseSinger($singers);
    }

    public function showLocalOrInternationalSingerCount($mode = 'local'): array
    {
        return $this->getLocalOrInternationalSingerCount($mode)[0]['singer_count'];
    }

    private function getThumbnailLink($url): string
    {
        $baseUrl = "../asset/img/singers/";
        return $baseUrl . $url;
    }

    private function getSingerGender($gender): string
    {
        switch ($gender) {
            case 0:
                return 'Nữ';
            case 1:
                return 'Nam';
            default:
                return 'Khác';
        }
    }

    private function parseSinger($singers): array
    {
        foreach ($singers as &$singer) {
            $singer['image'] = $this->getThumbnailLink($singer['image']);
            $singer['gender'] = $this->getSingerGender($singer['gender']);
        }
        return $singers;
    }
}
