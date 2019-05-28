<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('db_category_product')) {

            echo 'Table : db_category_product does not exist!';

            Schema::create('db_category_product', function (Blueprint $table) {
                $table->unsignedBigInteger('category_id');
                $table->unsignedBigInteger('product_id');
                $table->integer('order');
                $table->timestamps();
                $table->primary(['category_id', 'product_id']);
                $table->index('category_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_category_product');
    }
}
