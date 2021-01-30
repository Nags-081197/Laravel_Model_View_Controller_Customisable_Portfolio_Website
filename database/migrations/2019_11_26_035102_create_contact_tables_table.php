<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_tables', function (Blueprint $table) {
            $table->bigIncrements('contact_id');
            $table->string('location_photo');
            $table->string('phone_photo');
            $table->string('whatsapp_photo');
            $table->string('skype_photo');
            $table->string('email_photo');
            $table->string('website_photo');
            $table->string('location_content');
            $table->string('phone_content');
            $table->string('whatsapp_content');
            $table->string('skype_content');
            $table->string('email_content');
            $table->string('website_content');
            $table->string('socialfb_photo');
            $table->string('socialig_photo');
            $table->string('socialtw_photo');
            $table->string('socialin_photo');
            $table->string('socialfb_link');
            $table->string('socialig_link');
            $table->string('socialtw_link');
            $table->string('socialin_link');
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
        Schema::dropIfExists('contact_tables');
    }
}
