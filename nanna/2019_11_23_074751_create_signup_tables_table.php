<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignupTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signup_tables', function (Blueprint $table) {
            $table->Increments('signup_id');
            $table->dropPrimary('signup_tables_signup_id_primary');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('username')->primary();
            $table->string('password');
            $table->string('re_password');
            $table->string('account_type');
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
        Schema::dropIfExists('signup_tables');
    }
}
