<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiremeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hireme_tables', function (Blueprint $table) {
            $table->bigIncrements('hireme_id');
            $table->string('cart_photo');
            $table->string('hire_price');
            $table->string('hire_title');
            $table->string('hire_service1');
            $table->string('hire_service2');
            $table->string('hire_service3');
            $table->string('username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hireme_tables');
    }
}
