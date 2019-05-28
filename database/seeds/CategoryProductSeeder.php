<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $values = array();

        for ($i = 1; $i < 21; $i++) {
            $values[] = array(
                'category_id' => random_int(1 , 7),
                'product_id' => $i,
                'order' => 0
            );
        }
        DB::table('db_category_product')->insert($values);
    }
}
