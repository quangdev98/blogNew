<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('tenkhongdau', 300);
            $table->string('email',100)->nullable($value = true)->index();
            $table->string('phone',20)->nullable($value = true);
            $table->string('info_more', 3000)->nullable($value = true);
            $table->string('avatar', 3000)->default('thumbnail/default.png');
            $table->tinyInteger('gender')->nullable($value = true);
            $table->dateTime('birthday')->default('1990-01-01 00:00:00');
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
        Schema::dropIfExists('author');
    }
}
