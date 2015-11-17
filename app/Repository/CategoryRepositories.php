<?php
/**
 * Created by PhpStorm.
 * User: Khoa Hoang
 * Date: 18/11/2015
 * Time: 3:37 AM
 */

namespace App\Repository;

use App\Model\Category;

class CategoryRepositories
{
    public function gets(Category $categories){
        $categories->all();
    }
}