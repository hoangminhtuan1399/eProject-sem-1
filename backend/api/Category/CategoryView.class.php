<?php
const CATEGORY_SITE_ROOT = __DIR__;
include_once CATEGORY_SITE_ROOT . "/../../database/CategoryModel.class.php";

class CategoryView extends CategoryModel
{
    public function showAllCategory(): array
    {
        return $this -> getAllCategory();
    }
}