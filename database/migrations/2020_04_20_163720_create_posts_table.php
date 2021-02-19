<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('name',500)->index();
            $table->string('tenkhongdau', 500);
            $table->string('content_less',500)->index();
            $table->string('status')->default($value = '1');
            $table->longtext('content');
            $table->dateTime('posted_date')->index();
            $table->string('soluotxem', 11);
            $table->unsignedBigInteger('id_loaitin')->nullable($value=true)->index();
            $table->foreign('id_loaitin')->references('id')->on('loaitin')->onDelete('cascade');
            $table->string('thumbnail', 3000)->default('thumbnail/default.png');
            $table->unsignedBigInteger('author_id')->nullable($value = true)->index();
            $table->foreign('author_id')->references('id')->on('author')->onDelete('set null');
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
        Schema::dropIfExists('posts');
    }
}
