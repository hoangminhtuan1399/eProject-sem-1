<?php
include __DIR__ . "/../../database/ArticleModel.class.php";
class ArticleView extends ArticleModel {
    public function showArticleBySingerId($id) {
        $articles = $this->getArticleBySingerId($id);
        return $this->parsedArticle($articles);
    }

    private function parsedArticle($articles) {
        foreach ($articles as &$article) {
            $article['thumbnail'] = $this->getThumbnailLink($article['thumbnail']);
        }
        return $articles;
    }

    private function getThumbnailLink($url): string
    {
        $baseUrl = "../asset/img/articles/";
        return $baseUrl . $url;
    }
}