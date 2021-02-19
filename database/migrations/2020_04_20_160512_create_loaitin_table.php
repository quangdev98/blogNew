<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaitinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitin', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('name', 500)->index();
            $table->string('tenkhongdau', 500)->nullable($value =true);
            $table->unsignedBigInteger('id_theloai')->index();
            $table->foreign('id_theloai')->references('id')->on('theloai')->onDelete('cascade');
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
        Schema::dropIfExists('loaitin');
    }
}
