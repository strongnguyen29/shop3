<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('db_category')) {

            echo 'Table : db_product does not exist!';

            Schema::create('db_category', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('slug');
                $table->unsignedInteger('parentid');
                $table->unsignedInteger('orders');
                $table->string('metakey', 155);
                $table->string('metadesc', 155);
                $table->unsignedInteger('created_by');
                $table->unsignedInteger('updated_by');
                $table->unsignedInteger('status');
                $table->timestamps();
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
        Schema::dropIfExists('db_category');
    }
}
