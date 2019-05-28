<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('db_slider')) {

            echo 'Table : db_slider does not exist!';

            Schema::create('db_slider', function (Blueprint $table) {
                Schema::create('db_slider', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('name');
                    $table->string('link');
                    $table->string('position');
                    $table->string('img');
                    $table->unsignedInteger('orders');
                    $table->unsignedInteger('created_by');
                    $table->unsignedInteger('updated_by');
                    $table->unsignedInteger('status');
                    $table->timestamps();
                });
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
        Schema::dropIfExists('db_slider');
    }
}
