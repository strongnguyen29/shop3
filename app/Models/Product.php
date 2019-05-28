<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    /**
     * Bảng quan hệ giữa bảng db_category và db_product
     */
    const TABLE_CAT_PRO = 'db_category_product';

    /**
     * Bảng quan hệ giữa bảng db_category và db_product
     */
    const TABLE_PRODUCT = 'db_product';

    /**
     * The table associated with the model.
     *
     * @var    string
     */
    protected $table = 'db_product';

    /**
     * Lấy san phẩm theo category ID;
     *
     * @param $category_id
     * @return bool|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getProductsByCategory($category_id) {
        $listProduct = Product::query()
            ->join(Product::TABLE_CAT_PRO, Product::TABLE_PRODUCT.'.id', '=', Product::TABLE_CAT_PRO . '.product_id')
            ->select(Product::TABLE_PRODUCT . '.*')
            ->where(Product::TABLE_CAT_PRO.'.category_id', '=', $category_id)
            ->get();

        return count($listProduct) > 0 ? $listProduct : false;
    }

    /**
     * Lấy dữ liệu san phẩm cho trang chủ;
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getProductsOnHome() {
        $listProduct = Product::query()
            ->orderBy(Product::CREATED_AT)
            ->take(12)
            ->get();

        return $listProduct;
    }
}
