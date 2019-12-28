<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('bgr');
            $table->text('desc');
            $table->text('address');
            $table->text('phone');
            $table->text('hour_online');
            $table->string('gap_go_doi_ngu_title');
            $table->text('gap_go_doi_ngu_desc');
            $table->text('list_img');
            $table->text('list_name');
            $table->text('list_desc');
            $table->text('status');
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
        Schema::dropIfExists('contacts');
    }
}
