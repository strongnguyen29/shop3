<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('db_product')) {

            echo 'Table : db_product does not exist!';

            Schema::create('db_product', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('slug');
                $table->string('img');
                $table->string('img_list');
                $table->string('detail');
                $table->unsignedInteger('price');
                $table->unsignedInteger('price_sale');
                $table->string('meta_key', 155);
                $table->string('meta_desc', 155);
                $table->timestamps();
                $table->index('slug');
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
        Schema::dropIfExists('db_product');
    }
}
