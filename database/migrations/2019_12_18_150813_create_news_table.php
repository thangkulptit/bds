<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('title_h1')->nullable();
            $table->text('desc')->nullable();
            $table->text('bgr')->nullable();
            $table->text('content')->nullable();
            $table->text('title1')->nullable();
            $table->text('images1')->nullable();
            $table->text('text1')->nullable();

            $table->text('title2')->nullable();
            $table->text('images2')->nullable();
            $table->text('text2')->nullable();

            $table->text('title3')->nullable();
            $table->text('images3')->nullable();
            $table->text('text3')->nullable();

            $table->text('title4')->nullable();
            $table->text('images4')->nullable();
            $table->text('text4')->nullable();

            $table->text('title5')->nullable();
            $table->text('images5')->nullable();
            $table->text('text5')->nullable();
            $table->tinyInteger('hot_news')->nullable()->default(0);
            $table->tinyInteger('tieu_bieu')->nullable()->default(0);
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
        Schema::dropIfExists('news');
    }
}
