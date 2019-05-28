<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var    string
     */
    protected $table = 'db_category';

    public static function getCategories() {

        return Category::where(['status' => 1, 'parentid' => 0])->get();
    }

    public static function getSubCategories($parent_id = 0) {

        return Category::where(['status' => 1, 'parentid' => $parent_id])->get();
    }
}
