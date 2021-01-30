<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutmeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutme_tables', function (Blueprint $table) {
            $table->bigIncrements('aboutme_id');
            $table->string('profile_photo');
            $table->string('titlepos');
            $table->string('portrait_photo');
            $table->string('phone_photo');
            $table->string('location_photo');
            $table->string('email_photo');
            $table->string('calendar_photo');
            $table->string('flag_photo');
            $table->string('portrait_content');
            $table->string('phone_content');
            $table->string('location_content');
            $table->string('email_content');
            $table->string('calendar_content');
            $table->string('flag_content');
            $table->string('socialfb_photo');
            $table->string('socialig_photo');
            $table->string('socialtw_photo');
            $table->string('socialin_photo');
            $table->string('socialfb_link');
            $table->string('socialig_link');
            $table->string('socialtw_link');
            $table->string('socialin_link');
            $table->string('description_content');
            $table->string('username');
            $table->timestamps();
            $table->foreign('username')->references('username')->on('signup_tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutme_tables');
    }
}
