<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('db_menu')) {

            echo 'Table : db_menu does not exist!';

            Schema::create('db_menu', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('link');
                $table->string('type');
                $table->unsignedInteger('parentid');
                $table->unsignedInteger('tableid');
                $table->unsignedInteger('orders');
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
        Schema::dropIfExists('db_menu');
    }
}
