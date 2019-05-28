<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        for ($i = 1; $i < 21; $i++) {
            $product = new Product();
            $product->name = 'Giày thể thao ' . $i;
            $product->slug = 'giay-the-thao-' . $i;
            $product->img = 'sanpham/giay.jpg';
            $product->img_list = 'sanpham/giay.jpg,sanpham/giay.jpg,sanpham/giay.jpg';
            $product->detail = 'Mô tả sản phẩm';
            $product->price = random_int(125, 1500)*1000;
            $product->price_sale = random_int(0, 1500)*1000;
            $product->meta_key = 'Màu sắc';
            $product->meta_desc = 'Màu đỏ, cam, vàng';
            $product->save();
        }
    }
}
