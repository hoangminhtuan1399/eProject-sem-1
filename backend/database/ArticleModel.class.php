<?php
include_once 'Database.class.php';

class ArticleModel extends Database
{
    protected function getArticleBySingerId($id): array
    {
        $query = "select * from articles where singer_id = $id";
        return $this->query($query);
    }

    private function query($query): array
    {
        $connect = $this->connect();
        try {
            $result = $connect->query($query);
            return $result->fetch_all(1);
        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        } finally {
            $connect->close();
        }
    }
}
